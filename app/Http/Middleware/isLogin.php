<?php

namespace App\Http\Middleware;

use Closure;

class isLogin{



    public  function handle($request, Closure $next){

        if (session()->get('user')){
            return $next($request);
        }else{
            return redirect('login')->with('errors','要登录才能进哦');

        }
    }
}
