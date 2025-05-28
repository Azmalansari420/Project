<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\User;
use App\Models\Deposit;
 
class DepositController extends Controller
{
     protected $arr_values = array(
        'table_name'=>'deposit_request',
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
            $item->image = url('storage/app/public/upload/'.$item->image);
            $item->amount = Helpers::price_formate($item->amount);
            $item->add_date_time = date("d M, Y h: A", strtotime($item->add_date_time));

            $status = '';
            if($item->status==0) $status = 'Pending';
            else if($item->status==1) $status = 'Accepted'; 
            else if($item->status==2) $status = 'Rejected';
            $item->statusText = $status;           

            return $item;
        });



        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['min_deposit'] = Helpers::price_formate($min_deposit);
        $result['data'] = $data_list;
        return response()->json($result, $responseCode);
    }
   
    

    public function pay(Request $request)
    {

        $data = new Deposit;        

        $user_id = $this->user_id;
        $add_by = $user_id;
        
        $min_deposit = json_decode(DB::table('setting')->where('name','main')->first()->data)->min_deposit;
        
        $amount = $request->amount;
        if($amount<$min_deposit)
        {
            $action = 'return';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Min Deposit '.Helpers::price_formate($min_deposit);
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }


        $data->amount = $request->amount;
        $data->user_id = $add_by;
        $data->payment_mode = $request->payment_mode;
        $data->request_id = time().$add_by;
        
        
        $data->image = ImageManager::upload("upload", 'png', $request->file('image'));

        $data->add_by = $add_by;
        $data->is_delete = 0;
        if($data->save())
        {
            $action = 'return';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
    }


    public function add(Request $request)
    {    
        $user_id = $this->user_id;
        $add_by = $user_id;
        
        $min_deposit = json_decode(DB::table('setting')->where('name','main')->first()->data)->min_deposit;
        $setting = json_decode(DB::table('setting')->where('name','main')->first()->data);
        $upi = @$setting->upi;

        $amount = $request->amount;
        if($amount<$min_deposit)
        {
            $action = 'return';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Min Deposit '.Helpers::price_formate($min_deposit);
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }


        $action = 'return';
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = $action;
        $result['data'] = [
            "qr"=>"https://api.qrserver.com/v1/create-qr-code/?data=".urlencode('upi://pay?pa='.$upi.'&am='.$amount.'&cu=INR')."&size=300x300",
            "amountString"=>Helpers::price_formate($amount),
            "amount"=>$amount,
            "upi"=>$upi,
        ];
        return response()->json($result, $responseCode);
    
    }  
   
    

    
   
    


}