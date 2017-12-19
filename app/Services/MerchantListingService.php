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
            $result['data'] = collect($return)->toArray();
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
            $result = collect($return)->toArray();
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

}