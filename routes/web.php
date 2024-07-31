<?php

use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\admin\ProductVariantsController;
use App\Http\Controllers\admin\VariantsController;
use App\Http\Controllers\Fe\BlogsFoodController;
use App\Http\Controllers\Fe\CartController;
use App\Http\Controllers\Fe\CheckoutController;
use App\Http\Controllers\Fe\CommentController;
use App\Http\Controllers\Fe\FilterController;
use App\Http\Controllers\Fe\HomeController;
use App\Http\Controllers\Fe\Payment\VNPayController;
use App\Http\Controllers\Fe\ProductShopController;
use App\Http\Controllers\Fe\UserController;
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
// ADMIN
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [Admincontroller::class, 'admin'])->name('admin');

    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'variant' => ProductVariantsController::class,
        'blogs' => BlogController::class,
        'orders' => OrderController::class
    ]);
    Route::get('/products/{product}/variants/create', [ProductController::class, 'createVariant'])->name('variants.create');
    Route::post('/products/{product}/variants', [ProductController::class, 'storeVariant'])->name('variants.store');
});
Route::prefix('admin')->group(function () {
    Route::get('/login', [Admincontroller::class, 'loginadmin'])->name('loginadmin');
    Route::post('/login', [Admincontroller::class, 'postLogin']);
    Route::get('/logout', [Admincontroller::class, 'logoutadmin'])->name('logoutadmin');
});

// end ADMIN 

// User web
Route::get('/', [HomeController::class, 'index'])->name('index');//home

//login-logout-register
Route::prefix('account')->group(function(){
    //login
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::post('/postLogin', [HomeController::class, 'postLogin'])->name('postLogin');
    //register
    Route::get('/register', [HomeController::class, 'Register'])->name('Register');
    Route::post('/postRegister', [HomeController::class, 'postRegister'])->name('postRegister');
    //logout
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
    //user
    Route::get('/information',[UserController::class,'information'])->name('information');
    Route::get('/EditInformation/{id}',[UserController::class,'EditInformation'])->name('EditInformation');
    Route::put('/updateInformation/{user}',[UserController::class,'updateInformation'])->name('updateInformation');
    Route::get('/odershistory',[UserController::class,'ViewOrdersHistory'])->name('ViewOrdersHistory');
    // reset password
    Route::get('/forgotpassword', [HomeController::class, 'forgotpassword'])->name('forgotpassword');
    Route::post('/postforgotpassword', [HomeController::class, 'postForgotpassword'])->name('postForgotpassword');
    Route::get('/ResetPass',[HomeController::class,'ResetPass'])->name('ResetPass');
    Route::post('/postResetPass',[HomeController::class,'postResetPass'])->name('postResetPass');
    // login google
    Route::get('/auth/google',[HomeController::class,'redirectToGoogle'])->name('google');
    Route::get('/auth/google/callback',[HomeController::class,'handleGoogleCallback']);
});
//end route login-logout-register


// view Products-productdetail
Route::get('/shop', [ProductShopController::class, 'ViewShop'])->name('shop');
Route::get('/shop/{product}/{slug}', [ProductShopController::class, 'ViewProduct'])->name('productDetail');
//end Products-productdetail

//view blogs - blog-detail
Route::get('/blogs',[BlogsFoodController::class,'ViewBlogs'])->name('blogs');
Route::get('/blogs/{category}/{slug}',[BlogsFoodController::class,'BlogDetail'])->name('blogDetail');
// end blogs

// Filter
Route::post('/filterByCategory/{id}', [FilterController::class, 'filterByCategory'])->name('filterByCategory');
Route::get('/shop/{category}', [FilterController::class, 'filterProductsByCategory'])->name('filterProductsByCategory');
Route::get('/filter-price', [FilterController::class, 'filterProductsByPrice'])->name('filterByPrice');
Route::post('shop/sortproducts',[ProductShopController::class,'sortProducts'])->name('sortProducts');
Route::get('blog/{category}',[FilterController::class,'filterBlogsByCategory'])->name('filterBlogsByCategory');
// end filter

// Search
Route::get('/search', [ProductShopController::class, 'handleSearchQuery'])->name('handleSearchQuery');
Route::get('/tim-kiem/{search}', [ProductShopController::class, 'search'])->name('search');
// end Search

// wish list
Route::get('/wishlist',[ProductShopController::class,'ViewWish'])->name('ViewWish');
Route::get('/addWishList/{product}',[ProductShopController::class,'addWishlist'])->name('addWishlist');
Route::get('/delete-wishlist/{id}', [ProductShopController::class, 'deleteWishList'])->name('deleteWishList');
// end wishlist

Route::get('/AboutUs',[ProductShopController::class,'about'])->name('about');
Route::get('/portfolio',[ProductShopController::class,'portfolio'])->name('portfolio');


//comment
Route::post('/commentproduct/{id}',[CommentController::class,'product'])->name('commentproduct');
Route::post('/commentblog/{id}',[CommentController::class,'blog'])->name('commentblog');
// end conment

// cart
Route::prefix('cart')->group(function(){
    Route::get('/',[CartController::class,'index'])->name('Cart');
    Route::get('/addToCart/{product}',[CartController::class,'addToCart'])->name('addToCart');
    Route::post('/updateCart',[CartController::class,'updateCart'])->name('updateCart');
    Route::delete('/deleteOne/{id}',[CartController::class,'deleteOne'])->name('deleteOne');
    Route::delete('/deleteAll',[CartController::class,'deleteAll'])->name('deleteAll');

});
// end cart
Route::prefix('checkout')->group(function(){
    Route::get('/',[CheckoutController::class,'index'])->name('Checkout');
    Route::post('/addOder',[CheckoutController::class,'addOder'])->name('addOder');
    Route::get('/checkpayment',[CheckoutController::class,'checkpayment'])->name('checkpayment');
    Route::get('/checkdetail/{id}',[CheckoutController::class,'checkdetail'])->name('checkdetail');
    Route::get('/vnpay/return', [VNPayController::class, 'return'])->name('vnpay.return');
    // Route::post('/updateCart',[CartController::class,'updateCart'])->name('updateCart');
});



// test realtime chat
Route::get('/testlist',[UserController::class,'chattest'])->name('chattest');



