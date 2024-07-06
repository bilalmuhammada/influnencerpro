<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocialMediaProfile extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['icon_url'];

    public function getIconUrlAttribute()
    {
        $icon = '';

        if ($this->type == 'facebook') {
            $icon = asset('assets/icons/fb.PNG');
        } elseif ($this->type == 'twitter') {
            $icon = asset('assets/icons/twitter.svg');
        } elseif ($this->type == 'youtube') {
            $icon = asset('assets/icons/youtube.svg');
        } elseif ($this->type == 'instagram') {
            $icon = asset('assets/icons/inst.PNG');
        } elseif ($this->type == 'snapchat') {
            $icon = asset('assets/icons/snapchat.PNG');
        } elseif ($this->type == 'tiktok') {
            $icon = asset('assets/icons/tiktok.PNG');
        } elseif ($this->type == 'website') {
            $icon = asset('assets/icons/inter.PNG');
        } elseif ($this->type == 'pinterest') {
            $icon = asset('assets/icons/pinterest.PNG');
        }

        return $icon;
    }
}
