<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Custom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\Support;
 
class SupportController extends Controller
{
     protected $arr_values = array(
        'table_name'=>'support',
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
        $limit = 10;
        $status = 1;
        $page = $request->page? $request->page : 0;
        $offset = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        

        $data_list = DB::table($this->arr_values['table_name'])
        ->where(["user_id"=>$user_id,]) 
        ->whereIn($this->arr_values['table_name'].'.status',[0,1,2,3,4])     
        ->offset($offset)
        ->limit($limit)
        ->orderBy($this->arr_values['table_name'].'.id', $order_by);
        

        $min_deposit = json_decode(DB::table('setting')->where('name','main')->first()->data)->min_deposit;
        $setting = json_decode(DB::table('setting')->where('name','main')->first()->data);
        $upi = @$setting->upi;


        $data_list = $data_list->get();
        $data_list->transform(function ($item) {
            // $item->screenshot = url('storage/app/public/upload/'.$item->screenshot);
            // $item->amount = Helpers::price_formate($item->amount);
            $item->add_date_time = date("d M, Y h: A", strtotime($item->add_date_time));

            $status = '';
            if($item->status==0) $status = 'Pending';
            else if($item->status==1) $status = 'Complete'; 
            else if($item->status==2) $status = 'Proccess';
            else if($item->status==3) $status = 'Rejected';
            $item->statusText = $status;

            return $item;
        });



        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'add';
        $result['min_deposit'] = Helpers::price_formate($min_deposit);
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
    
    

    public function add(Request $request)
    {
        $data = new Support;
        
        $user_id = $this->user_id;
        $add_by = $user_id;

        
        
        $data->user_id = $add_by;
        $data->ticket_id = time().$add_by;
        $data->subject = $request->subject;
        $data->message = $request->message;        
        $data->status = 0;

        // if(empty($id))
        // {
        //     $data->screenshot = ImageManager::upload($this->arr_values['upload_path'], 'png', $request->file('screenshot'));
        // }
        // else
        // {
        //     if ($request->screenshot)
        //         $data->screenshot = ImageManager::update($this->arr_values['upload_path'], $data->screenshot, 'png', $request->file('screenshot'));
        // }


        $data->add_by = $add_by;
        $data->is_delete = 0;
        if($data->save())
        {
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = 'return';
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }

    }
    

}