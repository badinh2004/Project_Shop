<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function orders()
    {
        return $this->hasMany(Orders::class, 'status_id','id');
    }
}
