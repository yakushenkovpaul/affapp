<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeLiked;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use Illuminate\Support\Facades\Storage;
use Regulus\TetraText\Facade as Format;
use Illuminate\Support\Facades\Schema;

class Club extends Model
{
    use CanBeLiked, CanBeFavorited;

    public $table = "clubs";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
        'dir',
		'image',
        'logo',
        'lat',
        'lng',
		'url',
		'country',
		'address',
		'zip',
		'contacts',
		'bank_details',
		'fans',
		'total_commission',
		'total_paid',
		'fee',
        'confirm',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'description',
        'status',
        'phone',
        'email'
    ];

    protected $hidden = ['rate'];

    public static $rules = [
        'name' => 'required|min:3|max:255',
    ];
    // Club
    public $attributes = [
        'status' => 2,
        'country' => 'Germany',
        'category' => 'sport',
        'fee' => 0.00,
    ];

    /**
     * Переопределяем метод, чтобы можно было задать дефолтные значения для переменных
     *
     * @param $array
     */

    protected function prepare($array)
    {
        foreach ($array as $k => $v)
        {
            if(is_null($v))
            {
                if(isset($this->attributes[$k]))
                {
                    $array[$k] = $this->attributes[$k];
                }
            }
        }

        $array['dir'] = Format::slug($array['name']);

        if(!empty($array['image']))
        {
            $array['image'] = 'logo.png';
            $array['logo'] = 1;
        }

        return $array;
    }


    public function update(array $attributes = [], array $options = [])
    {
        return parent::update($this->prepare($attributes) , $options);
    }



    public function create($array)
    {
        return parent::create($this->prepare($array));
    }

    /**
     * Возвращает пять клубов по запросу
     *
     *
     * @param string $abc
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */

    public function getClubsByAbc($abc)
    {
        return $this->newQuery()
            ->where('name', 'LIKE', '%'.$abc.'%')
            ->where('status', '=', 1)
            ->take(5)
            ->select(['id', 'name'])
            ->get();
    }

    /**
     * Возвращает клубы c пагинацией
     *
     * @param int $paginate
     * @param string $order
     * @param string $sort
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */

    public function getClubsPaginate($paginate, $order = 'created_at', $sort = 'desc')
    {
        return $this->newQuery()
            ->where('status', '=', 1)
            ->orderBy($order, $sort)
            ->select(['id', 'name', 'image', 'url', 'logo', 'dir'])
            ->paginate($paginate);
    }

    /**
     * Возвращает клубы
     *
     * @param $limit
     * @param string $order
     * @param string $sort
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */


    public function getClubs($limit, $order = 'created_at', $sort = 'desc')
    {
        return $this->newQuery()
            ->where('status', '=', 1)
            ->orderBy($order, $sort)
            ->select(['id', 'name', 'image', 'url', 'logo', 'dir'])
            ->limit($limit)
            ->get();
    }


    /**
     * Возвращает клубы с отступом взависимости от переданной страницы
     * Актуально в основом для консольных задач
     *
     * @param $limit
     * @param $page
     * @param string $order
     * @param string $sort
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */

    public function getClubsPerPage($limit, $page, $order = 'id', $sort = 'desc')
    {
        return $this->newQuery()
            ->where('status', '=', 1)
            ->orderBy($order, $sort)
            ->offset($page * $limit)
            ->limit($limit)
            ->get();
    }

    /**
     * Возвращает общее кол-во клубов
     *
     * @return int
     */

    public function getClubsTotal()
    {
        return $this->newQuery()->count();
    }

    /**
     * Ищет клубы с пагинацией
     *
     * @param $paginate
     * @param $abc
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */


    public function searchByNamePaginate($paginate, $abc)
    {
        return $this->newQuery()
            ->where('name', 'LIKE', '%'.$abc.'%')
            ->where('status', '=', 1)
            ->select(['id', 'name', 'image', 'url', 'logo', 'dir'])
            ->orderBy('logo', 'desc')
            ->paginate($paginate);

        //если хотим выводим как в админке, то выводим так:
        /*
        $query = $this->newQuery();

        $columns = Schema::getColumnListing('clubs');

        foreach ($columns as $attribute) {
            $query->orWhere($attribute, 'LIKE', '%'.$abc.'%');
        };

        return $query
            ->where('status', '=', 1)
            ->select(['id', 'name', 'image', 'url', 'logo', 'dir'])
            ->paginate($paginate);
        */
    }

    /**
     * Ищет клубы по координатам
     *
     * @param $lat
     * @param $lng
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection|static[]
     */

    public function searchByGps($lat, $lng)
    {
        return $this->newQuery()
            ->whereBetween('lat', [$lat - 1*0.018, $lat + 1*0.018])
            ->whereBetween('lng', [$lng - 10*0.018, $lng + 10*0.018])
            ->where('logo', '!=', '')
            ->take(100)
            ->get();
    }



    /**
     * Возвращает клуб
     *
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|Model|null|static|static[]
     */

    public function getClub($id)
    {
        return $this->newQuery()->find($id);
    }
}
