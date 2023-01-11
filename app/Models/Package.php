<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'price', 'lines', 'minutes', 'period', 'status', 'stripe_product_id', 'stripe_price_id'
    ];
}
