<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $role)
    {   
        if(Auth::check() && Auth::user()->role_id == 2){
            return redirect()->route('posts.create');
        }

        return redirect()->route('/');
    }
}
