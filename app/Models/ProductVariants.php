<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    use HasFactory;

    protected $table='productvarians';
    protected $fillable=['price','sale_price','quatity','size','ProductID'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID','id');
    }
}
