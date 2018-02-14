<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\ClubListingService;
use App\Services\IndexesService;
use App\Services\MerchantListingService;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    /**
     * IndexController constructor.
     * @param MerchantListingService $merchantListingService
     * @param ClubListingService $clubListingService
     */

    public function __construct(
        MerchantListingService $merchantListingService,
        ClubListingService $clubListingService,
        IndexesService $indexesService
    )
    {
        $this->service_merchant = $merchantListingService;
        $this->service_club = $clubListingService;
        $this->service_indexes = $indexesService;
    }

    /**
     * Index page
     *
     * @return $this
     */

    public function index()
    {
        if($user = Auth::user())
        {
            $club_id = $user->meta->club_id;

            $clubCommissionTotal = $this->service_indexes->getClubCommissionTotal($club_id);
            $clubSalesTotal = $this->service_indexes->getClubSalesTotal($club_id);
            $clubFansTotal = $this->service_indexes->getClubFansTotal($club_id);

            return view('frontend.auth.index')
                ->with('clubCommissionTotal', $clubCommissionTotal)
                ->with('clubSalesTotal', $clubSalesTotal)
                ->with('clubFansTotal', $clubFansTotal)
                ->with('club', $this->service_club->getUserClub())
                ->with('clubs', $this->service_club->getClubs())
                ->with('clubs_total', $this->service_club->getClubsTotal())
                ->with('merchants', $this->service_merchant->getMerchants())
                ->with('merchants_total', $this->service_merchant->getMerchantsTotal());
        }
        else
        {
            return view('frontend.index')
                ->with('clubs', $this->service_club->getClubs())
                ->with('clubs_total', $this->service_club->getClubsTotal())
                ->with('merchants', $this->service_merchant->getMerchants())
                ->with('merchants_total', $this->service_merchant->getMerchantsTotal());
        }
    }

}
