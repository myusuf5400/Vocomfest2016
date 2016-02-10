<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::user()['level']<1 || Auth::user()['code']<1){
            Auth::logout();
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }
        
        return $next($request);
    }
}
