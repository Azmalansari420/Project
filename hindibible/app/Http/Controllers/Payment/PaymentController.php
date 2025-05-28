<?php
namespace App\Http\Controllers\Payment;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $id = $request->id;
        $payment_setting = DB::table("payment_setting")->where("status",1)->get();
        $count = count($payment_setting);
        if($count==1)
        {
            $keys = json_decode($payment_setting[0]->data);
            return redirect(route($keys->prefix.'.make-payment').'?id='.$id);
        }
        else
        {
            return view('payment/payment-mode/index',compact('payment_setting','id'));
        }
        // print_r($payment_setting);
    }

    public function payment_block(Request $request)
    {
        $setting = \App\Models\Setting::get();
        $main_setting = $setting['main'];
        $data['setting'] = $setting;
        $data['main_setting'] = $main_setting;
        return view('payment/payment-block',compact('setting','main_setting'));
    }

    public function payment_faild(Request $request)
    {
        $setting = \App\Models\Setting::get();
        $main_setting = $setting['main'];
        $data['setting'] = $setting;
        $data['main_setting'] = $main_setting;
        return view('payment/payment-faild',compact('setting','main_setting'));
    }
    
}