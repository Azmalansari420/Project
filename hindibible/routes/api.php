<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*common api start*/
use App\Http\Controllers\Api\CommonController;
/*common api end*/


/*user start*/

use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\User\HomeController;

use App\Http\Controllers\Api\User\PostController;
use App\Http\Controllers\Api\User\PostCommentController;
use App\Http\Controllers\Api\User\FriendController;
use App\Http\Controllers\Api\User\MessageController;
use App\Http\Controllers\Api\User\UserController;
use App\Http\Controllers\Api\User\NewRegisterController;
use App\Http\Controllers\Api\User\ActivationController;
use App\Http\Controllers\Api\User\DepositController;
use App\Http\Controllers\Api\User\TeamController;
use App\Http\Controllers\Api\User\KycController;
use App\Http\Controllers\Api\User\WalletController;
use App\Http\Controllers\Api\User\WithdrawalController;
use App\Http\Controllers\Api\User\EarningController;
use App\Http\Controllers\Api\User\SupportController;
use App\Http\Controllers\Api\User\ProductController;
use App\Http\Controllers\Api\User\CartController;

/*user end*/


/*Technician start*/

use App\Http\Controllers\Api\Technician\TechnicianAuthController;
use App\Http\Controllers\Api\Technician\TechnicianHomeController;

use App\Http\Controllers\Api\Technician\TechnicianPostController;
use App\Http\Controllers\Api\Technician\TechnicianPostCommentController;
use App\Http\Controllers\Api\Technician\TechnicianFriendController;
use App\Http\Controllers\Api\Technician\TechnicianMessageController;
use App\Http\Controllers\Api\Technician\TechnicianUserController;
use App\Http\Controllers\Api\Technician\TechnicianNewRegisterController;
use App\Http\Controllers\Api\Technician\TechnicianActivationController;
use App\Http\Controllers\Api\Technician\TechnicianDepositController;
use App\Http\Controllers\Api\Technician\TechnicianTeamController;
use App\Http\Controllers\Api\Technician\TechnicianKycController;
use App\Http\Controllers\Api\Technician\TechnicianWalletController;
use App\Http\Controllers\Api\Technician\TechnicianWithdrawalController;
use App\Http\Controllers\Api\Technician\TechnicianEarningController;
use App\Http\Controllers\Api\Technician\TechnicianSupportController;
use App\Http\Controllers\Api\Technician\TechnicianProductController;
use App\Http\Controllers\Api\Technician\TechnicianCartController;

/*Technician end*/






/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*Common apis start*/
    Route::get('country', [CommonController::class, 'country']);
    Route::get('package', [CommonController::class, 'package']);
    Route::get('state', [CommonController::class, 'state']);
    Route::get('category', [CommonController::class, 'category']);
/*Common apis end*/


/*Technician apis start*/

Route::group(['prefix'=>'technician','as'=>'technician.', 'namespace'=>'Technician'], function(){
    Route::post('login', [TechnicianAuthController::class, 'login']);

    Route::post('register-otp-send', [TechnicianAuthController::class, 'register_otp_send']);
    Route::post('register', [TechnicianAuthController::class, 'register']);

    Route::post('send-otp', [TechnicianAuthController::class, 'send_otp']);
    Route::post('submit-otp', [TechnicianAuthController::class, 'submit_otp']);
    Route::post('create-password', [TechnicianAuthController::class, 'create_password']);

    



    Route::get('logout', [TechnicianAuthController::class, 'logout']);

    Route::group(['middleware' => ['api']], function () {

        Route::get('home-detail', [TechnicianHomeController::class, 'detail']);


        Route::post('update-profile', [TechnicianAuthController::class, 'update_profile']);
        Route::post('update-profile-photo', [TechnicianAuthController::class, 'update_profile_photo']);
        Route::post('update-password', [TechnicianAuthController::class, 'update_password']);
        Route::get('get-profile', [TechnicianAuthController::class, 'get_profile']);
        Route::post('logout', [TechnicianAuthController::class, 'logout']);


        Route::get('profile', [TechnicianController::class, 'detail']);

        
        Route::get('kyc-detail', [TechnicianKycController::class, 'kycDetail']);
        Route::post('kyc-add', [TechnicianKycController::class, 'kycAdd']);



    });


});

/*Technician apis end*/



/*user apis start*/

Route::group(['prefix'=>'user','as'=>'user.', 'namespace'=>'User'], function(){
    Route::post('login', [AuthController::class, 'login']);

    Route::post('register-otp-send', [AuthController::class, 'register_otp_send']);
    Route::post('register', [AuthController::class, 'register']);

    Route::post('send-otp', [AuthController::class, 'send_otp']);
    Route::post('submit-otp', [AuthController::class, 'submit_otp']);
    Route::post('create-password', [AuthController::class, 'create_password']);

    /*Common apis*/
    Route::get('country', [CommonController::class, 'country']);
    Route::get('package', [CommonController::class, 'package']);
    Route::get('state', [CommonController::class, 'state']);
    Route::get('category', [CommonController::class, 'category']);



    Route::get('logout', [AuthController::class, 'logout']);

    Route::group(['middleware' => ['api']], function () {

        Route::get('home-detail', [HomeController::class, 'detail']);


        Route::post('update-profile', [AuthController::class, 'update_profile']);
        Route::post('update-password', [AuthController::class, 'update_password']);
        Route::get('get-profile', [AuthController::class, 'get_profile']);
        Route::post('logout', [AuthController::class, 'logout']);



        Route::post('add-post', [PostController::class, 'add']);
        Route::get('post-list', [PostController::class, 'list']);
        Route::post('update-post', [PostController::class, 'update']);
        Route::post('delete-post', [PostController::class, 'delete']);
        Route::post('post-like-unlike', [PostController::class, 'post_like_unlike']);
        Route::post('post-share', [PostController::class, 'post_share']);


        Route::post('add-post-comment', [PostCommentController::class, 'add']);
        Route::get('post-comment-list', [PostCommentController::class, 'list']);
        Route::post('delete-post-comment', [PostCommentController::class, 'delete']);


        Route::get('find-friends', [FriendController::class, 'find_friends']);
        Route::get('my-friends', [FriendController::class, 'my_friends']);
        Route::get('my-friend-requests', [FriendController::class, 'my_requests']);
        Route::post('send-friend-request', [FriendController::class, 'send_request']);
        Route::get('my-send-friend-request', [FriendController::class, 'my_send_requests']);
        Route::post('response-friend-request', [FriendController::class, 'response_request']);


        Route::post('send-message', [MessageController::class, 'send']);
        Route::get('message-list', [MessageController::class, 'list']);
        Route::post('message-detail', [MessageController::class, 'detail']);


        Route::get('profile', [UserController::class, 'detail']);

        Route::post('new-register', [NewRegisterController::class, 'add']);
        Route::post('account-activation', [ActivationController::class, 'update']);

        Route::post('deposit-list', [DepositController::class, 'list']);
        Route::post('deposit-add', [DepositController::class, 'add']);
        Route::post('deposit-submit', [DepositController::class, 'pay']);


        Route::post('team-tree', [TeamController::class, 'tree']);
        Route::post('team-direct', [TeamController::class, 'direct']);
        Route::post('team-left', [TeamController::class, 'leftMember']);
        Route::post('team-right', [TeamController::class, 'rightMember']);

        
        Route::get('kyc-detail', [KycController::class, 'kycDetail']);
        Route::post('kyc-add', [KycController::class, 'kycAdd']);


        Route::get('wallet-list', [WalletController::class, 'list']);

        Route::get('withdrawal-list', [WithdrawalController::class, 'list']);
        Route::post('withdrawal-add', [WithdrawalController::class, 'add']);

        Route::get('earning-list', [EarningController::class, 'list']);

        Route::get('support-list', [SupportController::class, 'list']);
        Route::post('support-add', [SupportController::class, 'add']);
        
        Route::get('product-list', [ProductController::class, 'list']);


        Route::get('cart-list', [CartController::class, 'list']);
        Route::post('cart-add', [CartController::class, 'add']);


    });


});


/*user apis end*/