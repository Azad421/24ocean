<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['oId', 'user_id','status_id', 'discounted_price', 'price_amount'];

    public function status(){
        return $this->hasOne(OrderStatus::class, 'id', 'status_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function details(){
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }
}
