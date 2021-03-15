<?php

namespace App\Http\Middleware;

use App\Admin;
use Closure;

class AdminAuthGuard
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
        if(Admin::isLoggedIn()) {
            return $next($request);
        } else {
            return redirect('/breadchef-admin/login');
        }
    }
}
