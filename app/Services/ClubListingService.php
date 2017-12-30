<?php

namespace App\Services;

use App\Models\Club;
use App\Models\Merchant;
use Illuminate\Support\Facades\Auth;

class ClubListingService
{
    protected $club;

    protected $pagination;


    public function __construct(
        Club $club
    ) {
        $this->club = $club;
        $this->pagination   = env('PAGINATION', 16);
    }


    /**
     * Возвращает клуб
     *
     * @param $id
     * @return array|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null|static|static[]
     */

    public function getClub($id)
    {
        $result = [];

        if($return = $this->club->getClub($id))
        {
            $result = collect($return)->toArray();
        }

        return $result;
    }


    /**
     * Возвращает клубы
     * @return array
     */


    public function getClubs()
    {
        $result = [];

        if($return = $this->club->getClubs($this->pagination, 'logo'))
        {
            $result['data'] = $this->prepareResultArray(collect($return)->toArray());
        }

        return $result;
    }

    /**
     * Возвращает общее число клубов
     *
     * @return int
     */

    public function getClubsTotal()
    {
        return $this->club->getClubsTotal();
    }


    /**
     * Возвращает клубы с пагинацией
     * @return array
     */

    public function getClubsPaginate()
    {
        $result = [];

        if($return = $this->club->getClubsPaginate($this->pagination, 'logo'))
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

    public function getSearch($query)
    {
        $result = [];

        if($return = $this->club->searchByNamePaginate($this->pagination, $query))
        {
            $result = collect($return)->toArray();
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
                $user->favorites($this->club)->whereIn('id',
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
     * @return mixed
     */

    protected function prepareResult($array, $params = [])
    {
        if(!empty($array['logo']))
        {
            $array['image'] = asset('storage/images/clubs/' . self::getPath($array['id']) . '/logo.png');
        }
        else
        {
            $array['image'] = asset('img/custom/club.png');
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

    public static function getPath($id)
    {
        return ceil($id/100) . DIRECTORY_SEPARATOR . $id;
    }

}