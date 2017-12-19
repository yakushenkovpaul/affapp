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

        if($return = $this->club->getClubs($this->pagination))
        {
            $result['data'] = collect($return)->toArray();
        }

        return $result;
    }


    /**
     * Возвращает клубы с пагинацией
     * @return array
     */

    public function getClubsPaginate()
    {
        $result = [];

        if($return = $this->club->getClubsPaginate($this->pagination))
        {
            $result = collect($return)->toArray();
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

}