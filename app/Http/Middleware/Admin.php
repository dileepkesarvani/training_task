<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use DB;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role=='Admin')
        {
        return $next($request);
        }
            elseif(Auth::check()&& Auth::user()->role=='Agent')
            {
                return redirect('/agent');
            }
            else{
                
            return redirect('/customer');
            }
    }
}
