<?php

namespace App\Http\Middleware;
use Closure;

class AdminMiddleware
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
        if($role = \Session::get('r',null)==1) {
            return $next($request);
        }
        abort(404,'404 页面未找到');
    }
}
