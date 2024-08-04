<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\category;
use App\Models\Customers;
use App\Models\Wishlist;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function($view){
            $carts = Cart::where('customer_id',auth('customers')->id())->get();
            $wish = Wishlist::where('customer_id',auth('customers')->id())->get();
            $categorys
            = category::query()->get();
            
            // dd($user);
            $view->with(compact('carts','wish','categorys'));
        });
    }
}
