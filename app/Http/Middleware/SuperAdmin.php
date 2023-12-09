<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\UnauthorizedException;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission = null, $guard = null){
        if(Auth::check()){
            
            // $request->route()->getName();
            // $authGuard = app('auth')->guard($guard);

// print_r($authGuard);
            // die;
            if(Auth::user()->roleId == 1){
                return $next($request);
            }else{
                return response('Unauthorized.', 401);
            }
        }else{
            return response('Unauthorized.', 401);
        }
        
    }
}
