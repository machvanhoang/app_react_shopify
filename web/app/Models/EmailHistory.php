<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'email_template_id',
        'job_id',
        'mail_status',
        'subject',
        'body_html'
    ];
}
