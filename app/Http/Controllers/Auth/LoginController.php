<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginLoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide this functionality to your appliations.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'user/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    /**
     * Run after login
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function authenticated()
    {
        if (auth()->user()->hasRole('admin')) {
            return response()->json(['path' => '/admin/dashboard']);
        }

        return response()->json(['path' => 'user/dashboard']);
    }

    /*
    public function authenticated()
    {
        if (auth()->user()->hasRole('admin')) {
            return redirect('/admin/dashboard');
        }

        return redirect('user/dashboard');
    }
    */
}