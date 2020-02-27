<?php

namespace App\Http\Middleware;

use Closure;

class Testmiddlewere
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
        if($request->age >=16){
        return $next($request);
        }else if($request->ages >=16){
            return $next($request);
        }else if($request->num >=5){
            return $next($request);
        }else
        return redirect("/");
    }

}
