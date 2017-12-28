<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Services\MerchantListingService;

class BottomComposer {

    public function compose(View $view)
    {
        $view->with('merchantsTop', MerchantListingService::getMerchantsTopStatic(5));
    }

}