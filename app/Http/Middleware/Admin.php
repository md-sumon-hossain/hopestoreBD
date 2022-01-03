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
        // dd($request->all());
        if(auth()->user()->role =='admin' ||  (auth()->user()->role =='manager')){ 
            return $next($request);
        }
        
            return redirect()->route('website.home');

    }
}
