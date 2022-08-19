<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'status',
        'image_id',
    ];

    public function image(){
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

    public function allActive(){
        return $this->where('status', 1)->get();
    }
}
