<?php

namespace App\Providers;

use App\Models\Cart;
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

            // dd($carts);
            $view->with(compact('carts','wish'));
        });
    }
}
