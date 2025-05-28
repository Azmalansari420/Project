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
use App\Models\Wallet;
 
class WalletController extends Controller
{
     protected $arr_values = array(
        'table_name'=>'wallet_history',
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
        ->where('user_id',$user_id)->where(['status' => $status])
        ->offset($offset)
        ->limit($limit)
        ->orderBy($this->arr_values['table_name'].'.id', $order_by);
    


        $data_list = $data_list->get();
        $data_list->transform(function ($item) {
            $item->amount = Helpers::price_formate($item->amount);
            $item->balance = Helpers::price_formate($item->balance);
            $item->add_date_time = date("d M, Y h: A", strtotime($item->add_date_time));
            return $item;
        });



        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = 'return';
        $result['data'] = [
          "deposit"=>Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($user_id)->deposit),
          "commision_wallet"=>Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($user_id)->commision_wallet),
          "wallet"=>Helpers::price_formate(@\App\Models\MemberModel::getTypeAllIncome($user_id)->wallet),
          "list"=>$data_list,
        ];
        return response()->json($result, $responseCode);

    }
}