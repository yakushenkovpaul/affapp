<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClubSearchGpsRequest;
use App\Http\Requests\ClubSearchRequest;
use App\Services\ClubListingService;
use App\Services\SaleService;
use Illuminate\Http\Request;
use App\Services\IndexesService;


class ClubController extends Controller
{
    /**
     * ClubController constructor.
     */

    public function __construct(
        ClubListingService $clubListingService,
        IndexesService $indexesService,
        SaleService $saleService
    )
    {
        $this->service_club = $clubListingService;
        $this->service_indexes = $indexesService;
        $this->service_sales = $saleService;
    }

    /**
     * Вывод списка клубов
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\JsonResponse
     */

    public function clubs(Request $request)
    {
        $result = $this->service_club->getClubsPaginate();

        if ($request->ajax()) {

            return response()->json([
                'html' => view('frontend.listing.clubs')
                    ->with('clubs', $result)
                    ->render(),
                'next_page_url' => $result['next_page_url']
            ]);
        }

        return view('frontend.clubs')
            ->with('clubs', $result)
            ->with('next_page_url', $result['next_page_url']);
    }

    /**
     * Вывод клуба
     *
     * @param $club_id
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function club(Request $request, $club_id, $name)
    {
        $club = $this->service_club->getClub($club_id);
        $clubCommissionTotal = $this->service_indexes->getClubCommissionTotal($club_id);
        $clubSalesTotal = $this->service_indexes->getClubSalesTotal($club_id);
        $clubFansTotal = $this->service_indexes->getClubFansTotal($club_id);
        $sales = $this->service_sales->club($club_id);

        if($user = $request->user())
        {
            return view('frontend.club')
                ->with('user', $user)
                ->with('club', $club)
                ->with('sales', $sales)
                ->with('clubCommissionTotal', $clubCommissionTotal)
                ->with('clubSalesTotal', $clubSalesTotal)
                ->with('clubFansTotal', $clubFansTotal);
        }
        else
        {
            return view('frontend.club')
                ->with('club', $club)
                ->with('sales', $sales)
                ->with('clubCommissionTotal', $clubCommissionTotal)
                ->with('clubSalesTotal', $clubSalesTotal)
                ->with('clubFansTotal', $clubFansTotal);
        }
    }


    /**
     * Поиск по jps координатам
     *
     * @param $lat
     * @param $lng
     * @return \Illuminate\Http\JsonResponse
     */


    public function searchGps(ClubSearchGpsRequest $request, $lat, $lng)
    {
        $result = $this->service_club->getSearchGps($lat, $lng);

        return response()->json($result);
    }


    /**
     * Поиск
     *
     * @param ClubSearchRequest $request
     * @return array|void
     */

    public function search(ClubSearchRequest $request)
    {
        $data = $request->all();

        $query = (isset($data['query']))    ?   $data['query']  :   null;

        if(!empty($query))
        {
            $result = $this->service_club->getSearch($query);
        }
        else
        {
            $result = $this->service->getClubsPaginate();
        }

        return response()->json([
                'html' => view('frontend.listing.clubs')
                    ->with('clubs', $result)
                    ->render(),
                'next_page_url' => $result['next_page_url']
            ]
        );
    }

}
