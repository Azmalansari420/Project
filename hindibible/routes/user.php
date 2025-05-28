<?php 
use Illuminate\Support\Facades\Route;


/*user routes*/
// use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserNewRegisterController;
use App\Http\Controllers\User\UserActivationController;
use App\Http\Controllers\User\UserDepositController;
use App\Http\Controllers\User\UserChangePassword;
use App\Http\Controllers\User\UserWallet;
use App\Http\Controllers\User\UserEarning;
use App\Http\Controllers\User\UserWithdrawal;
use App\Http\Controllers\User\UserReward;



use App\Http\Controllers\User\UserKyc;
use App\Http\Controllers\User\UserProduct;
use App\Http\Controllers\User\UserTeam;
use App\Http\Controllers\User\UserDirectTeam;
use App\Http\Controllers\User\UserLeftTeam;
use App\Http\Controllers\User\UserRightTeam;
use App\Http\Controllers\User\UserIncomeHistory;
use App\Http\Controllers\User\UserSupport;
use App\Http\Controllers\User\UserMyReferral;
use App\Http\Controllers\User\UserTeamReferral;
use App\Http\Controllers\User\UserPayoutDetail;
use App\Http\Controllers\User\UserProfileImageController;

use App\Http\Controllers\User\UserCart;
use App\Http\Controllers\User\UserCheckout;
use App\Http\Controllers\User\UserMyOrder;
/*user routes end*/

// for user





Route::group(['prefix'=>'user','as'=>'user.', 'namespace'=>'User'], function(){

    

    
    
    Route::post('update-gender', [UserProfileController::class, 'update_gender'])->name('update-gender');

    Route::get('payment-pending', [UserProfileController::class, 'payment_pending'])->name('payment-pending');

    


    Route::group(['middleware' => ['user']], function () {
        Route::get('dashboard', [UserDashboardController::class, 'index'])->name('user-dashboard');
        


        Route::group(['prefix'=>'profile', 'as'=>'profile.', 'namespace'=>'User'], function(){
            Route::get('/', [UserProfileController::class, 'index'])->name('index');
            Route::get('load_data', [UserProfileController::class, 'load_data'])->name('load_data');
            Route::get('edit/{id?}', [UserProfileController::class, 'edit'])->name('edit');
            Route::post('update', [UserProfileController::class, 'update'])->name('update');
        });

        Route::group(['prefix'=>'new-register', 'as'=>'new-register.', 'namespace'=>'User'], function(){
            Route::get('/', [UserNewRegisterController::class, 'index'])->name('index');
            Route::get('load_data', [UserNewRegisterController::class, 'load_data'])->name('load_data');
            Route::get('edit/{id?}', [UserNewRegisterController::class, 'edit'])->name('edit');
            Route::post('update', [UserNewRegisterController::class, 'update'])->name('update');
        });

        Route::group(['prefix'=>'activation', 'as'=>'activation.', 'namespace'=>'User'], function(){
            Route::get('/', [UserActivationController::class, 'index'])->name('index');
            Route::get('load_data', [UserActivationController::class, 'load_data'])->name('load_data');
            Route::get('edit/{id?}', [UserActivationController::class, 'edit'])->name('edit');
            Route::post('update', [UserActivationController::class, 'update'])->name('update');
        });

        Route::group(['prefix'=>'deposit', 'as'=>'deposit.', 'namespace'=>'User'], function(){
            Route::get('/', [UserDepositController::class, 'index'])->name('index');
            Route::get('load_data', [UserDepositController::class, 'load_data'])->name('load_data');
            Route::get('pay', [UserDepositController::class, 'pay'])->name('pay');
            Route::post('pay-submit', [UserDepositController::class, 'pay_submit'])->name('pay-submit');
            Route::post('update', [UserDepositController::class, 'update'])->name('update');
        });


        Route::group(['prefix'=>'profile-image', 'as'=>'profile-image.', 'namespace'=>'User'], function(){
            Route::get('edit/{id?}', [UserProfileImageController::class, 'edit'])->name('edit');
            Route::post('update', [UserProfileImageController::class, 'update'])->name('update');
            Route::post('upload-temp', [UserProfileImageController::class, 'upload_temp'])->name('upload-temp');
        });
        
        
        Route::group(['prefix'=>'welcome', 'as'=>'welcome.', 'namespace'=>'User'], function(){
            Route::get('/', [UserWelcome::class, 'index'])->name('index');
        });


        Route::group(['prefix'=>'change-password', 'as'=>'change-password.', 'namespace'=>'User'], function(){
            Route::get('/', [UserChangePassword::class, 'index'])->name('index');
            Route::get('load_data', [UserChangePassword::class, 'load_data'])->name('load_data');
            Route::get('edit/{id?}', [UserChangePassword::class, 'edit'])->name('edit');
            Route::post('update', [UserChangePassword::class, 'update'])->name('update');
        });


        Route::group(['prefix'=>'kyc', 'as'=>'kyc.', 'namespace'=>'User'], function(){
            Route::get('/', [UserKyc::class, 'index'])->name('index');
            Route::get('load_data', [UserKyc::class, 'load_data'])->name('load_data');
            Route::get('edit/{id?}', [UserKyc::class, 'edit'])->name('edit');
            Route::post('update', [UserKyc::class, 'update'])->name('update');
            Route::post('kyc-change-update', [UserKyc::class, 'kyc_change_update'])->name('kyc-change-update');
            Route::post('kyc-change-otp-send', [UserKyc::class, 'kyc_change_otp_send'])->name('kyc-change-otp-send');
        });


        Route::group(['prefix'=>'team', 'as'=>'team.', 'namespace'=>'User'], function(){
            Route::get('/{id?}', [UserTeam::class, 'index'])->name('index');
        });

        Route::group(['prefix'=>'direct-team', 'as'=>'direct-team.', 'namespace'=>'User'], function(){
            Route::get('/', [UserDirectTeam::class, 'index'])->name('index');
            Route::get('load_data', [UserDirectTeam::class, 'load_data'])->name('load_data');
        });

        Route::group(['prefix'=>'left-team', 'as'=>'left-team.', 'namespace'=>'User'], function(){
            Route::get('/', [UserLeftTeam::class, 'index'])->name('index');
            Route::get('load_data', [UserLeftTeam::class, 'load_data'])->name('load_data');
        });

        Route::group(['prefix'=>'right-team', 'as'=>'right-team.', 'namespace'=>'User'], function(){
            Route::get('/', [UserRightTeam::class, 'index'])->name('index');
            Route::get('load_data', [UserRightTeam::class, 'load_data'])->name('load_data');
        });


        Route::group(['prefix'=>'wallet', 'as'=>'wallet.', 'namespace'=>'User'], function(){
            Route::get('/', [UserWallet::class, 'index'])->name('list');
            Route::get('load_data', [UserWallet::class, 'load_data'])->name('load_data');
            Route::get('add', [UserWallet::class, 'add'])->name('add');
            Route::get('view/{id?}', [UserWallet::class, 'view'])->name('view');
            Route::get('edit/{id?}', [UserWallet::class, 'edit'])->name('edit');
            Route::post('update', [UserWallet::class, 'update'])->name('update');
        });


        Route::group(['prefix'=>'earning', 'as'=>'earning.', 'namespace'=>'User'], function(){
            Route::get('/', [UserEarning::class, 'index'])->name('list');
            Route::get('load_data', [UserEarning::class, 'load_data'])->name('load_data');
            Route::post('transfer', [UserEarning::class, 'transfer'])->name('transfer');
        });
        Route::group(['prefix'=>'reward', 'as'=>'reward.', 'namespace'=>'User'], function(){
            Route::get('/', [UserReward::class, 'index'])->name('list');
            Route::get('load_data', [UserReward::class, 'load_data'])->name('load_data');
        });

        Route::group(['prefix'=>'withdrawal', 'as'=>'withdrawal.', 'namespace'=>'User'], function(){
            Route::get('/', [UserWithdrawal::class, 'index'])->name('list');
            Route::get('load_data', [UserWithdrawal::class, 'load_data'])->name('load_data');
            Route::get('add', [UserWithdrawal::class, 'add'])->name('add');
            Route::get('view/{id?}', [UserWithdrawal::class, 'view'])->name('view');
            Route::get('edit/{id?}', [UserWithdrawal::class, 'edit'])->name('edit');
            Route::post('update', [UserWithdrawal::class, 'update'])->name('update');
        });


        Route::group(['prefix'=>'income-history', 'as'=>'income-history.', 'namespace'=>'User'], function(){
            Route::get('/', [UserIncomeHistory::class, 'index'])->name('list');
            Route::get('load_data', [UserIncomeHistory::class, 'load_data'])->name('load_data');
            Route::get('edit/{id?}', [UserIncomeHistory::class, 'edit'])->name('edit');
            Route::post('update', [UserIncomeHistory::class, 'update'])->name('update');

            Route::get('excel_export', [UserIncomeHistory::class, 'excel_export'])->name('excel_export');
        });


        Route::group(['prefix'=>'my-referral', 'as'=>'my-referral.', 'namespace'=>'User'], function(){
            Route::get('/', [UserMyReferral::class, 'index'])->name('list');
            Route::get('load_data', [UserMyReferral::class, 'load_data'])->name('load_data');
            Route::get('edit/{id?}', [UserMyReferral::class, 'edit'])->name('edit');
            Route::post('update', [UserMyReferral::class, 'update'])->name('update');

            Route::get('excel_export', [UserMyReferral::class, 'excel_export'])->name('excel_export');
        });


        Route::group(['prefix'=>'team-referral', 'as'=>'team-referral.', 'namespace'=>'User'], function(){
            Route::get('/', [UserTeamReferral::class, 'index'])->name('list');
            Route::get('load_data', [UserTeamReferral::class, 'load_data'])->name('load_data');
            Route::get('edit/{id?}', [UserTeamReferral::class, 'edit'])->name('edit');
            Route::post('update', [UserTeamReferral::class, 'update'])->name('update');

            Route::get('excel_export', [UserTeamReferral::class, 'excel_export'])->name('excel_export');
        });


        Route::group(['prefix'=>'payout-detail', 'as'=>'payout-detail.', 'namespace'=>'User'], function(){
            Route::get('/', [UserPayoutDetail::class, 'index'])->name('list');
            Route::get('load_data', [UserPayoutDetail::class, 'load_data'])->name('load_data');
            Route::get('edit/{id?}', [UserPayoutDetail::class, 'edit'])->name('edit');
            Route::post('update', [UserPayoutDetail::class, 'update'])->name('update');

            Route::get('excel_export', [UserPayoutDetail::class, 'excel_export'])->name('excel_export');
        });

        Route::group(['prefix'=>'product', 'as'=>'product.', 'namespace'=>'Admin'], function(){
            Route::get('/', [UserProduct::class, 'index'])->name('list');
            Route::get('load_data', [UserProduct::class, 'load_data'])->name('load_data');
            Route::get('add', [UserProduct::class, 'add'])->name('add');
            Route::get('view/{id?}', [UserProduct::class, 'view'])->name('view');
            Route::post('update', [UserProduct::class, 'update'])->name('update');
        });


        Route::group(['prefix'=>'support', 'as'=>'support.', 'namespace'=>'Admin'], function(){
            Route::get('/', [UserSupport::class, 'index'])->name('list');
            Route::get('load_data', [UserSupport::class, 'load_data'])->name('load_data');
            Route::get('add', [UserSupport::class, 'add'])->name('add');
            Route::get('view/{id?}', [UserSupport::class, 'view'])->name('view');
            Route::post('update', [UserSupport::class, 'update'])->name('update');
        });

        Route::group(['prefix'=>'cart', 'as'=>'cart.', 'namespace'=>'Admin'], function(){
            Route::get('/', [UserCart::class, 'index'])->name('list');
            Route::post('add', [UserCart::class, 'add'])->name('add');
        });
        Route::group(['prefix'=>'checkout', 'as'=>'checkout.', 'namespace'=>'Admin'], function(){
            Route::get('/', [UserCheckout::class, 'index'])->name('list');
            Route::post('place_order', [UserCheckout::class, 'place_order'])->name('place_order');
            Route::get('success', [UserCheckout::class, 'success'])->name('success');
        });
        Route::group(['prefix'=>'my-order', 'as'=>'my-order.', 'namespace'=>'Admin'], function(){
            Route::get('/', [UserMyOrder::class, 'index'])->name('list');
            Route::get('load_data', [UserMyOrder::class, 'load_data'])->name('load_data');
            Route::get('view/{id?}', [UserMyOrder::class, 'view'])->name('view');
        });
        



    });
});


// for user end