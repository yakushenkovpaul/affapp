<?php

namespace App\Http\Controllers\User;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserInviteRequest;


class SettingsController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    /**
     * View current user's settings
     *
     * @return \Illuminate\Http\Response
     */
    public function settings(Request $request)
    {
        $user = $request->user();

        if ($user) {
            return view('user.settings', ['user' => $user, 'clubs' => $this->service->getAllClubs()]);
        }

        return back()->withErrors(['Could not find user']);
    }

    /**
     * Update the user
     *
     * @param  UpdateAccountRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request)
    {
        if ($this->service->update(auth()->id(), $request->except(['_token', 'invite']))) {
            return back()->with('message', 'Settings updated successfully');
        }

        return back()->withErrors(['Could not update user']);
    }

    /**
     * Send invite
     *
     * @param UserInviteRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */

    public function invite(UserInviteRequest $request)
    {
        if($this->service->invite(auth()->id(), $request->except(['_token']), 'Sign-up'))
        {
            return response()->json(['result' => true]);
        }

        return response()->json(['result' => false]);
    }
}
