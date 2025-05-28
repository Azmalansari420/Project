<?php
namespace App\Http\Controllers\APi\User;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Helper\Helpers;
use App\Helper\ImageManager;

class MessageController extends Controller
{
    protected $arr_values = array(
        'table_name'=>'messages',
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
        

        $data_list = DB::table('messages')
        ->select(
            DB::raw('
                CASE 
                    WHEN sender_id = ' . $user_id . ' THEN receiver_id 
                    ELSE sender_id 
                END as chat_user_id
            '),
            DB::raw('(SELECT name FROM users WHERE users.id = chat_user_id) as user_name'),
            DB::raw('(SELECT image FROM users WHERE users.id = chat_user_id) as user_image'),
            DB::raw('(SELECT message_text FROM messages 
                WHERE (sender_id = chat_user_id AND receiver_id = ' . $user_id . ') 
                OR (sender_id = ' . $user_id . ' AND receiver_id = chat_user_id) 
                ORDER BY id DESC LIMIT 1) as last_message'),
            DB::raw('(SELECT add_date_time FROM messages 
                WHERE (sender_id = chat_user_id AND receiver_id = ' . $user_id . ') 
                OR (sender_id = ' . $user_id . ' AND receiver_id = chat_user_id) 
                ORDER BY id DESC LIMIT 1) as last_message_time')
        )
        ->where(function ($query) use ($user_id) {
            $query->where('sender_id', $user_id)
                ->orWhere('receiver_id', $user_id);
        })
        ->groupBy('chat_user_id')
        ->orderByDesc('last_message_time');
            // ->get();


        


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
    
    public function detail(Request $request)
    {
        $entryStatus = false;
        $user_id = $this->user_id;
        $receiverId = $request->chat_user_id;
        
        $data_list = DB::table('messages')
        ->where(function ($query) use ($user_id, $receiverId) {
            $query->where('sender_id', $user_id)
                  ->where('receiver_id', $receiverId);
        })
        ->orWhere(function ($query) use ($user_id, $receiverId) {
            $query->where('sender_id', $receiverId)
                  ->where('receiver_id', $user_id);
        })
        ->orderBy('id', 'desc')
        ->get();

        
        $action = 'return';
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = $action;
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
        
    }
    public function send(Request $request)
    {
        $entryStatus = false;
        $user_id = $this->user_id;
        $receiver_id = $request->receiver_id;
        $message_text = $request->message_text;
        $message_type = $request->message_type;
        $media_url = $request->media_url;
        
        $data['user_id'] = $user_id;
        $data['sender_id'] = $user_id;
        $data['receiver_id'] = $receiver_id;
        $data['message_text'] = $message_text;
        $data['message_type'] = $message_type;
        $data['media_url'] = $media_url;
        
        
        $data['status'] = 2;
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