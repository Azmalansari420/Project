<?php
namespace App\Http\Controllers\APi\User;


use App\Helper\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\User;
use App\Models\Package;
use App\Models\MemberModel;
use App\Models\MailModel;
 
class ActivationController extends Controller
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



  

    public function update(Request $request)
    {
        $user_id = $this->user_id;
        $add_by = $user_id;    
        
        $member_id = $request->member_id;
        $package_id = $request->package;

        $package = DB::table('package')->where('id',$package_id)->first();
        if(empty($package))
        {
            $action = 'add';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Select package!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        $package_amount = $package->sale_price;

        $walletData = DB::table('wallet')->select('wallet')->where('user_id',$user_id)->first();
        $wallet = $walletData->wallet;


        if($wallet<$package_amount)
        {
            $action = 'add';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'You have low balance!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }

        $sponser = MemberModel::GetSponserData($member_id);
        if(empty($sponser))
        {
            $action = 'add';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'Wrong Sponser ID!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }
        if($sponser->is_paid==1)
        {
            $action = 'add';
            $responseCode = 400;
            $result['status'] = $responseCode;
            $result['message'] = 'This id already active!';
            $result['action'] = $action;
            $result['data'] = [];
            return response()->json($result, $responseCode);
        }

        DB::table('users')->where('id',$sponser->id)->update(["package"=>$package->id,"package_name"=>$package->name,]);

        $walletData = [
            "user_id"=>$user_id,
            "amount"=>$package_amount,
            "message"=>'ID Activate <br>Member Name: '.$sponser->name." <br>Member ID: ".$sponser->user_id,
            "type"=>2,
            "wallet_type"=>3, // 1=depoit,2=earning wallet,3=deduct both
        ];
        Helpers::wallet_credir_debit($walletData);

        MemberModel::activeId($sponser->id);

        
        $detail = [];
        $detail[] = ["name"=>$package->name,"qty"=>1,"amount"=>$package->sale_price,];
        $transactionData = [
            "user_id"=>$sponser->id,
            "amount"=>$package->sale_price,
            "type"=>1,
            "detail"=>$detail,
        ];
        MemberModel::createTransaction($transactionData);

        $user_id = $sponser->id;
        $email = $sponser->email;
        $transaction = DB::table("transaction")->where(["user_id"=>$user_id,"status"=>1,])->orderBy('id','desc')->first();
        $user = DB::table("users")->where(["id"=>$user_id,])->first();
        $details = [
            'to'=>$email,
            'view'=>'mailtemplate.invoice',
            'subject'=>'Invoice '.env('APP_NAME').'!',
            'body' => ["detail"=>json_decode($transaction->detail),"user"=>$user,"transaction"=>$transaction,],
        ];
        MailModel::invoice($details);

        $action = 'return';
        $responseCode = 200;
        $result['status'] = $responseCode;
        $result['message'] = 'Success';
        $result['action'] = $action;
        $result['data'] = [];
        return response()->json($result, $responseCode);
    
    }
    


}