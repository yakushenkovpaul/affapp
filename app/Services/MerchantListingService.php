<?php

namespace App\Services;

use App\Models\Category;
use App\Models\CategoryMerchant;
use App\Models\Merchant;
use Illuminate\Support\Facades\Auth;

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
        $params = [];

        if($return = $this->merchant->getMerchant($id))
        {
            if($user = Auth::user())
            {
                $params['favorites'] = collect(
                    $user->favorites($this->merchant)->where('id', '=', $id)->select('id')->get()
                )->map(function ($item, $key) {
                    return $item['id'];
                })->all();
            }

            $result = self::prepareResult(collect($return)->toArray(), $params);
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
                if($result = collect($return)->toArray())
                {
                    $result['data'] = $this->prepareResultArray($result['data']);
                }
            }
        }

        if(!empty($category_id))
        {
            if($return = $this->merchant->searchByCategoryPaginate($this->pagination, $category_id, $query))
            {
                if($result = collect($return)->toArray())
                {
                    $result['data'] = $this->prepareResultArray($result['data']);
                }
            }
        }

        return $result;
    }


    /**
     * Возвращает массив результатов в едином формате
     *
     * @param $array
     * @return mixed
     */

    protected function prepareResultArray($array)
    {
        $params = [];

        if($user = Auth::user())
        {
            $params['favorites'] = collect(
                $user->favorites($this->merchant)->whereIn('id',
                    collect($array)->map(function ($item, $key) {
                        return $item['id'];
                    }))->select('id')->get()
            )->map(function ($item, $key) {
                return $item['id'];
            })->all();
        }

        foreach ($array as $k => $v)
        {
            $array[$k] = self::prepareResult($v, $params);
        }

        return $array;
    }


    /**
     * Возвращает результат в едином формате
     *
     * @param $array
     * @param $params
     * @return mixed
     */

    protected function prepareResult($array, $params = [])
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

        if(isset($params['favorites']))
        {
            if(in_array($array['id'], $params['favorites']))
            {
                $array['fav'] = true;
            }
            else
            {
                $array['fav'] = false;
            }
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


    /**
     * Возвращает топовые магазины для дашборда в настройках пользователя
     *
     * @param $limit
     * @return mixed
     */

    public static function getMerchantsDashboard($limit)
    {
        $result = [];

        if($return = Merchant::getMerchantsOffsetStatic($limit, 0, 'main', 'desc'))
        {
            $result['data'] = collect($return)->toArray();
        }

        return $result;
    }


}