<?php

namespace App\Http\Middleware;
<<<<<<< HEAD

use Closure;

=======
use App\Http\Controllers\Auth\LoginController;
use Closure;
>>>>>>> 043e292d78ac2e07cdf5085e1d5087e6b69dc788
class AuthMiddleware
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
<<<<<<< HEAD
        return $next($request);
=======
        if(!empty($email = session("email")))
            return $next($request);
        $request->cookie();
        cookie();
        return redirect()->action('RootController@create');
>>>>>>> 043e292d78ac2e07cdf5085e1d5087e6b69dc788
    }
}
