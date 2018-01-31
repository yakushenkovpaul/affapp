<?php

namespace App\Services;

use App\Models\Club;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class ClubService
{
    /**
     * Service Model
     *
     * @var Model
     */
    public $model;

    /**
     * Pagination
     *
     * @var integer
     */
    public $pagination;

    /**
     * Service Constructor
     *
     * @param Club $club
     */
    public function __construct(Club $club)
    {
        $this->model        = $club;
        $this->pagination   = env('PAGINATION', 25);
    }

    /**
     * All Model Items
     *
     * @return array
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Paginated items
     *
     * @return LengthAwarePaginator
     */
    public function paginated()
    {
        return $this->model->paginate($this->pagination);
    }

    public function pending()
    {
        return $this->model->where('status', '=', 2)->paginate($this->pagination);
    }

    /**
     * Search the model
     *
     * @param  mixed $payload
     * @return LengthAwarePaginator
     */
    public function search($payload)
    {
        $query = $this->model->orderBy('created_at', 'desc');
        $query->where($this->model->primaryKey, 'LIKE', '%'.$payload.'%');

        $columns = Schema::getColumnListing('clubs');

        foreach ($columns as $attribute) {
            $query->orWhere($attribute, 'LIKE', '%'.$payload.'%');
        };

        return $query->paginate($this->pagination)->appends([
            'search' => $payload
        ]);
    }

    public function uploadImage($object_id)
    {
        if(!empty($object_id) && !empty(request()->file('image')))
        {
            $path = 'images/clubs/' . self::getPath($object_id);


            if(!Storage::disk('public')->exists($path))
            {
                Storage::disk('public')->makeDirectory($path);
            }

            Storage::disk('public')->putFileAs(
                $path, request()->file('image'), 'logo.png'
            );

        }
    }


    public static function getPath($id)
    {
        return ceil($id/100) . DIRECTORY_SEPARATOR . $id;
    }

    /**
     * Create the model item
     *
     * @param  array $payload
     * @return Model
     */
    public function create($payload)
    {
        $return = $this->model->create($payload);
        self::uploadImage($return->id);
        return $return;
    }

    /**
     * Find Model by ID
     *
     * @param  integer $id
     * @return Model
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Model update
     *
     * @param  integer $id
     * @param  array $payload
     * @return Model
     */
    public function update($id, $payload)
    {
        $return = $this->find($id)->update($payload);
        self::uploadImage($id);
        return $return;
    }

    /**
     * Destroy the model
     *
     * @param  integer $id
     * @return bool
     */
    public function destroy($id)
    {
        return $this->model->destroy($id);
    }

    /**
     * Возвращает список клубов в избранном
     *
     * @return array
     */

    public function favoritesList()
    {
        $result = [];

        if($user = request()->user())
        {
            $result = $user->favorites($this->model)->paginate($this->pagination);
        }

        return $result;
    }

    /**
     * Убирает из списка избранного
     *
     * @param $id
     * @return mixed
     */

    public function favoritesDestroy($id)
    {
        if($user = request()->user())
        {
            return $user->unfavorite($this->find($id));
        }
    }

}
