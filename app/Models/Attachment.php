<?php

namespace App\Models;

use App\Helpers\SiteHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Attachment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    protected $appends = ['created_at_formatted', 'file_name_url'];

    public function getCreatedAtFormattedAttribute()
    {
        return SiteHelper::reformatReadableDateTime($this->created_at);
    }

    public function getFileNameUrlAttribute()
    {
        if ($this->context == 'influencer-profile-image') {
            $file_path = asset('uploads/users');
        }else {
            return asset('assets/img/user.png');
        }

//        return asset('storage/order-proof-signatures');
        return $file_path . '/' . $this->name;
    }
}
