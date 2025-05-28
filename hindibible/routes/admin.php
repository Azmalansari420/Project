<?php 
use Illuminate\Support\Facades\Route;


/*admin routes*/
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ChangePasswordController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SubSubCategoryController;
use App\Http\Controllers\Admin\SubSubSubCategoryController;
use App\Http\Controllers\Admin\ExpressionImageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SettingController;


use App\Http\Controllers\Admin\SupportController;




use App\Http\Controllers\Admin\AdminExcelController;
use App\Http\Controllers\Admin\PaymentSettingController;
use App\Http\Controllers\Admin\InvoiceController;

/*admin routes end*/






// for admin




Route::post('get-package-category', [WebController::class, 'get_package_category'])->name('get-package-category');

Route::group(['middleware' => ['admin']], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('admin_earning_calendar', [DashboardController::class, 'admin_earning_calendar'])->name('admin_earning_calendar');

    
    Route::group(['prefix'=>'admin-change-password', 'as'=>'admin-change-password.'], function(){
        Route::get('/', [ChangePasswordController::class, 'index'])->name('index');
        Route::get('load_data', [ChangePasswordController::class, 'load_data'])->name('load_data');
        Route::get('edit/{id?}', [ChangePasswordController::class, 'edit'])->name('edit');
        Route::post('update', [ChangePasswordController::class, 'update'])->name('update');
    });

    Route::group(['prefix'=>'category', 'as'=>'category.'], function(){
        Route::get('/', [CategoryController::class, 'index'])->name('list');
        Route::get('load_data', [CategoryController::class, 'load_data'])->name('load_data');
        Route::get('add', [CategoryController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('update', [CategoryController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [CategoryController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix'=>'sub-category', 'as'=>'sub-category.'], function(){
        Route::get('/', [SubCategoryController::class, 'index'])->name('list');
        Route::get('load_data', [SubCategoryController::class, 'load_data'])->name('load_data');
        Route::get('add', [SubCategoryController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [SubCategoryController::class, 'edit'])->name('edit');
        Route::post('update', [SubCategoryController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [SubCategoryController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix'=>'sub-sub-category', 'as'=>'sub-sub-category.'], function(){
        Route::get('/', [SubSubCategoryController::class, 'index'])->name('list');
        Route::get('load_data', [SubSubCategoryController::class, 'load_data'])->name('load_data');
        Route::get('add', [SubSubCategoryController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [SubSubCategoryController::class, 'edit'])->name('edit');
        Route::post('update', [SubSubCategoryController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [SubSubCategoryController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix'=>'sub-sub-sub-category', 'as'=>'sub-sub-sub-category.'], function(){
        Route::get('/', [SubSubSubCategoryController::class, 'index'])->name('list');
        Route::get('load_data', [SubSubSubCategoryController::class, 'load_data'])->name('load_data');
        Route::get('add', [SubSubSubCategoryController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [SubSubSubCategoryController::class, 'edit'])->name('edit');
        Route::post('update', [SubSubSubCategoryController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [SubSubSubCategoryController::class, 'delete'])->name('delete');
    });


    Route::group(['prefix'=>'post', 'as'=>'post.'], function(){
        Route::get('/', [PostController::class, 'index'])->name('list');
        Route::get('load_data', [PostController::class, 'load_data'])->name('load_data');
        Route::get('add', [PostController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [PostController::class, 'edit'])->name('edit');
        Route::post('update', [PostController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [PostController::class, 'delete'])->name('delete');
    });


    Route::group(['prefix'=>'expression-image', 'as'=>'expression-image.'], function(){
        Route::get('/', [ExpressionImageController::class, 'index'])->name('list');
        Route::get('load_data', [ExpressionImageController::class, 'load_data'])->name('load_data');
        Route::get('add', [ExpressionImageController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [ExpressionImageController::class, 'edit'])->name('edit');
        Route::post('update', [ExpressionImageController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [ExpressionImageController::class, 'delete'])->name('delete');
    });

   

    Route::group(['prefix'=>'package', 'as'=>'package.'], function(){
        Route::get('/', [PackageController::class, 'index'])->name('list');
        Route::get('load_data', [PackageController::class, 'load_data'])->name('load_data');
        Route::get('add', [PackageController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [PackageController::class, 'edit'])->name('edit');
        Route::post('update', [PackageController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [PackageController::class, 'delete'])->name('delete');
    });



  
 
    Route::group(['prefix'=>'user', 'as'=>'user.'], function(){
        Route::get('/', [UserController::class, 'index'])->name('list');
        Route::get('load_data', [UserController::class, 'load_data'])->name('load_data');
        Route::get('add', [UserController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [UserController::class, 'edit'])->name('edit');
        Route::post('update', [UserController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [UserController::class, 'delete'])->name('delete');
        Route::get('account-action/{id?}', [UserController::class, 'account_action'])->name('account-action');


        // Route::post('add-income', [UserController::class, 'add_income'])->name('add-income');
        // Route::get('add-income-history', [UserController::class, 'add_income_history'])->name('add-income-history');
        // Route::post('add-income-delete/{id?}', [UserController::class, 'add_income_delete'])->name('add-income-delete');
        
        Route::get('change-password/{id?}', [UserController::class, 'change_password'])->name('change-password');
        Route::post('change-password-action', [UserController::class, 'change_password_action'])->name('change-password-action');

        // Route::get('upgrade/{id?}', [UserController::class, 'upgrade'])->name('upgrade');
        // Route::post('upgrade-action', [UserController::class, 'upgrade_action'])->name('upgrade-action');
        
        // Route::get('upgrade-without-income/{id?}', [UserController::class, 'upgrade_without_income'])->name('upgrade-without-income');
        // Route::post('upgrade-without-income-action', [UserController::class, 'upgrade_without_income_action'])->name('upgrade-without-income-action');

        // Route::get('change-package/{id?}', [UserController::class, 'change_package'])->name('change-package');
        // Route::post('change-package-action', [UserController::class, 'change_package_action'])->name('change-package-action');

        Route::get('change-sponser/{id?}', [UserController::class, 'change_sponser'])->name('change-sponser');
        Route::post('change-sponser-action', [UserController::class, 'change_sponser_action'])->name('change-sponser-action');

        // Route::get('change-sponser-revert-income/{id?}', [UserController::class, 'change_sponser_revert_income'])->name('change-sponser-revert-income');
        // Route::post('change-sponser-revert-income-action', [UserController::class, 'change_sponser_revert_income_action'])->name('change-sponser-revert-income-action');


        Route::get('activate-with-income/{id?}', [UserController::class, 'activate_with_income'])->name('activate-with-income');
        Route::post('activate-with-income-action', [UserController::class, 'activate_with_income_action'])->name('activate-with-income-action');

        // Route::get('activate-without-income/{id?}', [UserController::class, 'activate_without_income'])->name('activate-without-income');
        // Route::post('activate-without-income-action', [UserController::class, 'activate_without_income_action'])->name('activate-without-income-action');

        Route::get('reffral/{id?}', [UserController::class, 'reffral'])->name('reffral');
        Route::get('load_reffral_data', [UserController::class, 'load_reffral_data'])->name('load_reffral_data');

        Route::get('team-reffral/{id?}', [UserController::class, 'team_reffral'])->name('team-reffral');
        Route::get('load_team_reffral_data', [UserController::class, 'load_team_reffral_data'])->name('load_team_reffral_data');

        Route::get('team/{id?}', [UserController::class, 'team'])->name('team');

        Route::get('dashboard/{id?}', [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('earning_calendar', [UserController::class, 'earning_calendar'])->name('earning_calendar');

        

        
        // Route::post('leaderboard_show_hide', [UserController::class, 'leaderboard_show_hide'])->name('leaderboard_show_hide');
        Route::post('send_password', [UserController::class, 'send_password'])->name('send_password');
        Route::post('block_unblock', [UserController::class, 'block_unblock'])->name('block_unblock');

        Route::get('excel_export', [UserController::class, 'excel_export'])->name('excel_export');
    });



    Route::group(['prefix'=>'order', 'as'=>'order.'], function(){
        Route::get('/', [OrderController::class, 'index'])->name('list');
        Route::get('load_data', [OrderController::class, 'load_data'])->name('load_data');
        Route::get('edit/{id?}', [OrderController::class, 'edit'])->name('edit');
        Route::get('view/{id?}', [OrderController::class, 'view'])->name('view');
        Route::post('update', [OrderController::class, 'update'])->name('update');
    });




    Route::group(['prefix'=>'setting', 'as'=>'setting.'], function(){
        
        Route::get('main/{id?}', [SettingController::class, 'main'])->name('main');
        Route::post('main-update', [SettingController::class, 'main_update'])->name('main-update');

        Route::get('gst/{id?}', [SettingController::class, 'gst'])->name('gst');
        Route::post('gst-update', [SettingController::class, 'gst_update'])->name('gst-update');

        Route::get('payoutpin/{id?}', [SettingController::class, 'payoutpin'])->name('payoutpin');
        Route::post('payoutpin-update', [SettingController::class, 'payoutpin_update'])->name('payoutpin-update');

        Route::get('emails/{id?}', [SettingController::class, 'emails'])->name('emails');
        Route::post('emails-update', [SettingController::class, 'emails_update'])->name('emails-update');

    });



    Route::group(['prefix'=>'support', 'as'=>'support.'], function(){
        Route::get('/', [SupportController::class, 'index'])->name('list');
        Route::get('load_data', [SupportController::class, 'load_data'])->name('load_data');
        Route::get('add', [SupportController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [SupportController::class, 'edit'])->name('edit');
        Route::get('view/{id?}', [SupportController::class, 'view'])->name('view');
        Route::post('update', [SupportController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [SupportController::class, 'delete'])->name('delete');
    });





    Route::group(['prefix'=>'payment-setting', 'as'=>'payment-setting.'], function(){
        Route::get('/', [PaymentSettingController::class, 'index'])->name('list');
        Route::get('load_data', [PaymentSettingController::class, 'load_data'])->name('load_data');
        Route::get('add', [PaymentSettingController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [PaymentSettingController::class, 'edit'])->name('edit');
        Route::post('update', [PaymentSettingController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [PaymentSettingController::class, 'delete'])->name('delete');
        Route::post('status-change/{id?}', [PaymentSettingController::class, 'status_change'])->name('status-change');
    });

    Route::group(['prefix'=>'invoice', 'as'=>'invoice.'], function(){
        Route::get('/', [InvoiceController::class, 'index'])->name('list');
        Route::get('load_data', [InvoiceController::class, 'load_data'])->name('load_data');
        Route::get('add', [InvoiceController::class, 'add'])->name('add');
        Route::get('edit/{id?}', [InvoiceController::class, 'edit'])->name('edit');
        Route::post('update', [InvoiceController::class, 'update'])->name('update');
        Route::post('delete/{id?}', [InvoiceController::class, 'delete'])->name('delete');
        Route::post('status-change/{id?}', [InvoiceController::class, 'status_change'])->name('status-change');
    });


});

// for admin end
