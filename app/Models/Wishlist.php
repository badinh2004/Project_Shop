<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlist';
    protected $fillable = ['customer_id', 'product_id'];

    public function products()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public function variants()
    {
        return $this->hasOne(ProductVariants::class, 'id', 'variant_id');
    }
}
