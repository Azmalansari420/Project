<?php
namespace App\Http\Controllers\Payment;


use App\Helper\Helpers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Custom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Helper\ImageManager;
use App\Models\MemberModel;
use App\Models\Phonepe;
use App\Models\Package;
 
class PhonepeController extends Controller
{


    public function make_payment(Request $request)
    {
        $id = $request->id;
        $amount = 0;
        $redirectUrl = route('phonepe.payment-response').'?id='.$id;
        $transaction_id = 'MT'.rand ( 10000 , 99999 ).rand ( 10000 , 99999 ).rand ( 1000 , 9999 ).rand ( 10 , 99 );
        

        DB::table('orders')->where("id",$id)->update(["transaction_id"=>$transaction_id,"payment_by"=>'phonepe',]);
        // return redirect(route('phonepe.payment-response-testing').'?id='.$id);
        // return redirect(url('user'));
        

        $orders = DB::table('orders')->where("id",$id)->where("status",0)->first();
        if(!empty($orders))
        {
            $amount = $orders->tax_amount;
            $data['redirectUrl'] = $redirectUrl;
            $data['transaction_id'] = $transaction_id;
            $data['amount'] = $amount;
            $url = Phonepe::create_url($data);
            if(!empty($url))
            {
                return redirect($url);
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
        // return view('payment/phonepe/index',compact('data'));
    }

    
   
    public function payment_response(Request $request)
    {
        $id = $request->id;
        $orders = DB::table('orders')->where("id",$id)->where("status",0)->first();
         

        if(!empty($orders))
        {
            $insert_id = $orders->user_id;
            $transaction_id = $orders->transaction_id;

            $payment_status = Phonepe::payment_status($transaction_id);
            if($payment_status->success)
            {
                if($payment_status->code=='PAYMENT_SUCCESS')
                {
                    MemberModel::update_order($orders->user_id,1);
                    Package::package_sale_count($orders->product_id);
                    MemberModel::direct_income($insert_id,'');
                    MemberModel::team_income($insert_id,'');
                    MemberModel::update_affiliate_id($orders->user_id);
                    MemberModel::check_double_income($insert_id);
                    MemberModel::income_mails($insert_id);
                    // MemberModel::update_income($orders->user_id);         
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
        // $id = $request->id;
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
        // // PAYMENT_SUCCESS
        // $transaction_id = 'MT1964096223346621';
        // $payment_status = Phonepe::payment_status($transaction_id);
        // if($payment_status->success)
        // {
        //     if($payment_status->code=='PAYMENT_SUCCESS')
        //     {

        //     }
        // }
        // print_r($payment_status);
    }



    


}