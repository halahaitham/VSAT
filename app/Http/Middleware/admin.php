<?php
/**
 * Created by PhpStorm.
 * User: SONY
 * Date: 10/10/2018
 * Time: 12:48 PM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class admin
{
    /**
     * @param $request
     * @param Closure $next
     * @return string
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {

            return $next($request);
        }
        return route('login');

    }

}