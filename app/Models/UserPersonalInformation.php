<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonalInformation extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['is_collaboration_formatted', 'willing_to_travel_formatted'];

    public function spoken_language()
    {
        return $this->belongsTo(SpokenLanguage::class);
    }

    public function ethnicity()
    {
        return $this->belongsTo(Ethnicity::class);
    }

    public function getIsCollaborationFormattedAttribute()
    {
        if ($this->is_collaboration == 1) {
            return 'Yes';
        } elseif ($this->is_collaboration == 0) {
            return 'No';
        }

        return '';
    }

    public function getWillingToTravelFormattedAttribute()
    {
        if ($this->willing_to_travel == 1) {
            return 'Yes';
        } elseif ($this->willing_to_travel == 0) {
            return 'No';
        }

        return '';
    }
}
