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
use App\Models\Withdrawal;
use App\Models\MemberModel;
 
class WithdrawalController extends Controller
{
     protected $arr_values = array(
        'table_name'=>'withdrawal_request',
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
        $page = $request->page? $request->page : 0;
        $offset = 0;
        $search = '';      
        $order_by = "desc";
        $user_id = $this->user_id;

        $offset = $page * $limit;

        if(!empty($request->search)) $search = $request->search;
        

        $data_list = DB::table($this->arr_values['table_name'])
        ->where(["user_id"=>$user_id,]) 
        ->whereIn($this->arr_values['table_name'].'.status', [0,1,2,3,4])
        ->offset($offset)
        ->limit($limit)
        ->orderBy($this->arr_values['table_name'].'.id', $order_by);
    


        $data_list = $data_list->get();
        $data_list->transform(function ($item) {
            $item->amount = Helpers::price_formate($item->amount);
            $item->charge = Helpers::price_formate($item->charge);
            $item->withdrawal_amount = Helpers::price_formate($item->withdrawal_amount);
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
        $result['data'] = [
            "commision_wallet"=>Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($user_id)->commision_wallet),
            "list"=>$data_list,
        ];
        return response()->json($result, $responseCode);

    }
    
    

    public function add(Request $request)
    {
        $user_id = $this->user_id;
        $add_by = $user_id;

        $data = new Withdrawal;
            
        $amount = $request->amount;

        $data->upi = $request->upi;
        $data->amount = $request->amount;
        $data->user_id = $add_by;
        $data->request_id = time().$add_by;



        $commision_wallet = MemberModel::getTypeAllIncome($user_id)->commision_wallet;
        if($commision_wallet<$amount)
        {
            $action = 'return';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'You hav low balance!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }

        $withdrawdeduct = json_decode(DB::table('setting')->where('name','main')->first()->data)->withdrawal_amount;
        $withdrawal_amount = $amount-($amount/100*$withdrawdeduct);
        $data->withdrawal_amount = $withdrawal_amount;        
        
        // $data->image = ImageManager::upload($this->arr_values['upload_path'], 'png', $request->file('image'));

        $data->add_by = $add_by;
        $data->is_delete = 0;
        if($data->save())
        {
            $action = 'return';
            // $action = 'edit';
            $responseCode = 200;
            $result['status'] = $responseCode;
            $result['message'] = 'Success';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
    }
    

}