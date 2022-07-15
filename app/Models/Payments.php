<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = ['payment_id', 'order_id', 'amount', 'status'];

    public function order(){
        return $this->hasOne(Order::class, 'id', 'order_id');
    }
}
