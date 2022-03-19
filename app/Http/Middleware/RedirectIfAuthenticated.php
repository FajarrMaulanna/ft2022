<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if ($guard == "admin" && Auth::guard($guard)->check()) {
                return redirect()->route('dashboard');
            }
            if ($guard == "network" && Auth::guard($guard)->check()) {
                return redirect()->route('dashboardnnc');
            }
            if ($guard == "sekolah" && Auth::guard($guard)->check()) {
                return redirect()->route('dashboardschool');
            }
            if ($guard == "valorant" && Auth::guard($guard)->check()) {
                return redirect()->route('dashboardvalorant');
            }
            if ($guard == "ideathon" && Auth::guard($guard)->check()) {
                return redirect()->route('dashboardideathon');
            }
            if ($guard == "webinar" && Auth::guard($guard)->check()) {
                return redirect()->route('dashboarduiux');
            }
            if ($guard == "workshop" && Auth::guard($guard)->check()) {
                return redirect()->route('dashboardit');
            }
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
