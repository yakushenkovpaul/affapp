<?php

namespace App\Services;

use DB;
use Auth;
use Mail;
use Config;
use Session;
use Exception;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\Team;
use App\Models\Role;
use App\Models\Club;
use App\Events\UserRegisteredEmail;
use App\Notifications\ActivateUserEmail;
use Illuminate\Support\Facades\Schema;
use Clarkeash\Doorman\Facades\Doorman;
use App\Models\ReferralProgram;
use App\Models\ReferralLink;

class UserService
{
    /**
     * User model
     * @var User
     */
    public $model;

    /**
     * User Meta model
     * @var UserMeta
     */
    protected $userMeta;

    /**
     * Role Service
     * @var RoleService
     */
    protected $role;

    /**
     * Club Service
     * @var ClubService
     */

    protected $club;

    public function __construct(
        User $model,
        UserMeta $userMeta,
        Role $role,
        Club $club
    ) {
        $this->model = $model;
        $this->userMeta = $userMeta;
        $this->role = $role;
        $this->club = $club;
    }

    /**
     * Get all users
     *
     * @return array
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Find a user
     * @param  integer $id
     * @return User
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Search the users
     *
     * @param  string $input
     * @return mixed
     */
    public function search($input)
    {
        $query = $this->model->orderBy('created_at', 'desc');

        $columns = Schema::getColumnListing('users');

        foreach ($columns as $attribute) {
            $query->orWhere($attribute, 'LIKE', '%'.$input.'%');
        };

        return $query->paginate(env('PAGINATE', 25));
    }

    /**
     * Find a user by email
     *
     * @param  string $email
     * @return User
     */
    public function findByEmail($email)
    {
        return $this->model->findByEmail($email);
    }

    /**
     * Find random user by email like
     *
     * @return User
     */

    public function findByEmailLike()
    {
        return $this->model->findByEmailLike();
    }

    /**
     * Find by Role ID
     * @param  integer $id
     * @return Collection
     */
    public function findByRoleID($id)
    {
        $usersWithRepo = [];
        $users = $this->model->all();

        foreach ($users as $user) {
            if ($user->roles->first()->id == $id) {
                $usersWithRepo[] = $user;
            }
        }

        return $usersWithRepo;
    }

    /**
     * Find by the user meta activation token
     *
     * @param  string $token
     * @return boolean
     */
    public function findByActivationToken($token)
    {
        $userMeta = $this->userMeta->where('activation_token', $token)->first();

        if ($userMeta) {
            return $userMeta->user();
        }

        return false;
    }

    /**
     * Create a user's profile
     *
     * @param $user
     * @param $password
     * @param array $userMetaArray
     * @param string $role
     * @param bool $sendEmail
     * @return mixed
     * @throws Exception
     */

    public function create($user, $password, $userMetaArray = array(), $role = 'customer', $sendEmail = true)
    {
        try {

            DB::transaction(function () use ($user, $password, $userMetaArray, $role, $sendEmail) {
                $this->userMeta->firstOrCreate([
                    'user_id' => $user->id,
                    'lastname' => (!empty($userMetaArray['lastname'])) ? $userMetaArray['lastname'] :   null,
                    'city' => (!empty($userMetaArray['city'])) ? $userMetaArray['city'] :   null,
                    'birthday' => (!empty($userMetaArray['birthday'])) ? $userMetaArray['birthday'] :   null,
                    'gender' => (!empty($userMetaArray['gender'])) ? $userMetaArray['gender'] :   null,
                    'club_id' => (!empty($userMetaArray['club_id'])) ? $userMetaArray['club_id'] :   0,
                    'mail' => (!empty($userMetaArray['mail'])) ? $userMetaArray['mail'] :   0,
                    'avatar' => (!empty($userMetaArray['avatar'])) ? $userMetaArray['avatar'] :   0, //удалить после dummy данных
                    'is_active' => (!empty($userMetaArray['is_active'])) ? $userMetaArray['is_active'] :   0, //удалить после dummy данных
                ]);

                $this->assignRole($role, $user->id);

                if ($sendEmail) {
                    event(new UserRegisteredEmail($user, $password));
                }

            });

            $this->setAndSendUserActivationToken($user);

            event(new \App\Events\UserReferred(request()->cookie('ref'), $user));

            return $user;
        } catch (Exception $e) {
            #throw new Exception("We were unable to generate your profile, please try again later.", 1);
            throw new Exception($e->getMessage(), 1);
        }
    }

    /**
     * Update a user's profile
     *
     * @param  int $userId User Id
     * @param  array $inputs UserMeta info
     * @return User
     */
    public function update($userId, $payload)
    {
        try {
            return DB::transaction(function () use ($userId, $payload) {
                $user = $this->model->find($userId);

                $userMetaResult = (isset($payload['meta'])) ? $user->meta->update($payload['meta']) : true;

                $user->update($payload);

                if (isset($payload['roles'])) {
                    $this->unassignAllRoles($userId);
                    $this->assignRole($payload['roles'], $userId);
                }

                return $user;
            });
        } catch (Exception $e) {
            throw new Exception("We were unable to update your profile", 1);
        }
    }

    /**
     * Invite a new member
     * @param  array $info
     * @return void
     */

    /*
    public function invite($info)
    {
        $password = substr(md5(rand(1111, 9999)), 0, 10);

        return DB::transaction(function () use ($password, $info) {
            $user = $this->model->create([
                'email' => $info['email'],
                'name' => $info['name'],
                'password' => bcrypt($password)
            ]);

            return $this->create($user, $password, $info['roles'], true);
        });
    }
    */


    public function getInviteLink($userId, $program)
    {
        $program = ReferralProgram::whereName($program)->first();
        $user = $this->model->find($userId);
        $link = ReferralLink::getReferral($user, $program);

        if(!$code = Doorman::available($userId))
        {
            Doorman::generate()->user($userId)->uses(20)->make();
            $code = Doorman::available($userId);
        }

        return $link->getLinkAttribute() . '&invite=' . $code->code;

    }

    /**
     * Рассылает приглашение и реферальную ссылку
     *
     * @param $userId
     * @param $payload
     * @return bool
     */

    public function invite($userId, $payload, $program)
    {
        $program = ReferralProgram::whereName($program)->first();
        $user = $this->model->find($userId);

        $link = ReferralLink::getReferral($user, $program);

        if(!$code = Doorman::available($userId, $payload['email_invite']))
        {
            Doorman::generate()->uses(1)->user($userId)->for($payload['email_invite'])->make();
            $code = Doorman::available($userId, $payload['email_invite']);
        }

        event(new \App\Events\UserInvite($user, $payload['email_invite'], $link->getLinkAttribute(), $code->code));

        return true;
    }


    /**
     * Destroy the profile
     *
     * @param  int $id
     * @return bool
     */
    public function destroy($id)
    {
        try {
            return DB::transaction(function () use ($id) {
                $this->unassignAllRoles($id);

                $userMetaResult = $this->userMeta->where('user_id', $id)->delete();
                $userResult = $this->model->find($id)->delete();

                return ($userMetaResult && $userResult);
            });
        } catch (Exception $e) {
            throw new Exception("We were unable to delete this profile", 1);
        }
    }

    /**
     * Switch user login
     *
     * @param  integer $id
     * @return boolean
     */
    public function switchToUser($id)
    {
        try {
            $user = $this->model->find($id);
            Session::put('original_user', Auth::id());
            Auth::login($user);
            return true;
        } catch (Exception $e) {
            throw new Exception("Error logging in as user", 1);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Roles
    |--------------------------------------------------------------------------
    */

    /**
     * Switch back
     *
     * @param  integer $id
     * @return boolean
     */
    public function switchUserBack()
    {
        try {
            $original = Session::pull('original_user');
            $user = $this->model->find($original);
            Auth::login($user);
            return true;
        } catch (Exception $e) {
            throw new Exception("Error returning to your user", 1);
        }
    }

    /**
     * Set and send the user activation token via email
     *
     * @param void
     */
    public function setAndSendUserActivationToken($user)
    {
        $token = md5(str_random(40));

        $user->meta()->update([
            'activation_token' => $token
        ]);

        $user->notify(new ActivateUserEmail($token));
    }

    /**
     * Assign a role to the user
     *
     * @param  string $roleName
     * @param  integer $userId
     * @return void
     */
    public function assignRole($roleName, $userId)
    {
        $role = $this->role->findByName($roleName);
        $user = $this->model->find($userId);

        $user->roles()->attach($role);
    }

    /**
     * Unassign a role from the user
     *
     * @param  string $roleName
     * @param  integer $userId
     * @return void
     */
    public function unassignRole($roleName, $userId)
    {
        $role = $this->role->findByName($roleName);
        $user = $this->model->find($userId);

        $user->roles()->detach($role);
    }

    /**
     * Unassign all roles from the user
     *
     * @param  string $roleName
     * @param  integer $userId
     * @return void
     */
    public function unassignAllRoles($userId)
    {
        $user = $this->model->find($userId);
        $user->roles()->detach();
    }

    /*
    |--------------------------------------------------------------------------
    | Clubs
    |--------------------------------------------------------------------------
    */

    /**
     * Return list of clubs
     * @return array
     */

    public function getAllClubs()
    {
        $result = array();

        if($return = $this->club->all(['id', 'name'])->toArray())
        {
            foreach ($return as $r)
            {
                $result[$r['name']] = $r['id'];
            }
        }

        return $result;
    }

    /**
     * Возвращает клубы по поисковому запросу
     *
     * @param string $find
     * @return array
     */

    public function getClubByAbc($find = '')
    {
        $result = [];

        if($return = $this->club->getClubsByAbc($find))
        {
            foreach ($return as $r)
            {
                $result[] = [
                    'id' => $r->id,
                    'value' => $r->name
                ];
            }
        }

        return $result;
    }

    /**
     * Устанавливает клуб по-умолчанию для пользователя
     *
     * @param $userId
     * @param $club_id
     * @return mixed
     */

    public function setClubMain($userId, $club_id)
    {
        $user = $this->model->find($userId);

        return $user->meta->update(['club_id' => $club_id]);
    }


    /**
     * Возвращает приведенных пользователей по программе
     *
     * @param $program
     */

    public function referrals($program)
    {
        $user = request()->user();

        return ReferralLink::getReferral($user, $program)->relationships()->paginate(env('PAGINATE', 25));
    }

}
