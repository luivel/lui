<?php namespace Luivel\Lui\Http\Middleware;

use Closure;

class luiGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session('lui')) {
            return redirect()->route('lui-dashboard');
        }

        return $next($request);
    }

}
