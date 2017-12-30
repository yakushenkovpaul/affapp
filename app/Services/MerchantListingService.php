<?php

namespace App\Services;

use App\Models\Category;
use App\Models\CategoryMerchant;
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
            $result = self::prepareResult(collect($return)->toArray());
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
            $result['data'] = self::prepareResultArray(collect($return)->toArray());
        }

        return $result;
    }


    /**
     * Возвращает общее число магазинов
     *
     * @return int
     */

    public function getMerchantsTotal()
    {
        return $this->merchant->getMerchantsTotal();
    }

    /**
     * Возвращает магазины с отступом
     *
     * @param $limit
     * @param $offset
     * @return array
     */

    public function getMerchantsOffset($limit, $offset, $order = 'created_at', $sort = 'desc')
    {
        $result = [];

        if($return = $this->merchant->getMerchantsOffset($limit, $offset, $order, $sort))
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
                $result['data'] = $this->prepareResultArray($result['data']);
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

        if(!empty($category_id))
        {
            if($return = $this->merchant->searchByCategoryPaginate($this->pagination, $category_id, $query))
            {
                $result = collect($return)->toArray();
            }
        }

        return $result;
    }


    /**
     * Приводит массиво результатов к одному формату
     *
     * @param $array
     * @return mixed
     */

    protected function prepareResultArray($array)
    {
        foreach ($array as $k => $v)
        {
            $array[$k] = self::prepareResult($v);
        }

        return $array;
    }


    /**
     * Подводит результат к одному формату
     *
     * @param $array
     * @return mixed
     */

    protected function prepareResult($array)
    {
        if(!empty($array['logo']))
        {
            $array['image'] = asset('storage/images/merchants/' . self::getPath($array['id']) . '/logo.png');
        }
        else
        {
            $array['image'] = asset('img/custom/merchant.png');
        }

        $array['cashback'] = 0;

        if(isset($array['sale_percent_min']) && $array['sale_percent_min'] > 0)
        {
            $array['cashback'] = $array['sale_percent_min']*0.85;
        }

        if(!$array['cashback'] && isset($array['sale_percent_min']) && $array['sale_percent_min'] > 0)
        {
            $array['cashback'] = $array['sale_percent_min']*0.85;
        }

        if(!$array['cashback'])
        {
            $array['cashback'] = 10.55;
        }

        return $array;
    }


    /**
     * Возвращает путь относительно id
     *
     * @param $id
     * @return string
     */

    protected static function getPath($id)
    {
        return ceil($id/100) . DIRECTORY_SEPARATOR . $id;
    }









    /* Статические методы */










    /**
     * Возвращает топовые магазины
     *
     * @param $limit
     * @return mixed
     */

    public static function getMerchantsTopStatic($limit)
    {
        $result = [];

        if($return = Merchant::getMerchantsOffsetStatic($limit, 0, 'main', 'desc'))
        {
            $result['data'] = collect($return)->toArray();
        }

        return $result;
    }


}