<?php

namespace App\Http\Middleware;

use Closure;

class AdminJurisdiction
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


        if (session()->get('login_admin_59ba36addc2b2f9401580f014c7f58ea4e30989d')==null)
        {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->guest('admin/login')->withErrors(['timeout'=>'非法请求，请重新登录！']);
            }
        }
        return $next($request);
    }
}
