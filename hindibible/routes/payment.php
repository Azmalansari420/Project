<?php 
use Illuminate\Support\Facades\Route;


define("phone_pay_merchant_id",'M22JXHNPTEKAW');
define("phone_pay_secret_key",'62120129-b5a2-48b5-a42f-a9fa99c83127');


// define("PAYU_BASE_URL",'https://test.payu.in');
define("PAYU_BASE_URL",'https://secure.payu.in/');
define("PAYU_MERCHANT_KEY",'U6uKsk');
define("PAYU_SALT",'GvqdjRF5iUf0aop3M0QZJU2Bht1TFBx3');


// define("PAYU_MERCHANT_KEY",'oZ7oo9');
// define("PAYU_SALT",'UkojH5TS');


/*payment routes*/
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Payment\RazorpayController;
use App\Http\Controllers\Payment\PhonepeController;
use App\Http\Controllers\Payment\PayumoneyController;
/*payment routes end*/



/*payments start*/
Route::get('pay', [PaymentController::class, 'pay'])->name('pay');
Route::group(['prefix'=>'payumoney', 'as'=>'payumoney.', 'namespace'=>'User'], function(){
    Route::get('make-payment', [PayumoneyController::class, 'make_payment'])->name('make-payment');
    Route::post('payment-response', [PayumoneyController::class, 'payment_response'])->name('payment-response');
    Route::get('payment-status', [PayumoneyController::class, 'payment_status'])->name('payment-status');
    Route::get('payment-response-testing', [PayumoneyController::class, 'payment_response_testing'])->name('payment-response-testing');
});


Route::group(['prefix'=>'phonepe', 'as'=>'phonepe.', 'namespace'=>'User'], function(){
    Route::get('make-payment', [PhonepeController::class, 'make_payment'])->name('make-payment');
    Route::post('payment-response', [PhonepeController::class, 'payment_response'])->name('payment-response');
    Route::get('payment-status', [PhonepeController::class, 'payment_status'])->name('payment-status');
    Route::get('payment-response-testing', [PhonepeController::class, 'payment_response_testing'])->name('payment-response-testing');
});

Route::group(['prefix'=>'razorpay', 'as'=>'razorpay.', 'namespace'=>'User'], function(){
    Route::get('make-payment', [RazorpayController::class, 'make_payment'])->name('make-payment');
    Route::post('payment-response', [RazorpayController::class, 'payment_response'])->name('payment-response');
    Route::get('payment-status', [RazorpayController::class, 'payment_status'])->name('payment-status');
    Route::get('payment-response-testing', [RazorpayController::class, 'payment_response_testing'])->name('payment-response-testing');
});
Route::post('upgrade-plan/payment-response', [UserUpgradePlan::class, 'payment_response'])->name('upgrade-plan/payment-response');

Route::get('/payment-block', [PaymentController::class, 'payment_block']);
Route::get('/payment-faild', [PaymentController::class, 'payment_faild']);

/*payments end*/


