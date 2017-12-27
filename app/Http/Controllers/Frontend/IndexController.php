<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\ClubListingService;
use App\Services\MerchantListingService;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    /**
     * IndexController constructor.
     * @param MerchantListingService $merchantListingService
     * @param ClubListingService $clubListingService
     */

    public function __construct(MerchantListingService $merchantListingService, ClubListingService $clubListingService)
    {
        $this->serviceMerchant = $merchantListingService;
        $this->serviceClub = $clubListingService;
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
            return view('frontend_auth.index')
                ->with('user', $user)
                ->with('clubs', $this->serviceClub->getClubs())
                ->with('clubs_total', $this->serviceClub->getClubsTotal())
                ->with('merchants', $this->serviceMerchant->getMerchants())
                ->with('merchants_total', $this->serviceMerchant->getMerchantsTotal());
        }
        else
        {
            return view('frontend.index')
                ->with('clubs', $this->serviceClub->getClubs())
                ->with('clubs_total', $this->serviceClub->getClubsTotal())
                ->with('merchants', $this->serviceMerchant->getMerchants())
                ->with('merchants_total', $this->serviceMerchant->getMerchantsTotal());
        }
    }

}
