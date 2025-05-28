<?php
namespace App\Http\Controllers\APi\User;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Helper\Helpers;
use App\Helper\ImageManager;

class PostCommentController extends Controller
{
    protected $arr_values = array(
        'table_name'=>'post_comment',
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

    public function list(Request $request)
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
        
        $data_list = DB::table($this->arr_values['table_name'])->where([$this->arr_values['table_name'].'.status' => $status,])
        
        ->leftJoin("users","users.id","=",$this->arr_values['table_name'].".user_id")
        ->select($this->arr_values['table_name'].".*","users.name as user_name","users.id as user_id","users.image as user_image")

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
    
    public function add(Request $request)
    {
        $entryStatus = false;

        $user_id = $this->user_id;
        
        $data['user_id'] = $user_id;
        $data['post_id'] = $request->post_id;
        $data['comment'] = $request->comment;
        $data['image'] = $request->image;        
        
        $data['status'] = 1;
        $data['add_by'] = $user_id;
        $data['add_date_time'] = date("Y-m-d H:i:s");
        $data['update_date_time'] = date("Y-m-d H:i:s");

        $insertId = DB::table($this->arr_values['table_name'])->insertGetId($data);
        if($insertId)
        {
            $entryStatus = true;
        }

        if($entryStatus)
        {

            // $image = ImageManager::uploadAPiImage('screenshot','jpg',$request->image);            

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