<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderdetail';
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
        'size'
    ];

    public function product(){
        return $this->hasOne(Product::class,"id","product_id");
    }
}
