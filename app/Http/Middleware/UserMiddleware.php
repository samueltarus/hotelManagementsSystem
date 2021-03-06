<?php

namespace App\Http\Middleware;


use App\Providers\RouteServiceProvider;
use Closure;

use Illuminate\Support\Facades\Auth;

class USerMiddleware
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
        if (Auth::check() && Auth::user()->role_id == '2') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role_id == '1') {
            return redirect('/admin');
        }
        else {
           return redirect('/home');
        }
    }
}
