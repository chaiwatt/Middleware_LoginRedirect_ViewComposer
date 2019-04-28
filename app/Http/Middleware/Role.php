<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Role
{

    public function handle($request, Closure $next, ...$roles)
    {
        if($request->user() && in_array($request->user()->permission, $roles) )
        {
            return $next($request);
        }
        Session::flush();
        return redirect('login');
        //return new Response(view('unauthorized')->withRole('Super Admin'));
    }
}
