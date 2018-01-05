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
        $params = [];

        if($return = $this->club->getClub($id))
        {
            if($user = Auth::user())
            {
                $params['favorites'] = collect(
                    $user->favorites($this->club)->where('id', '=', $id)->select('id')->get()
                )->map(function ($item, $key) {
                    return $item['id'];
                })->all();
            }

            $result = $this->prepareResult(collect($return)->toArray(), $params);
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
     * Возвращает поиск по координатам
     *
     * @param $lat
     * @param $lng
     * @return array
     */


    public function getSearchGps($lat, $lng)
    {
        $result = [];

        if($return = $this->club->searchByGps($lat, $lng))
        {
            if($temp = collect($return)->toArray())
            {
                foreach ($temp as $t)
                {
                    $t = $this->prepareResult($t);

                    $result[] = [
                        "id" => $t['id'],
                        "is_logged_in" => 1,
                        "title" => $t['name'],
                        "address" => $t['address'],
                        "dir" => $t['dir'],
                        "image" => $t['image'],
                        "verified" => true,
                        "latitude" => $t['lat'],
                        "longitude" => $t['lng'],
                    ];
                }
            }
        }

        return $result;
    }


    /**
     * Возвращает клуб авторизированного пользователя
     *
     * @return array
     */

    public function getUserClub()
    {
        if($user = Auth::user())
        {
            return $this->prepareResult(collect($user->meta->club)->toArray());
        }
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