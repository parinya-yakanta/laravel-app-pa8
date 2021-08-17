<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectAdmins
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         //ตรวจสอบสิทธิ์
         if(empty(auth()->user()->isAdmin)){
            Auth()->logout();
            return redirect('login');
        }else{
            if(auth()->user()->isAdmin == 'admins'){ 
                return redirect('admins/dashboards'); 
            }
            return $next($request); //success
        }
    }
}
