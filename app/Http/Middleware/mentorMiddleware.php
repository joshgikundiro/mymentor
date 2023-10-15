<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class mentorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role === 'mentor') {
            return $next($request);
        }

        return redirect('/'); // Redirect to the home page or another route if not a mentor.
    }
}
