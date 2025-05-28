<?php 
use Illuminate\Support\Facades\Route;



/*admin auth routes*/

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\User\UserAuthController;

Route::group(['prefix'=>'admin'], function(){
	
	Route::get('/', [AuthController::class, 'login_view'])->name('admin');
	Route::post('login-action', [AuthController::class, 'login'])->name('login');
	Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

/*admin auth routes end*/



/*user auth routes*/

Route::get('registration', [UserAuthController::class, 'registration_view'])->name('registration');
Route::group(['prefix'=>'user','as'=>'user.', 'namespace'=>'User'], function(){
	
	Route::get('/', [UserAuthController::class, 'login_view'])->name('user');
    Route::post('login', [UserAuthController::class, 'login'])->name('user-login-action');
    Route::get('registration', [UserAuthController::class, 'registration_view'])->name('registration');
    Route::post('register', [UserAuthController::class, 'register'])->name('user-register-action');
    Route::post('register-otp-send', [UserAuthController::class, 'register_otp_send'])->name('user-register-otp-send-action');
    Route::get('logout', [UserAuthController::class, 'logout'])->name('user-logout');


    Route::get('forgot', [UserAuthController::class, 'forgot_view'])->name('user-forgot');
    Route::post('user-forgot-password-otp', [UserAuthController::class, 'send_otp'])->name('user-forgot-password-otp');
    Route::get('otp', [UserAuthController::class, 'otp_view'])->name('user-otp');
    Route::post('user-forgot-password-otp-submit', [UserAuthController::class, 'forgot_otp_submit'])->name('user-forgot-password-otp-submit');
    Route::get('create-password', [UserAuthController::class, 'create_password_view'])->name('user-create-password');
    Route::post('user-create-password-submit', [UserAuthController::class, 'create_password_submit'])->name('user-create-password-submit');

});

/*user auth routes end*/
