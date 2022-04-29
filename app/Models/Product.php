<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'price', 'description', 'category', 'status', 'favorites', 'arrival'];

    public function pStatus(){
        return $this->hasOne(ProductStatus::class,'id', 'status');
    }

    public function category(){
        return $this->hasOne(Category::class,'id', 'category');
    }
}
