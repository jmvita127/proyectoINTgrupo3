<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Administrator
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
        if(Auth::user()){
         if(!Auth::user()->isAdmin)
         {
           return redirect('/index');
         }
       } else {
         return redirect('/index');
       }




        return $next($request);
    }
}
