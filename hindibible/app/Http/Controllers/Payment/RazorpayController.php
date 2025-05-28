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
 
class RazorpayController extends Controller
{


    public function create_url($data)
    {
        define("phone_pay_merchant_id",'M22JXHNPTEKAW');
        define("phone_pay_secret_key",'62120129-b5a2-48b5-a42f-a9fa99c83127');
        
        
        $order_amount = $data['amount'];
        $transaction_id = $data['transaction_id'];
        $redirectUrl = $data['redirectUrl'];

            
        $currency = 'INR';
        $data = array (
              'merchantId' => phone_pay_merchant_id,
              'merchantTransactionId' => $transaction_id,
              'order_id' => $transaction_id,
              'merchantUserId' => "MUID123",
              'amount' => $order_amount*100,
              'redirectUrl' => $redirectUrl,
              'redirectMode' => 'POST',
              'callbackUrl' => $redirectUrl,
              'mobileNumber' => '',
              'paymentInstrument' => 
              array (
                'type' => 'PAY_PAGE',
              ),
        );
        $encode = base64_encode(json_encode($data));
        $saltKey = phone_pay_secret_key;
        $saltIndex = 1;
        $string = $encode.'/pg/v1/pay'.$saltKey;
        $sha256 = hash('sha256',$string);
        $finalXHeader = $sha256.'###'.$saltIndex;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.phonepe.com/apis/hermes/pg/v1/pay',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>json_encode(['request' => $encode]),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'X-VERIFY: '.$finalXHeader
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        $url = '';
        if($response->success==true)
        {
            $url = $response->data->instrumentResponse->redirectInfo->url;
        }
        else
        {
            $url = '';
        }
        return $url;        
    }


    public function make_payment(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        $amount = 0;
        $redirectUrl = route('razorpay.payment-response').'?id='.Crypt::encryptString($id);
        $transaction_id = 'MT'.rand ( 10000 , 99999 ).rand ( 10000 , 99999 ).rand ( 1000 , 9999 ).rand ( 10 , 99 );

        DB::table('orders')->where("id",$id)->update(["transaction_id"=>$transaction_id,]);
        return redirect($redirectUrl);
        

        $orders = DB::table('orders')->where("id",$id)->where("status",0)->first();
        if(!empty($orders))
        {
            $amount = $orders->tax_amount;
            $data['redirectUrl'] = $redirectUrl;
            $data['transaction_id'] = $transaction_id;
            $data['amount'] = $amount;
            $url = $this->create_url($data);
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
        // return view('payment/razorpay/index',compact('data'));
    }
   
    public function payment_response(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        $orders = DB::table('orders')->where("id",$id)->where("status",0)->first();
        if(!empty($orders))
        {
            $insert_id = $orders->user_id;
            MemberModel::direct_income($insert_id);
            MemberModel::team_income($insert_id);
            MemberModel::update_affiliate_id($orders->user_id);
            MemberModel::update_order($orders->user_id);


            // MemberModel::update_income($orders->user_id);         

            return redirect('user');
        }
        else
        {
            return redirect('payment-block');
        }
    }



    


}