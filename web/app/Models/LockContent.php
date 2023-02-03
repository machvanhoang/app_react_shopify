<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LockContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner_id',
        'lock_url_id',
    ];
}
