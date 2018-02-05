<?php
/**
Индесные запросы, потом оформить либо в индексную страницу, либо использовать сфинкс ( эластик )
 */

namespace App\Services;

use App\Models\Sale;
use App\Models\UserMeta;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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
     * Возвращает общее кол-во денег клуба за всем время
     *
     * @param $club_id
     * @return mixed
     */

    public function getClubCommissionTotal($club_id)
    {
        return Sale::where('club_id', '=', $club_id)->sum('commission');
    }

    /**
     * Возвращает массив значений для графика в дашборде пользователя
     *
     * @param $club_id
     * @param string $start_date
     * @param string $end_date
     * @return array
     */

    public function getGraphsParams($club_id, $start_date = '', $end_date = '')
    {
        $array = [];

        $sales = $this->getClubSales($club_id);
        $comission = $this->getClubCommission($club_id);

        $from = Carbon::createFromFormat('Y-m-d', Carbon::parse($start_date)->format('Y-m-d'));
        $to = Carbon::createFromFormat('Y-m-d', Carbon::parse($end_date)->format('Y-m-d'));

        $dates = $this->generateDateRange($from, $to);

        #var_dump($dates);

        foreach ($dates as $d)
        {
            $array['sales'][$d] = [
                'total' => (!empty($sales[$d]))  ?   $sales[$d]  :   0,
                'year' => Carbon::parse($d)->format('Y'),
                'month' => Carbon::parse($d)->format('m'),
                'day' => Carbon::parse($d)->format('d'),
            ];

            $array['commission'][$d] = [
                'total' => (!empty($comission[$d]))  ?   $comission[$d]  :   0,
                'year' => Carbon::parse($d)->format('Y'),
                'month' => Carbon::parse($d)->format('m'),
                'day' => Carbon::parse($d)->format('d'),
            ];
        }

        return $array;
    }


    /**
     * Возвращает кол-во продаж клуба с группировкой по датам
     *
     * @param $club_id
     * @return mixed
     */

    protected function getClubSales($club_id)
    {
        $array = [];

        $result = DB::table('sales')
            ->select(DB::raw('count(*) as total, date(created_at) as date'))
            ->orderBy('date', 'ASC')
            ->where('club_id', '=', $club_id)
            ->groupBy('date')
            //->toSql();
            ->get();

        if(!empty($result))
        {
            foreach ($result as $r)
            {
                $array[$r->date] = $r->total;
            }
        }

        return $array;
    }

    /**
     * Возвращает комиссиию клуба с группировкой по датам
     */

    protected function getClubCommission($club_id)
    {
        $array = [];

        $result = DB::table('sales')
            ->select(DB::raw('sum(commission) as total, date(created_at) as date'))
            ->orderBy('date', 'ASC')
            ->where('club_id', '=', $club_id)
            ->groupBy('date')
            //->toSql();
            ->get();

        if(!empty($result))
        {
            foreach ($result as $r)
            {
                $array[$r->date] = $r->total;
            }
        }

        return $array;
    }

    protected function generateDateRange(Carbon $start_date, Carbon $end_date)
    {
        $dates = [];

        for($date = $start_date; $date->lte($end_date); $date->addDay()) {
            $dates[] = $date->format('Y-m-d');
        }

        return $dates;
    }

}