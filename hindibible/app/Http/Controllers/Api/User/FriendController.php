<?php
namespace App\Http\Controllers\APi\User;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Helper\Helpers;
use App\Helper\ImageManager;

class FriendController extends Controller
{
    protected $arr_values = array(
        'table_name'=>'friends',
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

    public function my_friends(Request $request)
    {
        $limit = 12;
        $status = 1;
        $page = $request->input('page', 0);
        $offset = 0;
        $page = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        
        $data_list = DB::table($this->arr_values['table_name'])->where([$this->arr_values['table_name'].'.user_id' => $user_id,])
        
        ->leftJoin("users","users.id","=",$this->arr_values['table_name'].".friend_id")
        ->select($this->arr_values['table_name'].".*","users.name as friend_name","users.id as friend_id","users.image as friend_image")

        ->offset($offset)
        ->limit($limit)
        ->orderBy($this->arr_values['table_name'].'.id',$order_by);


        


        $data_list = $data_list->get();
        // $data_list->getCollection()->transform(function ($item) {
        //     $item->total_amount = Helpers::price_formate($item->total_amount);
        //     return $item;
        // });




        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
    public function find_friends(Request $request)
    {
        $limit = 12;
        $status = 1;
        $page = $request->input('page', 0);
        $offset = 0;
        $page = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        
        $table_name = "users";
        $data_list = DB::table($table_name)->where([$table_name.'.status' => 1,])

        ->offset($offset)
        ->limit($limit)
        ->orderBy($table_name.'.id',$order_by);


        


        $data_list = $data_list->get();
        // $data_list->getCollection()->transform(function ($item) {
        //     $item->total_amount = Helpers::price_formate($item->total_amount);
        //     return $item;
        // });




        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
    
    
    public function send_request(Request $request)
    {
        $entryStatus = false;

        $user_id = $this->user_id;
        $friend_id = $request->friend_id;
        
        $data['user_id'] = $user_id;
        $data['friend_id'] = $friend_id;
        
        
        $data['status'] = 0;
        $data['add_by'] = $user_id;
        $data['add_date_time'] = date("Y-m-d H:i:s");
        $data['update_date_time'] = date("Y-m-d H:i:s");


        $check = DB::table("friend_request")->orderBy('id','desc')->where(["user_id"=>$user_id,"friend_id"=>$friend_id,])->first();
        if(!empty($check))
        {
            if($check->status==0)
            {
                $action = 'add';
                $responseCode = 400;
                $result['status'] = $responseCode;
                $result['message'] = 'Allready Send!';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
            else if($check->status==1)
            {
                $action = 'add';
                $responseCode = 400;
                $result['status'] = $responseCode;
                $result['message'] = 'Allready Friend!';
                $result['action'] = $action;
                $result['data'] = [];
                return response()->json($result, $responseCode);
            }
        }



        $insertId = DB::table("friend_request")->insertGetId($data);
        if($insertId)
        {
            $entryStatus = true;
        }

        if($entryStatus)
        {
            $action = 'add';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        else
        {
            $action = 'add';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Error!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        
    }   
    public function response_request(Request $request)
    {
        $entryStatus = false;

        $user_id = $this->user_id;
        $id = $request->id;
        $status = $request->status;
        
        
        $data['status'] = $status;
        $data['update_date_time'] = date("Y-m-d H:i:s");
        if($status==1) $where = ["id"=>$id,"friend_id"=>$user_id,];
        if($status==2) $where = ["id"=>$id,"friend_id"=>$user_id,];
        if($status==3) $where = ["id"=>$id,"user_id"=>$user_id,];

        DB::table("friend_request")->where($where)->update($data);
        
        $action = 'return';
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = $action;
        $result['data'] = [];
        return response()->json($result, $responseCode);        
    }

    public function my_requests(Request $request)
    {
        $limit = 12;
        $status = 1;
        $page = $request->input('page', 0);
        $offset = 0;
        $page = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        
        $table_name = 'friend_request';
        $data_list = DB::table($table_name)->where([$table_name.'.friend_id' => $user_id,$table_name.'.status' => 0,])
        
        ->leftJoin("users","users.id","=",$table_name.".user_id")
        ->select($table_name.".*","users.name as friend_name","users.id as friend_id","users.image as friend_image")

        ->offset($offset)
        ->limit($limit)
        ->orderBy($table_name.'.id',$order_by);


        


        $data_list = $data_list->get();
        // $data_list->getCollection()->transform(function ($item) {
        //     $item->total_amount = Helpers::price_formate($item->total_amount);
        //     return $item;
        // });




        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
    public function my_send_requests(Request $request)
    {
        $limit = 12;
        $status = 1;
        $page = $request->input('page', 0);
        $offset = 0;
        $page = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        
        $table_name = 'friend_request';
        $data_list = DB::table($table_name)->where([$table_name.'.user_id' => $user_id,$table_name.'.status' => 0,])
        
        ->leftJoin("users","users.id","=",$table_name.".friend_id")
        ->select($table_name.".*","users.name as friend_name","users.id as friend_id","users.image as friend_image")

        ->offset($offset)
        ->limit($limit)
        ->orderBy($table_name.'.id',$order_by);


        


        $data_list = $data_list->get();
        // $data_list->getCollection()->transform(function ($item) {
        //     $item->total_amount = Helpers::price_formate($item->total_amount);
        //     return $item;
        // });




        
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'list';
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
    
   
 
}