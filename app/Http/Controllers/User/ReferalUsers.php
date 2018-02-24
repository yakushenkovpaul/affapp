<?php
/**
 * Created by PhpStorm.
 * User: pavelandreev
 * Date: 30.12.17
 * Time: 22:30
 */

namespace App\Http\Controllers\User;

use App\Services\UserService;
use App\Models\ReferralProgram;
use Clarkeash\Doorman\Facades\Doorman;
use App\Models\ReferralLink;
use App\Http\Requests\UserInviteRequest;

class ReferalUsers
{
    protected $referralProgram = 'Sign-up';

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    /**
     * Отображение страницы
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $program = ReferralProgram::whereName($this->referralProgram)->First();
        $link =  $this->service->getInviteLink(auth()->id(), $this->referralProgram);

        return view('user.referalUsers')
            ->with('program', $program)
            ->with('link', $link)
            ->with('referrals', $this->service->referrals($program));
    }

    /**
     * Send invite
     *
     * @param UserInviteRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */

    public function invite(UserInviteRequest $request)
    {
        if($this->service->invite(auth()->id(), $request->except(['_token']), $this->referralProgram))
        {
            return response()->json(['result' => true]);
        }

        return response()->json(['result' => false]);
    }

}