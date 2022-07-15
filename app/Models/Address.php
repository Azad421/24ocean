<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'fName', 'lName', 'contact_no', 'type', 'country', 'state', 'zip_code', 'address'];
}
