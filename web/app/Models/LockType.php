<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LockType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_jp',
    ];
}