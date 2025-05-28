<?php
namespace App\Http\Controllers\APi\User;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Helper\Helpers;
use App\Helper\ImageManager;

class UserController extends Controller
{
    protected $arr_values = array(
        'table_name'=>'users',
    ); 

    protected $user_id = null;

    public function __construct()
    {
        $authToken = request()->header('Authorization');
        $user = Helpers::decode_token($authToken);
        if ($user) {
            $this->user_id = $user->user_id;
        }
    }

    public function detail(Request $request)
    {
        $user_id = $this->user_id;

        $user = DB::table($this->arr_values['table_name'])->where("id",$user_id)->first();
        $total_post = DB::table("post")->where(["user_id"=>$user_id,"status"=>1,])->select('id')->count();
        $total_friend = DB::table("friends")->where(["user_id"=>$user_id,"status"=>1,])->select('id')->count();

        $friends = DB::table("friends")->limit(10)->where("user_id",$user_id)->get();
        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = $user;
        $result['friends'] = $friends;
        $result['total_post'] = $total_post;
        $result['total_friend'] = $total_friend;
        return response()->json($result, $responseCode);
    }
  
    
    public function delete(Request $request)
    {
        $id = $request->id;

        $data = DB::table($this->arr_values['table_name'])->where('user_id',$this->user_id)->where('id',$id)->first();
        if(!empty($data))
        {
            DB::table($this->arr_values['table_name'])->where('user_id',$this->user_id)->where('id',$id)->delete();
            
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Delete Successfuly';
            $result['action'] = 'delete';
            $result['data'] = [];
        }
        else
        {
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong Id!';
            $result['action'] = 'delete';
            $result['data'] = [];
        }        
        return response()->json($result, $responseCode);
    }
       
}