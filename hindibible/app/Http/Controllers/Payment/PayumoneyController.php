<?php
namespace App\Http\Controllers\Payment;


use App\Helper\Helpers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Models\MemberModel;
use App\Models\Payumoney;
use App\Models\Package;
 
class PayumoneyController extends Controller
{


    public function make_payment(Request $request)
    {
        $id = $request->id;
        $amount = 0;
        $redirectUrl = route('payumoney.payment-response').'?id='.$id;
        $transaction_id = 'MT'.rand ( 10000 , 99999 ).rand ( 10000 , 99999 ).rand ( 1000 , 9999 ).rand ( 10 , 99 );

        DB::table('orders')->where("id",$id)->update(["transaction_id"=>$transaction_id,"payment_by"=>'payumoney',]);
        // return redirect(route('payumoney.payment-response-testing').'?id='.Crypt::encryptString($id));
        
        $orders = DB::table('orders')->where("id",$id)->where("status",0)->first();
        if(!empty($orders))
        {

            $user_id = $orders->user_id;
            $user = DB::table('users')->where('id',$user_id)->first();

            $amount = $orders->tax_amount;
            // $amount = 1;
            $data['redirectUrl'] = $redirectUrl;
            $data['redirectFUrl'] = $redirectUrl;
            $data['redirectCUrl'] = $redirectUrl;
            $data['transaction_id'] = $transaction_id;
            $data['amount'] = $amount;
            $data['orders'] = $orders;
            $data['user'] = $user;
            $html = Payumoney::create_checksum($data);
            $data['html'] = $html;

            if(!empty($html))
            {
                echo $html;
            }
            else
            {
                return redirect('payment-block');
            }
        }
        else
        {
            return redirect('payment-block');
        }
    }

    
   
    public function payment_response(Request $request)
    {
        $id = $request->id;
        $orders = DB::table('orders')->where("id",$id)->where("status",0)->first();
        if(!empty($orders))
        {
            $insert_id = $orders->user_id;
            $transaction_id = $orders->transaction_id;
            $payment_status = Payumoney::payment_status($transaction_id);        
            if(!empty($payment_status->status) && !empty($payment_status->transaction_details->$transaction_id))
            {
                if(!empty($payment_status->transaction_details) && $payment_status->transaction_details->$transaction_id->status=='success')
                {
                    MemberModel::update_order($orders->user_id,1);
                    Package::package_sale_count($orders->product_id);
                    MemberModel::direct_income($insert_id,'');
                    MemberModel::team_income($insert_id,'');
                    MemberModel::update_affiliate_id($orders->user_id);
                    MemberModel::check_double_income($insert_id);
                    MemberModel::income_mails($insert_id);
                    return redirect(route('user.user'));      
                }
                else
                {
                    return redirect('payment-faild');
                }
            }
            return redirect('user');
        }
        else
        {
            return redirect(route('user.user'));
            // return redirect('payment-block');
        }
    }
   
    public function payment_response_testing(Request $request)
    {
        // $id = Crypt::decryptString($request->id);
        // $orders = DB::table('orders')->where("id",$id)->where("status",0)->first();
        // if(!empty($orders))
        // {
        //     $insert_id = $orders->user_id;
        //     $transaction_id = $orders->transaction_id;

        //     MemberModel::direct_income($insert_id);
        //     MemberModel::team_income($insert_id);
        //     MemberModel::update_affiliate_id($orders->user_id);
        //     MemberModel::update_order($orders->user_id);

        //     return redirect('user');
        // }
        // else
        // {
        //     return redirect('payment-block');
        // }
    }

    public function payment_status(Request $request)
    {
       
    }


    


}