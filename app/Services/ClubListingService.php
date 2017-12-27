<?php

namespace App\Services;

use App\Models\Club;
use App\Models\Merchant;

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
            $result['data'] = $this->prepareResult(collect($return)->toArray());
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
                $result['data'] = $this->prepareResult($result['data']);
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
                $v['image'] = asset('storage/images/clubs/' . self::getPath($v['id']) . '/logo.png');
            }
            else
            {
                $v['image'] = asset('img/custom/club.png');
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