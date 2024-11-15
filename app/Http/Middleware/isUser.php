<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->role !== 'user'){
            if(auth()->user()->is_active == 0){
                auth()->logout();
                return redirect()->route('login')->with('error', 'Your account has been deactivated');
            }
            return redirect()->route('dashboard')->with('error', 'You are not authorized to access this page');
        }
        return $next($request);
    }
}
