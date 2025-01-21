<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'country_id',
        'city_id',
        'iam',
        'reason',
        'subject',
        'message',
        'attachments',
    ];

    protected $casts = [
        'attachments' => 'array', // Cast attachments to an array
    ];
}
