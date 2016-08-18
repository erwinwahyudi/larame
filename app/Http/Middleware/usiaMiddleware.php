<?php

namespace App\Http\Middleware;

use Closure;

class usiaMiddleware
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
        if($request->input('umur') < 18){
            return redirect('restricted');
        }
        return $next($request);
    }
}
