<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\admin\ProductVariantsController;
use App\Http\Controllers\admin\VariantsController;
use App\Http\Controllers\Admincontroller;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/login', [HomeController::class, 'login'])->name('login');
route::post('/postLogin', [HomeController::class, 'postLogin'])->name('postLogin');

Route::get('/register', [HomeController::class, 'Register'])->name('Register');
route::post('/postRegister', [HomeController::class, 'postRegister'])->name('postRegister');

route::get('/logout', [HomeController::class, 'logout'])->name('logout');


// Route::get('/admin',[HomeController::class,'admin'])->name('admin');
// Route::get('/admin/addproduct',[HomeController::class,'page_addProduct'])->name('page-add-product');
// Route::get('/admin/category',[HomeController::class,'table_category'])->name('table-category');
// Route::get('/admin/category/add',[HomeController::class,'page_addCategory'])->name('page-add-category');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'admin'])->name('admin');

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
