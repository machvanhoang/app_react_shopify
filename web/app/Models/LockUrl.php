<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LockUrl extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_jp',
        'descriptions',
        'lock_type_id',
        'lock_status_id',
        'lock_special_id',
        'store_id',
    ];
}
