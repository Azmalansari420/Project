<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Helper\Helpers;
class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session('user')) {
            return redirect(route('user.user'));
        }
        else
        {
            $user = Helpers::get_user_user();
            if(empty($user))
            {
                auth()->guard('users')->logout();
                $request->session('user')->invalidate();
                return redirect(route('user.user'));
            }
            else if($user->status==0)
            {
                auth()->guard('users')->logout();
                $request->session('user')->invalidate();
                return redirect(route('user.user'));
            }
            else if($user->password!=Session('user')['password'])
            {
                auth()->guard('users')->logout();
                $request->session('user')->invalidate();
                return redirect(route('user.user'));
            }
            // else if($user->is_paid==0)
            // {
            //     return redirect(route('user.payment-pending'));
            // }
            // else if($user->kyc_step!=1)
            // {
            //     $uri = $request->segment(2);
            //     $uri_arr = Helpers::user_panel_pages();
            //     if(!in_array($uri,$uri_arr))
            //     {
            //         return redirect(route('user.kyc.index'));
            //     }                
            // }
        }
        return $next($request);
    }
}