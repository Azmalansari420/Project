<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Helper\Helpers;
class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session('admin')) {
            return redirect(route('admin'));
        }
        else
        {
            $user = Helpers::get_user();
            if(empty($user))
            {
                auth()->guard('users')->logout();
                $request->session('user')->invalidate();
                return redirect(route('admin'));
            }
            else if($user->password!=Session('admin')['password'])
            {
                auth()->guard('users')->logout();
                $request->session('user')->invalidate();
                return redirect(route('admin'));
            }
        }
        return $next($request);
    }
}