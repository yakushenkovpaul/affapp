<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class MerchantGo
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $club_id = $request->session()->get('_club_id');

        if ($this->auth->user()) {
            $request->session()->put('_club_id', $this->auth->user()->meta->club_id);
        }

        if(!$club_id = $request->session()->get('_club_id', ''))
        {
            echo 'need club id' . PHP_EOL;
            exit;
        }

        return $next($request);
    }
}
