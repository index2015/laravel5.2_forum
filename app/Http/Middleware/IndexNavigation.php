<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class IndexNavigation
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

        $navList=DB::table('navigation')->where(array('state'=>1))->get();

        view()->share('navLis',$navList);
        return $next($request);
    }
}
