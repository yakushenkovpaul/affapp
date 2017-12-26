<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Merchant;

class MerchantListingService
{
    protected $merchant;

    protected $pagination;


    public function __construct(
        Merchant $merchant,
        Category $category
    ) {
        $this->merchant = $merchant;
        $this->category = $category;
        $this->pagination   = env('PAGINATION', 16);
    }

    /**
     * Возвращает магазин
     *
     * @param $id
     * @return array
     */

    public function getMerchant($id)
    {
        $result = [];

        if($return = $this->merchant->getMerchant($id))
        {
            $result = collect($return)->toArray();
        }

        return $result;
    }

    /**
     * Возвращает категории по запросу
     *
     * @param $find
     * @return array
     */


    public function getMerchantsCategoriesByAbc($find)
    {
        $result = [];

        if($return = $this->category->getCategoriesByAbc($find))
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
     * Возвращает магазины
     * @return array
     */


    public function getMerchants()
    {
        $result = [];

        if($return = $this->merchant->getMerchants($this->pagination))
        {
            $result['data'] = self::prepareResult(collect($return)->toArray());
        }

        return $result;
    }

    /**
     * Возвращает магазины с отступом
     *
     * @param $limit
     * @param $offset
     * @return array
     */

    public function getMerchantsOffset($limit, $offset)
    {
        $result = [];

        if($return = $this->merchant->getMerchantsOffset($limit, $offset))
        {
            $result['data'] = collect($return)->toArray();
        }

        return $result;
    }


    /**
     * Возвращает магазины с пагинацией
     *
     * @return array
     */

    public function getMerchantsPaginate()
    {
        $result = [];

        if($return = $this->merchant->getMerchantsPaginate($this->pagination))
        {
            if($result = collect($return)->toArray())
            {
                $result['data'] = $this->prepareResult($result['data']);
            }
        }

        return $result;
    }

    /**
     * Возвращает поиск
     */

    public function getSearch($query, $category_id)
    {
        $result = [];

        if(!empty($query) && empty($category_id))
        {
            if($return = $this->merchant->searchByNamePaginate($this->pagination, $query))
            {
                $result = collect($return)->toArray();
            }
        }

        if(empty($query) && !empty($category_id))
        {

        }

        return $result;
    }


    /**
     * Приводит результат к одному формату
     *
     * @param $result
     * @return mixed
     */

    protected function prepareResult($result)
    {
        foreach ($result as $k => $v)
        {
            if(!empty($v['logo']))
            {
                $v['image'] = asset('storage/images/merchants/' . self::getPath($v['id']) . '/logo.png');
            }
            else
            {
                $v['image'] = asset('img/custom/merchant.png');
            }

            $result[$k] = $v;
        }

        return $result;
    }


    /**
     * Возвращает путь относительно id
     *
     * @param $id
     * @return string
     */

    public static function getPath($id)
    {
        return ceil($id/100) . DIRECTORY_SEPARATOR . $id;
    }

}