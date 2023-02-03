<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveriesDateTime extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'delivery_id',
        'day_of_week_id',
        'time_min_id',
        'time_max_id',
    ];
}
