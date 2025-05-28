<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function login_view()
    {
        // echo Hash::make('123456');
        if (Session('admin')) {
            return redirect(route('dashboard'));
        }
        return view('admin.login');
    }

    public function token_session($request, $user)
    {
        $device_id = "";
        $password = $user->password;
        $firebase_token = $request->firebase_token;
        $date_time = date("Y-m-d H:i:s");
        $token_data = array("user_id"=>$user->id,"password"=>$user->password,"date_time"=>$date_time,"role"=>$user->role,"device_id"=>$device_id,);
        $access_token = "";
        $login_detail = array(
            "user_id"=>$user->id,
            "role"=>$user->role,
            "ip_address"=>$_SERVER['REMOTE_ADDR'],
            "date"=>date("Y-m-d"),
            "time"=>date("H:i:s"),
            "status"=>1,
            "device_id"=>$device_id,
            "password"=>$password,
            "firebase_token"=>$firebase_token,
            "access_token"=>$access_token,
        );
        if(DB::table('login_history')->insert($login_detail))
        {
            $data = array("id"=>$user->id,"role"=>$user->role,"password"=>$user->password,);
            Session::put('admin', $data);
        }
        return $access_token;
    }


    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        
        
        $user = DB::table('users')->where(['email'=>$username,'role'=>1,])->first();
        if(empty($user))
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong Email';
            $result['action'] = 'login';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        else if(md5($password)!=$user->password)
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong Password';
            $result['action'] = 'login';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        else
        {
            $responseCode = 200;
            $result['message'] = 'Login Successfully';
            $result['action'] = 'redirect';
            $result['url'] = url(route('dashboard'));
            $result['data'] = [];
            // if (auth('users')->attempt(['email' => $request->username, 'password' => $request->password],true)) {
                $responseCode = 200;                
                $this->token_session($request,$user);
            // }
            // else
            // {
            //     $responseCode = 401;
            //     $result['message'] = 'Login Not Successfully';
            // }
            // $responseCode = 400;
            // $result['message'] = 'Login Successfully';
            $result['status'] = $responseCode;
            return response()->json($result, $responseCode);
        }
    }
    public function logout(Request $request)
    {
        auth()->guard('users')->logout();
        $request->session('admin')->invalidate();
        $responseCode = 200;
        $result['message'] = 'Logout Successfully';
        $result['action'] = 'redirect';
        $result['url'] = route('admin');
        $result['status'] = $responseCode;
        $result['data'] = [];
        return response()->json($result, $responseCode);
    }
}