<?php

namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Services\ClubService;
use App\Services\MerchantListingService;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Services\ClubListingService;
use App\Services\IndexesService;
use App\Services\SaleService;

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
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function dashboard(Request $request)
    {
        $user = $request->user();

        if ($user) {

            $club_id = $user->meta->club_id;
            $club = $this->service_club->getClub($club_id);

            $clubCommissionTotal = $this->service_indexes->getClubsCommissionTotal($club_id);
            $clubSalesTotal = $this->service_indexes->getClubSalesTotal($club_id);
            $clubFansTotal = $this->service_indexes->getClubFansTotal($club_id);


            $userSales = $user->sales()->orderBy('updated_at','DESC')->paginate(10);
            $sales = $this->service_sales->club($club_id);
            $salesMerchants = $this->service_sales->clubMerchants($club_id);

            return view('user.dashboard')
                ->with('user', $user)
                ->with('userSales', $userSales)
                ->with('club', $club)
                ->with('sales', $sales)
                ->with('salesMerchants', $salesMerchants)
                ->with('clubCommissionTotal', $clubCommissionTotal)
                ->with('clubSalesTotal', $clubSalesTotal)
                ->with('clubFansTotal', $clubFansTotal);
        }

        return back()->withErrors(['Could not find user']);
    }
}
