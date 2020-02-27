<?php

namespace App\Http\Middleware;

use Closure;

class welcomeMiddleware
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
        echo "<h1> Welcome Form MiddleWare </h1>";
        return $next($request);
    }
    public function terminate($request, $response)
    {
        echo "<h1> Byeeee </h1>";
    }
}
