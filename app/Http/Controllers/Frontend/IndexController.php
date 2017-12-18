<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\ClubListingService;
use App\Services\MerchantListingService;


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
        return view('frontend.index')
            ->with('clubs', $this->serviceClub->getClubs())
            ->with('merchants', $this->serviceMerchant->getMerchants());
    }

}
