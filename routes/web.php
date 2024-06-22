<?php

use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\admin\ProductVariantsController;
use App\Http\Controllers\admin\VariantsController;
use App\Http\Controllers\Fe\CartController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/login', [HomeController::class, 'login'])->name('login');
route::post('/postLogin', [HomeController::class, 'postLogin'])->name('postLogin');

Route::get('/register', [HomeController::class, 'Register'])->name('Register');
route::post('/postRegister', [HomeController::class, 'postRegister'])->name('postRegister');

route::get('/logout', [HomeController::class, 'logout'])->name('logout');



route::get('/shop', [ProductShopController::class, 'ViewShop'])->name('shop');
route::get('/shop/{product}/{slug}', [ProductShopController::class, 'ViewProduct'])->name('productDetail');

Route::post('/filterByCategory/{id}', [HomeController::class, 'filterByCategory'])->name('filterByCategory');
Route::get('/filter-category/{category}', [ProductShopController::class, 'filterProductsByCategory'])->name('filterProductsByCategory');
Route::get('/filter-price', [ProductShopController::class, 'filterProductsByPrice'])->name('filterByPrice');

// Route để nhận query string từ form
Route::get('/search', [ProductShopController::class, 'handleSearchQuery'])->name('handleSearchQuery');
Route::get('/tim-kiem/{search}', [ProductShopController::class, 'search'])->name('search');

Route::get('/wishlist',[ProductShopController::class,'ViewWish'])->name('ViewWish');
Route::get('/addWishList/{product}',[ProductShopController::class,'addWishlist'])->name('addWishlist');
Route::get('/delete-wishlist/{id}', [ProductShopController::class, 'deleteWishList'])->name('deleteWishList');




Route::prefix('cart')->group(function(){
    Route::get('/',[CartController::class,'index'])->name('Cart');
    Route::get('/addToCart/{product}',[CartController::class,'addToCart'])->name('addToCart');
    Route::post('/updateCart',[CartController::class,'updateCart'])->name('updateCart');
});

