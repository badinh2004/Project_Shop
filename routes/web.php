<?php

use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\admin\ProductVariantsController;
use App\Http\Controllers\admin\VariantsController;
use App\Http\Controllers\Fe\CartController;
use App\Http\Controllers\Fe\CommentController;
use App\Http\Controllers\Fe\FilterController;
use App\Http\Controllers\Fe\HomeController;
use App\Http\Controllers\Fe\ProductShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [Admincontroller::class, 'admin'])->name('admin');

    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'variant' => ProductVariantsController::class
    ]);
    Route::get('/products/{product}/variants/create', [ProductController::class, 'createVariant'])->name('variants.create');
    Route::post('/products/{product}/variants', [ProductController::class, 'storeVariant'])->name('variants.store');

    // Route::get('/variant',[VariantsController::class,'index'])->name('variants.index');
    // Route::get('/variant/show/{id}', [VariantsController::class, 'show'])->name('variants.show');
    // Route::get('/variant/edit/{id}',[VariantsController::class,'edit'])->name('variants.edit');
});
Route::prefix('admin')->group(function () {
    Route::get('/login', [Admincontroller::class, 'loginadmin'])->name('loginadmin');
    Route::post('/login', [Admincontroller::class, 'postLogin']);
    Route::get('/logout', [Admincontroller::class, 'logoutadmin'])->name('logoutadmin');
});

Route::get('/', [HomeController::class, 'index'])->name('index');//home

//login-logout-register
Route::prefix('account')->group(function(){
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::post('/postLogin', [HomeController::class, 'postLogin'])->name('postLogin');
    Route::get('/register', [HomeController::class, 'Register'])->name('Register');
    Route::post('/postRegister', [HomeController::class, 'postRegister'])->name('postRegister');
    Route::get('/forgotpassword', [HomeController::class, 'forgotpassword'])->name('forgotpassword');
    Route::post('/postforgotpassword', [HomeController::class, 'postForgotpassword'])->name('postForgotpassword');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
    Route::get('/ResetPass',[HomeController::class,'ResetPass'])->name('ResetPass');
    Route::post('/postResetPass',[HomeController::class,'postResetPass'])->name('postResetPass');

    Route::get('/auth/google',[HomeController::class,'redirectToGoogle'])->name('google');
    Route::get('/auth/google/callback',[HomeController::class,'handleGoogleCallback']);
});
//end route login-logout-register

// view Products-productdetail
Route::get('/shop', [ProductShopController::class, 'ViewShop'])->name('shop');
Route::get('/shop/{product}/{slug}', [ProductShopController::class, 'ViewProduct'])->name('productDetail');
//end Products-productdetail

// Filter
Route::post('/filterByCategory/{id}', [FilterController::class, 'filterByCategory'])->name('filterByCategory');
Route::get('/shop/{category}', [FilterController::class, 'filterProductsByCategory'])->name('filterProductsByCategory');
Route::get('/filter-price', [FilterController::class, 'filterProductsByPrice'])->name('filterByPrice');
Route::post('shop/sortproducts',[ProductShopController::class,'sortProducts'])->name('sortProducts');
// end filter

// Search
Route::get('/search', [ProductShopController::class, 'handleSearchQuery'])->name('handleSearchQuery');
Route::get('/tim-kiem/{search}', [ProductShopController::class, 'search'])->name('search');
// end Search

Route::get('/wishlist',[ProductShopController::class,'ViewWish'])->name('ViewWish');
Route::get('/addWishList/{product}',[ProductShopController::class,'addWishlist'])->name('addWishlist');
Route::get('/delete-wishlist/{id}', [ProductShopController::class, 'deleteWishList'])->name('deleteWishList');

Route::post('/comment/{id}',[CommentController::class,'index'])->name('comment');



Route::prefix('cart')->group(function(){
    Route::get('/',[CartController::class,'index'])->name('Cart');
    Route::get('/addToCart/{product}',[CartController::class,'addToCart'])->name('addToCart');
    Route::post('/updateCart',[CartController::class,'updateCart'])->name('updateCart');
});




