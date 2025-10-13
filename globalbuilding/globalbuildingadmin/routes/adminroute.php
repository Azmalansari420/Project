<?php

use App\Http\Controllers\admin_con\AdminAuthController;
use App\Http\Controllers\admin_con\Profile_update;
use App\Http\Controllers\admin_con\Site_setting;
use App\Http\Controllers\admin_con\Content;
use App\Http\Controllers\admin_con\Slider;
use App\Http\Controllers\admin_con\Contact;
use App\Http\Controllers\admin_con\Testimonials;
use App\Http\Controllers\admin_con\Multipleimage;
use App\Http\Controllers\admin_con\Blog;
use App\Http\Controllers\admin_con\Country;
use App\Http\Controllers\admin_con\State;
use App\Http\Controllers\admin_con\City;
use App\Http\Controllers\admin_con\Categories;
use App\Http\Controllers\admin_con\Product;
use App\Http\Controllers\admin_con\Project;
use Illuminate\Support\Facades\Route;

// Admin Authentication Routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminAuthController::class, 'index']);
    Route::post('/', [AdminAuthController::class, 'adminlogin'])->name('admin.adminlogin');
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin/dashboard');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin/logout');
});

/*-----------------------------profile update-------------------------------*/
Route::prefix('admin/profile')->group(function () {
    Route::get('/form', [Profile_update::class, 'loadForm'])->name('admin/profile_update');
    Route::post('/form', [Profile_update::class, 'submitForm'])->name('admin/profile_form');
});

/*-------------------------site settings---------------------------*/
Route::prefix('admin/site_setting')->group(function () {
    Route::get('/edit/{id}', [Site_setting::class, 'loadForm'])->name('admin/site_setting/edit');
    Route::post('/edit/{id}', [Site_setting::class, 'submitForm'])->name('admin/site_setting/update');
});

/*-------------------------site settings---------------------------*/
Route::prefix('admin/content')->group(function () {
    Route::get('/edit/{id}', [Content::class, 'loadForm'])->name('admin/content/edit');
    Route::post('/edit/{id}', [Content::class, 'submitForm'])->name('admin/content/update');
});


/*------------------------slider----------------------*/
Route::prefix('admin/slider')->group(function () {
    Route::get('/', [Slider::class, 'listing'])->name('admin/slider/list');
    Route::post('/table', [Slider::class, 'getTableData'])->name('admin/slider/table');
    /*------add------*/
    Route::get('/add', [Slider::class, 'add_page_url'])->name('admin/slider/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Slider::class, 'edit_page_url'])->name('admin/slider/edit');
    /*----view----*/
    Route::get('/view/{id}', [Slider::class, 'view_page_url'])->name('admin/slider/view');
    /*--single update -delete--*/
    Route::post('/store', [Slider::class, 'storeOrUpdate'])->name('admin_con/slider/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Slider::class, 'updateStatus'])->name('admin/slider/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Slider::class, 'delete_data'])->name('admin_con/slider/delete_data');
    Route::delete('/multiple_delete_data', [Slider::class, 'multiple_delete_data'])->name('admin_con/slider/multiple_delete_data');
});




/*------------------------contact----------------------*/
Route::prefix('admin/contact')->group(function () {
    Route::get('/', [Contact::class, 'listing'])->name('admin/contact/list');
    Route::post('/table', [Contact::class, 'getTableData'])->name('admin/contact/table');
    /*------View------*/
    Route::get('/view/{id}', [Contact::class, 'view_page_url'])->name('admin/contact/view');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Contact::class, 'delete_data'])->name('admin_con/contact/delete_data');
    Route::delete('/multiple_delete_data', [Contact::class, 'multiple_delete_data'])->name('admin_con/contact/multiple_delete_data');
});



/*------------------------testimonials----------------------*/
Route::prefix('admin/testimonials')->group(function () {
    Route::get('/', [Testimonials::class, 'listing'])->name('admin/testimonials/list');
    Route::post('/table', [Testimonials::class, 'getTableData'])->name('admin/testimonials/table');
    /*------add------*/
    Route::get('/add', [Testimonials::class, 'add_page_url'])->name('admin/testimonials/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Testimonials::class, 'edit_page_url'])->name('admin/testimonials/edit');
    /*----view----*/
    Route::get('/view/{id}', [Testimonials::class, 'view_page_url'])->name('admin/testimonials/view');
    /*--single update -delete--*/
    Route::post('/store', [Testimonials::class, 'storeOrUpdate'])->name('admin_con/testimonials/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Testimonials::class, 'updateStatus'])->name('admin/testimonials/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Testimonials::class, 'delete_data'])->name('admin_con/testimonials/delete_data');
    Route::delete('/multiple_delete_data', [Testimonials::class, 'multiple_delete_data'])->name('admin_con/testimonials/multiple_delete_data');
});



/*------------------------multipleimage----------------------*/

Route::prefix('admin/multipleimage')->group(function () {
    Route::get('/', [Multipleimage::class, 'listing'])->name('admin/multipleimage/list');
    Route::post('/table', [Multipleimage::class, 'getTableData'])->name('admin/multipleimage/table');
    /*------add------*/
    Route::get('/add', [Multipleimage::class, 'add_page_url'])->name('admin/multipleimage/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Multipleimage::class, 'edit_page_url'])->name('admin/multipleimage/edit');
    /*----view----*/
    Route::get('/view/{id}', [Multipleimage::class, 'view_page_url'])->name('admin/multipleimage/view');
    /*--single update -delete--*/
    Route::post('/store', [Multipleimage::class, 'storeOrUpdate'])->name('admin_con/multipleimage/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Multipleimage::class, 'updateStatus'])->name('admin/multipleimage/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Multipleimage::class, 'delete_data'])->name('admin_con/multipleimage/delete_data');
    Route::delete('/multiple_delete_data', [Multipleimage::class, 'multiple_delete_data'])->name('admin_con/multipleimage/multiple_delete_data');
    /*addmore single*/
    Route::post('/load_more_singleimage', [Multipleimage::class, 'load_more_singleimage'])->name('admin/multipleimage/load_more_singleimage');
    /*add morre multiple*/
    Route::post('/load-more-multiple-image', [Multipleimage::class, 'load_more_multiimage'])->name('admin/multipleimage/load_more_multiimage');

});


/*------------------------blog----------------------*/
Route::prefix('admin/blog')->group(function () {
    Route::get('/', [Blog::class, 'listing'])->name('admin/blog/list');
    Route::post('/table', [Blog::class, 'getTableData'])->name('admin/blog/table');
    /*------add------*/
    Route::get('/add', [Blog::class, 'add_page_url'])->name('admin/blog/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Blog::class, 'edit_page_url'])->name('admin/blog/edit');
    /*----view----*/
    Route::get('/view/{id}', [Blog::class, 'view_page_url'])->name('admin/blog/view');
    /*--single update -delete--*/
    Route::post('/store', [Blog::class, 'storeOrUpdate'])->name('admin_con/blog/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Blog::class, 'updateStatus'])->name('admin/blog/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Blog::class, 'delete_data'])->name('admin_con/blog/delete_data');
    Route::delete('/multiple_delete_data', [Blog::class, 'multiple_delete_data'])->name('admin_con/blog/multiple_delete_data');
});


/*------------------------country----------------------*/
Route::prefix('admin/country')->group(function () {
    Route::get('/', [Country::class, 'listing'])->name('admin/country/list');
    Route::post('/table', [Country::class, 'getTableData'])->name('admin/country/table');
    /*------add------*/
    Route::get('/add', [Country::class, 'add_page_url'])->name('admin/country/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Country::class, 'edit_page_url'])->name('admin/country/edit');
    /*----view----*/
    Route::get('/view/{id}', [Country::class, 'view_page_url'])->name('admin/country/view');
    /*--single update -delete--*/
    Route::post('/store', [Country::class, 'storeOrUpdate'])->name('admin_con/country/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Country::class, 'updateStatus'])->name('admin/country/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Country::class, 'delete_data'])->name('admin_con/country/delete_data');
    Route::delete('/multiple_delete_data', [Country::class, 'multiple_delete_data'])->name('admin_con/country/multiple_delete_data');
});


/*------------------------state----------------------*/
Route::prefix('admin/state')->group(function () {
    Route::get('/', [State::class, 'listing'])->name('admin/state/list');
    Route::post('/table', [State::class, 'getTableData'])->name('admin/state/table');
    /*------add------*/
    Route::get('/add', [State::class, 'add_page_url'])->name('admin/state/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [State::class, 'edit_page_url'])->name('admin/state/edit');
    /*----view----*/
    Route::get('/view/{id}', [State::class, 'view_page_url'])->name('admin/state/view');
    /*--single update -delete--*/
    Route::post('/store', [State::class, 'storeOrUpdate'])->name('admin_con/state/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [State::class, 'updateStatus'])->name('admin/state/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [State::class, 'delete_data'])->name('admin_con/state/delete_data');
    Route::delete('/multiple_delete_data', [State::class, 'multiple_delete_data'])->name('admin_con/state/multiple_delete_data');
});


/*------------------------city----------------------*/
Route::prefix('admin/city')->group(function () {
    Route::get('/', [City::class, 'listing'])->name('admin/city/list');
    Route::get('/', [City::class, 'listing'])->name('admin/city/list');
    Route::post('/table', [City::class, 'getTableData'])->name('admin/city/table');
    Route::post('/table', [City::class, 'getTableData'])->name('admin/city/table');
    /*------add------*/
    Route::get('/add', [City::class, 'add_page_url'])->name('admin/city/add');
    Route::get('/add', [City::class, 'add_page_url'])->name('admin/city/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [City::class, 'edit_page_url'])->name('admin/city/edit');
    Route::get('/edit/{id}', [City::class, 'edit_page_url'])->name('admin/city/edit');
    /*----view----*/
    Route::get('/view/{id}', [City::class, 'view_page_url'])->name('admin/city/view');
    Route::get('/view/{id}', [City::class, 'view_page_url'])->name('admin/city/view');
    /*--single update -delete--*/
    Route::post('/store', [City::class, 'storeOrUpdate'])->name('admin_con/city/storeOrUpdate');
    Route::post('/store', [City::class, 'storeOrUpdate'])->name('admin_con/city/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [City::class, 'updateStatus'])->name('admin/city/update_status');
    Route::post('/update_status', [City::class, 'updateStatus'])->name('admin/city/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [City::class, 'delete_data'])->name('admin_con/city/delete_data');
    Route::delete('/delete_data/{id}', [City::class, 'delete_data'])->name('admin_con/city/delete_data');
    Route::delete('/multiple_delete_data', [City::class, 'multiple_delete_data'])->name('admin_con/city/multiple_delete_data');
    Route::delete('/multiple_delete_data', [City::class, 'multiple_delete_data'])->name('admin_con/city/multiple_delete_data');

    Route::post('/getstatename', [City::class, 'getstatename'])->name('admin_con/city/getstatename');
});


/*------------------------categories----------------------*/
Route::prefix('admin/categories')->group(function () {
    Route::get('/', [Categories::class, 'listing'])->name('admin/categories/list');
    Route::post('/table', [Categories::class, 'getTableData'])->name('admin/categories/table');
    /*------add------*/
    Route::get('/add', [Categories::class, 'add_page_url'])->name('admin/categories/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Categories::class, 'edit_page_url'])->name('admin/categories/edit');
    /*----view----*/
    Route::get('/view/{id}', [Categories::class, 'view_page_url'])->name('admin/categories/view');
    /*--single update -delete--*/
    Route::post('/store', [Categories::class, 'storeOrUpdate'])->name('admin_con/categories/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Categories::class, 'updateStatus'])->name('admin/categories/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Categories::class, 'delete_data'])->name('admin_con/categories/delete_data');
    Route::delete('/multiple_delete_data', [Categories::class, 'multiple_delete_data'])->name('admin_con/categories/multiple_delete_data');
});

/*------------------------product----------------------*/
Route::prefix('admin/product')->group(function () {
    Route::get('/', [Product::class, 'listing'])->name('admin/product/list');
    Route::post('/table', [Product::class, 'getTableData'])->name('admin/product/table');
    /*------add------*/
    Route::get('/add', [Product::class, 'add_page_url'])->name('admin/product/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Product::class, 'edit_page_url'])->name('admin/product/edit');
    /*----view----*/
    Route::get('/view/{id}', [Product::class, 'view_page_url'])->name('admin/product/view');
    /*--single update -delete--*/
    Route::post('/store', [Product::class, 'storeOrUpdate'])->name('admin_con/product/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Product::class, 'updateStatus'])->name('admin/product/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Product::class, 'delete_data'])->name('admin_con/product/delete_data');
    Route::delete('/multiple_delete_data', [Product::class, 'multiple_delete_data'])->name('admin_con/product/multiple_delete_data');
});
/*------------------------project----------------------*/
Route::prefix('admin/project')->group(function () {
    Route::get('/', [Project::class, 'listing'])->name('admin/project/list');
    Route::post('/table', [Project::class, 'getTableData'])->name('admin/project/table');
    /*------add------*/
    Route::get('/add', [Project::class, 'add_page_url'])->name('admin/project/add');
    /*------upadte------*/
    Route::get('/edit/{id}', [Project::class, 'edit_page_url'])->name('admin/project/edit');
    /*----view----*/
    Route::get('/view/{id}', [Project::class, 'view_page_url'])->name('admin/project/view');
    /*--single update -delete--*/
    Route::post('/store', [Project::class, 'storeOrUpdate'])->name('admin_con/project/storeOrUpdate');
    /*------status------*/
    Route::post('/update_status', [Project::class, 'updateStatus'])->name('admin/project/update_status');
    /*------delete------*/
    Route::delete('/delete_data/{id}', [Project::class, 'delete_data'])->name('admin_con/project/delete_data');
    Route::delete('/multiple_delete_data', [Project::class, 'multiple_delete_data'])->name('admin_con/project/multiple_delete_data');
});