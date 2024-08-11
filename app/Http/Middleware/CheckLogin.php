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
        // dd($request);
        //Check user login session
        // dd(Auth::guard('web')->check(),Auth::user());
        if (!$request->session()->has('User')) {
            // \log::info('User not logged in, redirecting to login.');
            return redirect('login');
        }
    
        // \Log::info('User authenticated, accessing Chatify routes.');
    
        return $next($request);
    }
}
