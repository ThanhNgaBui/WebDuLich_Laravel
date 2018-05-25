<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkLogin
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
        //Kiểm tra, nếu chưa đăng nhập thì di chuyển đến trang login
        if(Auth::guest() == 1){
            return redirect(url('login'));
        }
        else{
            return $next($request);
        }    
    }
}
