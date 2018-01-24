<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Overtrue\LaravelFollow\Traits\CanBeLiked;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;

class Merchant extends Model
{
    use CanBeLiked, CanBeFavorited;

    public $table = "merchants";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
        'main',
        'program_id',
        'logo',
		'name',
        'dir',
		'image',
		'description',
		'cashback_info',
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
     */

    public function categories()
    {
        return $this->belongsToMany(\App\Models\Category::class);
    }


    /**
     * Check if user has category
     *
     * @param  string  $category
     * @return boolean
     */
    /*
    public function hasCategory($category)
    {
        $categories = array_column($this->categories()->toArray(), 'name');
        return array_search($category, $categories) > -1;
    }
    */

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
            ->select(['id', 'name', 'image', 'dir', 'logo', 'cashback_info', 'sale_percent_min', 'sale_fix_min'])
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
            ->select(['id', 'name', 'image', 'dir', 'logo', 'cashback_info', 'sale_percent_min', 'sale_fix_min'])
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

    public function getMerchantsOffset($limit, $offset, $order, $sort)
    {
        return $this->newQuery()
            ->orderBy($order, $sort)
            ->select(['id', 'name', 'image', 'dir', 'logo', 'cashback_info', 'sale_percent_min', 'sale_fix_min'])
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
            ->select(['id', 'name', 'image', 'dir', 'logo', 'cashback_info', 'sale_percent_min', 'sale_fix_min'])
            ->paginate($paginate);
    }


    /**
     * Ищет магазины по категории
     * Дополнительный параметр - название
     *
     * @param $paginate
     * @param $category_id
     * @param string $abc
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */

    public function searchByCategoryPaginate($paginate, $category_id, $abc = '')
    {
        $query = $this->newQuery();

        if(!empty($abc))
        {
            $query->where('name', 'LIKE', '%'.$abc.'%');
        }

        return $query
            ->select(['id', 'name', 'image', 'dir', 'logo', 'cashback_info', 'sale_percent_min', 'sale_fix_min'])
            ->whereHas('categories', function($query) use ($category_id) {
                $query->where('category_id', $category_id);
            })->paginate($this->pagination);
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


    /**
     * Возвращает общее кол-во магазинов
     *
     * @return int
     */

    public function getMerchantsTotal()
    {
        return $this->newQuery()->count();
    }


    /**
     * Возвращает магазины с отступом взависимости от переданной страницы
     * Актуально в основом для консольных задач
     *
     * @param $limit
     * @param $page
     * @param string $order
     * @param string $sort
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */

    public function getMerchantsPerPage($limit, $page, $order = 'id', $sort = 'desc')
    {
        return $this->newQuery()
            ->orderBy($order, $sort)
            ->offset($page * $limit)
            ->limit($limit)
            ->get();
    }








    /* Статические методы */

    /**
     * Возвращает магазины с отступом
     * Статический вызов
     *
     * @param $limit
     * @param $offset
     * @param $order
     * @param $sort
     * @return mixed
     */


    public static function getMerchantsOffsetStatic($limit, $offset, $order, $sort)
    {
        return (new static)->getMerchantsOffset($limit, $offset, $order, $sort);
    }



}
