<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterRegisterRequest;
use DB;
use Validator;
use App\Services\UserService;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Auth\Events\Registered;
use Clarkeash\Doorman\Facades\Doorman;
use Clarkeash\Doorman\Exceptions\DoormanException;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'user/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->middleware('guest');
        $this->service = $userService;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Register new user
     *
     * @param RegisterRegisterRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function register(RegisterRegisterRequest $request)
    {
        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /*
     * Возвращает путь для редиректа
     */

    public function registered()
    {
        $this->useInvite();
        return response()->json(['path' => $this->redirectTo]);
    }

    /**
     * Автоподстановка для клубов
     *
     * @return mixed
     */

    public function autocompleteClubs()
    {
        $term = Input::get('term');

        return Response::json($this->service->getClubByAbc($term));
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return DB::transaction(function() use ($data) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password'])
            ]);

            return $this->service->create($user, $data['password'], $data);
        });
    }

    /**
     * Отмечает инвайт использованным
     */

    protected function useInvite()
    {
        if(!empty(request()->get('invite')))
        {
            try {
                Doorman::redeem(request()->get('invite'));
            } catch (DoormanException $e) {
                #return response()->json(['error' => $e->getMessage()], 422);
            }
        }
    }
}
