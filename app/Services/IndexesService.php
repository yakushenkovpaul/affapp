<?php
/**
Индесные запросы, потом оформить либо в индексную страницу, либо использовать сфинкс ( эластик )
 */

namespace App\Services;

use App\Models\Sale;
use App\Models\UserMeta;

class IndexesService
{
    protected $pagination;

    public function __construct(

    )
    {
        $this->pagination   = env('PAGINATION', 16);
    }


    /**
     * Возвращает общее кол-во фанов у клуба
     *
     * @param $club_id
     * @return mixed
     */

    public function getClubFansTotal($club_id)
    {
        return UserMeta::where('club_id', '=', $club_id)->count();
    }

    /**
     * Возвращает общее кол-во заказов у клуба
     *
     * @param $club_id
     * @return mixed
     */

    public function getClubSalesTotal($club_id)
    {
        return Sale::where('club_id', '=', $club_id)->count();
    }


    /**
     * Возвращает общее кол-во денег у клуба
     *
     * @param $club_id
     * @return mixed
     */

    public function getClubsCommissionTotal($club_id)
    {
        return Sale::where('club_id', '=', $club_id)->sum('commission');
    }

}