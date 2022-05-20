<?php

namespace App\Http\Middleware;

use Closure;

class checkMiddleware{

    public function handle(Request $request, Closure $next)
    {
        //判断是否登录
        if(!auth()->check()){
            return redirect('/home/login')->withErrors(['error'=>'请先登录']);
        }

        return $next($request);
    }

}