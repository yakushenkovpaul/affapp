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

class DashboardController extends Controller
{
    public $service_club;
    public $service_merchant;

    public function __construct(
        UserService $userService,
        ClubListingService $clubService,
        MerchantListingService $merchantService
    )
    {
        $this->service = $userService;
        $this->service_club = $clubService;
        $this->service_merchant = $merchantService;
    }


    /**
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function dashboard(Request $request)
    {
        $user = $request->user();

        if ($user) {

            $club = $this->service_club->getClub($user->meta->club_id);
            $merchants = $this->service_merchant->getMerchantsDashboard(10);

            return view('user.dashboard')
                ->with('user', $user)
                ->with('merchants', $merchants)
                ->with('club', $club);
        }

        return back()->withErrors(['Could not find user']);
    }
}
