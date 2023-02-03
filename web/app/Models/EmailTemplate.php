<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_id',
        'name_jp',
        'file_name',
        'subject',
        'type'
    ];
}
