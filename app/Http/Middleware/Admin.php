<?php

namespace App\Http\Middleware;

use Closure;

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

        if(Session('isAdmin')==1){

           return $next($request);

        }else{

            // Session::flush();

            return redirect('/home')->with('error','You have not admin access');
        }
      
    }
}
