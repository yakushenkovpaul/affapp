<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Services\UserService;

class ChangeClub
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;
    protected $service;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(
        Guard $auth,
        UserService $service
    )
    {
        $this->auth = $auth;
        $this->service = $service;
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
        $response = $next($request);

        if ($request->has('changeClub')){
            if ($this->auth->user()->meta->club_id) {
                $this->service->setClubMain($this->auth->user()->id, 0);
            }
        }

        return $response;
    }
}
