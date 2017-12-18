<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public $table = "clubs";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'image',
		'url',
		'country',
		'address',
		'zip',
		'contacts',
		'bank_details',
		'fans',
		'total_commission',
		'total_paid',
		'fee'
    ];

    protected $hidden = ['rate'];

    public static $rules = [
        // create rules
    ];
    // Club


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
            ->orderBy($order, $sort)
            ->select(['id', 'name', 'image', 'url'])
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
            ->orderBy($order, $sort)
            ->select(['id', 'name', 'image', 'url'])
            ->limit($limit)
            ->get();
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
            ->select(['id', 'name', 'image'])
            ->paginate($paginate);
    }



}
