@php($detail = $details['body']['detail'])
@php($user = $details['body']['user'])
@php($orders = $details['body']['transaction'])

<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>{{env("APP_NAME")}}</title>
    <meta name="description" content="{{env("APP_NAME")}}.">
    <style type="text/css">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!-- 100% body table -->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    
                    <tr style="margin-top: -3px !important;display: block;">
                        <td style="width: 100%;display: block;">
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="width:100%; background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);margin: 0 !important;    padding: 15px 0 15px 0;">
                                <tr>
                                    <td style="text-align:left;">      
                                        <!-- <img width="60" src="{{url('/')}}/public/web/assets/img/logo/logo.webp" title="logo" alt="logo"> -->
                                        <img src="{{url('/')}}/public/welcome.jpg" style="width: 50%;margin: 0 auto;display: block;" title="logo" alt="logo">
                                    </td>
                                </tr>


                                <tr>
                                    <td>


                                        <div style="display: flex;width: 100%;">
                                            <p style="margin: 10px 0 0px auto;margin-right: 15px;text-align: left;line-height: 1.4;">
                                                <!-- GSTIN No:fasfsafsa<br> -->
                                                Date: {{date("Y M, d", strtotime($orders->payment_date_time))}}<br>
                                                Invoice No.:{{sort_name.$user->user_id}}
                                            </p>
                                        </div>

                                        <div style="display: flex;width: 100%;">
                                            <p style="margin: 10px 0px 10px auto;margin-right: 15px;text-align: left;line-height: 1.4;margin-left: 15px;width: 350px;">
                                                Bill To<br>
                                                Contact Name: {{$user->name}}<br>
                                                Contact Phone: {{$user->phone}}<br>
                                                Address: {{$user->address}} , {{@DB::table('states')->where("id",$user->state)->first()->name}}
                                            </p>
                                        </div>

                                        <div style="display: flex;width: 100%;background: lightgray;padding: 5px 0;font-weight: 600;margin-bottom: 0px;">
                                            <span style="width: 25%;">Description</span>
                                            <span style="width: 25%;">QTY</span>
                                            <span style="width: 25%;">Unit Price</span>
                                            <span style="width: 25%;">Total</span>
                                        </div>
                                        @foreach($detail as $key=>$value)
                                            <div style="display: flex;padding: 10px 0;">
                                                <span style="width: 25%;">{{$value->name}}</span>
                                                <span style="width: 25%;">{{$value->qty}}</span>
                                                <span style="width: 25%;">{{Helpers::price_formate($value->amount)}}</span>
                                                <span style="width: 25%;">{{Helpers::price_formate($value->amount*$value->qty)}}</span>
                                            </div>
                                        @endforeach

                                        <div style="display: flex;background: lightgray;padding: 15px 15px 5px 0px;font-size: 14px;text-align: right;">
                                            <span style="width: 60%;">Sub Total</span>
                                            <span style="width: 40%;">{{Helpers::price_formate($orders->final_amount)}} (GST Included)</span>
                                        </div>
                                        <div style="display: flex;background: lightgray;padding: 5px 15px;text-align: right;">
                                            <span style="width: 60%;">Discount</span>
                                            <span style="width: 40%;">{{Helpers::price_formate(0)}}</span>
                                        </div>
                                        <div style="display: flex;background: lightgray;padding: 5px 15px;text-align: right;">
                                            <span style="width: 60%;font-weight: 600;">Total Amount</span>
                                            <span style="width: 40%;font-weight: 600;">{{Helpers::price_formate($orders->final_amount)}}</span>
                                        </div>



                                    </td>
                                </tr>



                                <tr>
                                    <td style="padding:20px 0 0 35px;">


                    
                         

                    
                    


                        <p style="line-height: 1.5;">

                        Contact Us<br>
                        In case you face any issue , please write to<br>
                        {{env("APP_NAME")}}
                        

                    </p>



                                    </td>
                                </tr>
                                
                            </table>
                        </td>
                    </tr>
                    
                    <tr style="display:none;">
                        <td style="text-align:center;">
                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>www.knowledgewaveindia.com</strong> </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>

</html>