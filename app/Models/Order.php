<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
         'user_id',
         'product_id',
         'qty',
         'total',
         'payment_method',
         'account_number',
         'account_id',
         'confirmation',
         'order_status'
    ];
}
