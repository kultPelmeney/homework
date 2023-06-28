<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index');


Route::prefix('shop')->group(function () {
    Route::get('', 'App\Http\Controllers\ShopController@index');
    Route::get('product/{id}', 'App\Http\Controllers\ShopController@show');
    Route::post('product/{id}', 'App\Http\Controllers\ShopController@addAuction');
});

Route::prefix('cart')->group(function () {
    Route::get('', 'App\Http\Controllers\CartController@index');
    Route::get('/{id}', 'App\Http\Controllers\CartController@destroy');
});

Route::prefix('client')->group(function() {
    Route::resource('seller/product', 'App\Http\Controllers\SellerController');
    Route::get('seller/product/{id}/auction', 'App\Http\Controllers\SellerController@show_Auction');
    Route::post('seller/product/{id}/auction/{auction_id}', 'App\Http\Controllers\SellerController@updateStatus');
    Route::get('user/profile/{user_id}', 'App\Http\Controllers\SellerController@show_profile');
    Route::resource('buyer/product', 'App\Http\Controllers\BuyerController');
    Route::resource('seller/product/{product_id}/image', 'App\Http\Controllers\ProductImageController');
    Route::resource('seller/product/{product_id}/detail', 'App\Http\Controllers\ProductDetailController');

});

Route::prefix('blog')->group(function () {
    Route::get('/', 'App\Http\Controllers\BlogController@index');
    Route::get('/{id}/blog_detail', 'App\Http\Controllers\BlogController@show');
    Route::post('/{id}/blog_detail', 'App\Http\Controllers\BlogController@addCmt');
});

Route::get('about_us', 'App\Http\Controllers\HomeController@about_us');
Route::get('help_center', 'App\Http\Controllers\HomeController@help_center');


Route::prefix('checkout')->group(function () {
    Route::get('', 'App\Http\Controllers\CheckoutController@index');
    Route::post('', 'App\Http\Controllers\CheckoutController@addOrder');
    Route::get('complete', 'App\Http\Controllers\CheckoutController@complete');
});

Route::prefix('profile')->group(function () {
    Route::get('', 'App\Http\Controllers\ProfileController@index');
    Route::get('edit', 'App\Http\Controllers\ProfileController@showEdit');
    Route::put('edit', 'App\Http\Controllers\ProfileController@update');
});

Route::prefix('account')->group(function () {
    Route::get('login', 'App\Http\Controllers\AccountController@login');
    Route::post('login', 'App\Http\Controllers\AccountController@checkLogin');
    Route::get('logout', 'App\Http\Controllers\AccountController@logout');
    Route::get('register', 'App\Http\Controllers\AccountController@register');
    Route::post('register', 'App\Http\Controllers\AccountController@postRegister');
});





// Dashboard (Admin)
Route::prefix('admin')->middleware('CheckAdminLogin')->group(function () {
    Route::redirect('', 'admin/user');

    Route::get('home', 'App\Http\Controllers\Admin\HomeController@index');

    Route::resource('user', 'App\Http\Controllers\Admin\UserController');

    Route::resource('product', 'App\Http\Controllers\Admin\ProductController');
    Route::get('product/{id}/auctioneers', 'App\Http\Controllers\Admin\ProductController@show_auctioneers');
    Route::get('product/auctioneers/{user_id}', 'App\Http\Controllers\Admin\ProductController@show_user');
    Route::resource('product/{product_id}/image', 'App\Http\Controllers\Admin\ProductImageController');
    Route::resource('product/{product_id}/detail', 'App\Http\Controllers\Admin\ProductDetailController');

    Route::resource('category', 'App\Http\Controllers\Admin\ProductCategoryController');

    Route::prefix('order')->group(function() {
        Route::get('/', 'App\Http\Controllers\Admin\OrderController@index');
        Route::get('/{id}', 'App\Http\Controllers\Admin\OrderController@show');
    });

    Route::prefix('login')->group(function () {
        Route::get('', 'App\Http\Controllers\Admin\HomeController@getLogin')->withoutMiddleware('CheckAdminLogin');
        Route::post('', 'App\Http\Controllers\Admin\HomeController@postLogin')->withoutMiddleware('CheckAdminLogin');
    });

    Route::get('logout', 'App\Http\Controllers\Admin\HomeController@logout');

});
