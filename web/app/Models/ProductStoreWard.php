<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStoreWard extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'shopify_product_id',
        'ward_id',
        'store_id',
        'delivery_id'
    ];
}
