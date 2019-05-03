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
        if (Auth::guard($guard)->check()) {
            if(isset($_GET['redirect_action'])) {
                return redirect(url($_GET['redirect_action']));
            } else {
                return redirect(url('/members/dashboard'));
            }
            
        }

        return $next($request);
    }
}
