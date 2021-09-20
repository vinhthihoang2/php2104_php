<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $currentUser = auth()->user();

        if ($currentUser->name == 'canhkhang836' || $currentUser->email == 'canhkhang836@gmail.com') {
            return $next($request);
        } else {
            return route('shopper.home');
        }

    }
}
