<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class logincheck
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
          if(!Session::get('logData')){

            return redirect('/');
          }
        return $next($request);
    }
}
