<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUser
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
        //check user role to allow route
        $role = session()->get('role');

        if ($role && !in_array($role, $allowedRoles)) {
            if ($role == 'influencer'){
                return redirect('influencer/dashboard');
            }elseif($role == 'vendor'){
                return redirect('vendor/dashboard');
            }
        }
        return $next($request);
    }
}
