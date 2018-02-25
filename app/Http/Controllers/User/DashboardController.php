<?php

namespace App\Http\Controllers\User;

use App\Services\MerchantListingService;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Services\ClubListingService;
use App\Services\IndexesService;
use App\Services\SaleService;
use App\Events\UserInvite;



class DashboardController extends Controller
{
    public $service_club;
    public $service_merchant;
    public $service_indexes;
    public $service_sales;

    public function __construct(
        UserService $userService,
        ClubListingService $clubService,
        MerchantListingService $merchantService,
        IndexesService $indexesService,
        SaleService $saleService
    )
    {
        $this->service = $userService;
        $this->service_club = $clubService;
        $this->service_merchant = $merchantService;
        $this->service_indexes = $indexesService;
        $this->service_sales = $saleService;
    }

    /**
     * Аякс прокрутка продаж
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function ajaxListingSales(Request $request)
    {
        if ($request->ajax()) {

            $user = $request->user();

            if($user)
            {
                if (isset($request->page_user_order)) {
                    $listing_sales = $user->sales()->orderBy('updated_at', 'DESC')->paginate(10, ['*'], 'page_user_order');;
                }

                if (isset($request->page)) {
                    $listing_sales = $this->service_sales->club($user->meta->club_id);;
                }

                return response()->json([
                    'html' => view('user.dashboard.sales')
                        ->with('user', $user)
                        ->with('listing_sales', $listing_sales)
                        ->render(),
                ]);
            }
        }
    }

    /**
     * Аякс вывод графика
     *
     * @param Request $request
     */

    public function ajaxGraph(Request $request)
    {
        if ($request->ajax()) {

            switch ($request->period)
            {
                case 'graph_week':
                    $start_date = date('Y-m-d', strtotime('monday this week'));
                    $end_date = date('Y-m-d', strtotime('sunday this week'));
                    break;
                case 'graph_lastmonth':
                    $start_date = date('Y-m-01', strtotime('-1 month'));
                    $end_date = date('Y-m-t', strtotime('-1 month'));
                    break;
                default:
                    $start_date = date('Y-m-01');
                    $end_date = date('Y-m-t');
                    break;
            }

            $user = $request->user();

            if ($user) {

                $club_id = $user->meta->club_id;
                $clubCommissionTotal = $this->service_indexes->getClubCommissionTotal($club_id);
                $clubSalesTotal = $this->service_indexes->getClubSalesTotal($club_id);
                $graph_params = $this->service_indexes->getGraphsParams($club_id, $start_date, $end_date);

                return response()->json([
                    'html' => view('user.dashboard.graph')
                        ->with('user', $user)
                        ->with('graph_params', $graph_params)
                        ->with('clubCommissionTotal', $clubCommissionTotal)
                        ->with('clubSalesTotal', $clubSalesTotal)
                        ->with('ajax', true)
                        ->render(),
                ]);
            }
        }
    }


    /**
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function dashboard(Request $request)
    {
        $user = $request->user();

        if ($user) {

            $club_id = $user->meta->club_id;

            $club = $this->service_club->getClub($club_id);

            $clubCommissionTotal = $this->service_indexes->getClubCommissionTotal($club_id);
            $clubSalesTotal = $this->service_indexes->getClubSalesTotal($club_id);
            $clubFansTotal = $this->service_indexes->getClubFansTotal($club_id);

            $salesMerchants = $this->service_sales->clubMerchants($club_id);
            $userSales = $user->sales()->orderBy('updated_at','DESC')->paginate(10, ['*'], 'page_user_order');
            $sales = $this->service_sales->club($club_id);

            $graph_params = $this->service_indexes->getGraphsParams($club_id, date('Y-m-01'), date('Y-m-t'));

            return view('user.dashboard')
                ->with('user', $user)
                ->with('userSales', $userSales)
                ->with('club', $club)
                ->with('graph_params', $graph_params)
                ->with('sales', $sales)
                ->with('salesMerchants', $salesMerchants)
                ->with('clubCommissionTotal', $clubCommissionTotal)
                ->with('clubSalesTotal', $clubSalesTotal)
                ->with('clubFansTotal', $clubFansTotal);
        }

        return back()->withErrors(['Could not find user']);
    }


    public function test()
    {
        event(new UserInvite(\request()->user(), 'yakushenkovpaul@gmail.com', 'http://aaa.ru', 'abcdfr'));
    }

}
