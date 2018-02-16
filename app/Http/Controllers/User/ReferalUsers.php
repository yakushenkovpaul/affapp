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

class ReferalUsers
{
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
        $program = ReferralProgram::whereName('Sign-up')->First();

        return view('user.referalUsers')
            ->with('program', $program)
            ->with('referrals', $this->service->referrals($program));
    }

}