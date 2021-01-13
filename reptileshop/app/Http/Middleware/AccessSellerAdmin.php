<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AccessSellerAdmin
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
        if(Auth::user()->hasAnyRole('seller') OR Auth::user()->hasAnyRole('admin'))
        {
            return $next($request);
        }
        return redirect('/')->with('error');
    }
}
