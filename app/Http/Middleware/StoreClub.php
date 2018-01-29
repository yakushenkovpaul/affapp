<?php

namespace App\Http\Middleware;

use Closure;

class StoreClub
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->session()->put('_club_id', $request->id);

        return $next($request);
    }
}
