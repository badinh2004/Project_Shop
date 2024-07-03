<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table  = 'comments';
    protected $fillable = ['customer_id','product_id','reply_id','content','rating','created_at'];

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id');
    }

}
