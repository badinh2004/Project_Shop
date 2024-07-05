<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $table = 'blogs';

    protected $fillable = ['title', 'image', 'slug', 'description', 'sortdescription', 'created_at', 'updated_at', 'category_id', 'user_id'];

    public function category()
    {
        return $this->hasOne(category::class,'id','category_id');
    }

    public function categorys()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments()
    {
        return $this->hasMany(CommentsBlog::class, 'blog_id','id');
    }
}
