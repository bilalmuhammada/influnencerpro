<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$allowedRoles)
    {
        //Check user login session
        if (!$request->session()->has('User')) {
            return redirect('login');
        }

        return $next($request);
    }
}
