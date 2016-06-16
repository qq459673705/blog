<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        $user = session('user');
        $passwd = session('passwd');
        if($user == 'mingming' && $passwd == '123456'){
          return $next($request);
        }

        return redirect('/user/login'); //注意要加 return 否则收不到返回对象会出问题
    }
}
