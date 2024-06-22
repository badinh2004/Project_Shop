<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'image',
        'origin',
        'status',
        'slug',
        'description',
        'sortdescription',
        'category_id',
    ];
    public function category()
    {
        return $this->hasOne(category::class,'id','category_id');
    }

    public function categorys()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function image()
    {
        return $this->hasMany(ProductImages::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariants::class, 'ProductID','id');
    }
    // public function variant()
    // {
    //     return $this->belongsTo(ProductVariants::class, 'ProductID');
    // }
    
}
