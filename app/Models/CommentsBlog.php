<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsBlog extends Model
{
    use HasFactory;
    protected $table  = 'commentsblog';
    protected $fillable = ['customer_id','blog_id','reply_id','content','created_at'];

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id');
    }

    public function blog()
    {
        return $this->belongsTo(Blogs::class, 'blog_id','id');
    }
}
