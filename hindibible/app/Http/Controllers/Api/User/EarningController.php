<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\Report;
use App\Models\MemberModel;
 
class EarningController extends Controller
{
     protected $arr_values = array(
        'table_name'=>'report',
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
      $user_id = $this->user_id;

      $type = $request->type;

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
      ->where(["member_id"=>$user_id,]) 
      ->where(['status' => $status,])
      ->offset($offset)
      ->limit($limit)
      ->orderBy($this->arr_values['table_name'].'.id', $order_by);

      if(!empty($type)) $data_list->where('type',$type);
  


      $data_list = $data_list->get();
      $data_list->transform(function ($item) {          
          $item->amount = Helpers::price_formate($item->amount);
          $item->tds = Helpers::price_formate($item->tds);
          $item->gst = Helpers::price_formate($item->gst);
          $item->final_amount = Helpers::price_formate($item->final_amount);
          $item->add_date_time = date("d M, Y", strtotime($item->add_date_time));
          $item->package_payment_date_time = date("d M, Y", strtotime($item->package_payment_date_time));
          return $item;
      });

      $allIncome = @\App\Models\MemberModel::all_time_income($user_id);
      $unpaid = @\App\Models\MemberModel::getTypeAllIncome($user_id)->commision_wallet;

      $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = [
            "paid"=>Helpers::price_formate($unpaid),
            "unPaid"=>Helpers::price_formate($allIncome-$unpaid),
            "list"=>$data_list,
        ];
        return response()->json($result, $responseCode);

    }

    
    public function transfer(Request $request)
    {
        $limit = 12;
        $status = 1;
        $order_by = "desc";
        $is_delete = 0;

        $session = Session::get('user');
        $user_id = $session['id'];
      

        $unpaid = MemberModel::payoutAmount($user_id,0);

        if($unpaid<1)
        {
          $responseCode = 400;
          $result['status'] = $responseCode;
          $result['message'] = 'You have no payout!';
          $result['action'] = 'reload';
          $result['data'] = [];
          return response()->json($result, $responseCode);
        }

        $date_time = date("Y-m-d H:i:s");

        $walletData = [
            "user_id"=>$user_id,
            "amount"=>$unpaid,
            "message"=>'Add amount from payout by self',
            "type"=>1,
            "wallet_type"=>2, // 1=depoit,2=earning wallet,3=deduct both
        ];
        Helpers::wallet_credir_debit($walletData);

        DB::table('report')->where(["member_id"=>$user_id,"payment"=>0,])->update(["payment"=>1,"payout_date_time"=>$date_time,]);


        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'edit';
        $result['data'] = [];
        return response()->json($result, $responseCode);
    }
    

}