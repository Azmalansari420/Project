<?php

use Illuminate\Support\Facades\Route;

date_default_timezone_set('Asia/Kolkata');
define("user_view_folder", 'user');
define("sort_name", 'SV');
define("brevo_api", '');





use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\WebController;




Route::post('category', [WebController::class, 'category'])->name('category');
Route::post('sub-category', [WebController::class, 'sub_category'])->name('sub-category');
Route::post('sub-sub-category', [WebController::class, 'sub_sub_category'])->name('sub-sub-category');
Route::post('sub-sub-sub-category', [WebController::class, 'sub_sub_sub_category'])->name('sub-sub-sub-category');




Route::get('/{page?}', [HomeController::class, 'all'])->name('home');
Route::get('package/{slug}', [WebPackageController::class, 'detail'])->name('package-detail');

