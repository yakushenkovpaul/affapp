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

            $v['cashback'] = 0;

            if(isset($v['sale_percent_min']) && $v['sale_percent_min'] > 0)
            {
                $v['cashback'] = $v['sale_percent_min']*0.85;
            }

            if(!$v['cashback'] && isset($v['sale_percent_min']) && $v['sale_percent_min'] > 0)
            {
                $v['cashback'] = $v['sale_percent_min']*0.85;
            }

            if(!$v['cashback'])
            {
                $v['cashback'] = 10.55;
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