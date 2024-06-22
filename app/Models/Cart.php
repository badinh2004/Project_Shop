<?php

namespace App\Models;

use App\Http\Controllers\admin\VariantsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $appends = ['ToTalPrice'];
    protected $table = 'cart';
    protected $fillable = ['customer_id', 'ProductID', 'variant_id', 'quantity'];

    public function products()
    {
        return $this->hasOne(Product::class, 'id', 'ProductID');
    }
    public function variants()
    {
        return $this->hasOne(ProductVariants::class, 'id', 'variant_id');
    }

    public function getToTalPriceAttribute()
    {
        $totalPrice = 0;
        $carts = Cart::where('customer_id', auth('customers')->id())->get();
        foreach ($carts as $value) {
            $totalPrice += $value->variants->sale_price *  $value->quantity;
        }
        return $totalPrice;
    }
}
