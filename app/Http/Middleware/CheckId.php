<?php

namespace App\Http\Middleware;

use Closure;

class CheckId
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
        if (isset($request->cloth) && false == is_numeric($request->cloth)) {
            return response('Это не число - ' . $request->cloth);
        }
        if (isset($request->category) && false == is_numeric($request->category)) {
            return response('Это не число - ' . $request->category);
        }
        if (isset($request->cart) && false == is_numeric($request->cart)) {
            return response('Это не число - ' . $request->cart);
        }
        if (isset($request->about) && false == is_numeric($request->about)) {
            return response('Это не число - ' . $request->about);
        }
        return $next($request);
    }
}
