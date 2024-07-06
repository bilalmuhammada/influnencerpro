<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSpokenLanguage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function spoken_language()
    {
        return $this->belongsTo(SpokenLanguage::class);
    }
}
