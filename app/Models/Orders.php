<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'customer_id',
        'status_id',
        'note',
        'code',
        'total',
        'payment',
        'token'
    ];

    public function customers()
    {
        return $this->hasOne(Customers::class, 'id', 'customer_id');
    }
    public function orderdetails()
    {
        return $this->hasMany(OrderDetail::class,  "order_id", "id");
    }
    public function statu()
    {
        return $this->hasMany(Status::class,'status_id','id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
