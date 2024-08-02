<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponOrder extends Model
{
    use HasFactory;
    protected $table = 'coupon_order';
    protected $fillable=['coupon_id','order_id'];


    public function coupons()
    {
        return $this->belongsTo(Coupon::class, 'coupon_id', 'id');
    }

}
