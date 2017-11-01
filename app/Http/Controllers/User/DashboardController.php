<?php

namespace App\Http\Controllers\User;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;

class DashboardController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }


    /**
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function dashboard(Request $request)
    {
        $user = $request->user();

        if ($user) {
            return view('user.dashboard');
        }

        return back()->withErrors(['Could not find user']);
    }
}
