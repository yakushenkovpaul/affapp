<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Merchant extends Model
{
    public $table = "merchants";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
        'program_id',
		'name',
		'image',
		'description',
		'seo_title',
		'seo_description',
		'url',
        'url_affilate',
		'status',
        'timeleads',
        'timesales',
        'sale_percent_max',
        'sale_percent_min',
        'sale_fix_max',
        'sale_fix_min',
        'lead_max',
        'lead_min',
        'info',
		'rate',

];

    public static $rules = [
        // create rules
    ];
    // Merchant

    /**
     * User Categories
     *
     * @return Relationship
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    /**
     * Check if user has category
     *
     * @param  string  $category
     * @return boolean
     */
    public function hasCategory($category)
    {
        $categories = array_column($this->categories()->toArray(), 'name');
        return array_search($category, $categories) > -1;
    }

    /**
     * Возвращает магазины
     *
     * @param $limit
     * @param string $order
     * @param string $sort
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */


    public function getMerchants($limit, $order = 'created_at', $sort = 'desc')
    {
        return $this->newQuery()
            ->orderBy($order, $sort)
            ->select(['id', 'name', 'image'])
            ->limit($limit)
            ->get();
    }

    /**
     * Возвращаем магазины с пагинацией
     *
     * @param $paginate
     * @param string $order
     * @param string $sort
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */

    public function getMerchantsPaginate($paginate, $order = 'created_at', $sort = 'desc')
    {
        return $this->newQuery()
            ->orderBy($order, $sort)
            ->select(['id', 'name', 'image'])
            ->paginate($paginate);
    }


    /**
     * Возвращает магазины с отступом
     *
     * @param $limit
     * @param $offset
     * @param string $order
     * @param string $sort
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */

    public function getMerchantsOffset($limit, $offset, $order = 'created_at', $sort = 'desc')
    {
        return $this->newQuery()
            ->orderBy($order, $sort)
            ->select(['id', 'name', 'image'])
            ->limit($limit)
            ->offset($offset)
            ->get();
    }


    /**
     * Ищет магазины по названию c пагинацией
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


    /**
     * Возвращает магазин
     *
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|Model|null|static|static[]
     */

    public function getMerchant($id)
    {
        return $this->newQuery()->find($id);
    }

}
