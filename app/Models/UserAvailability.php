<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAvailability extends Model
{
//    use SoftDeletes;
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['form_date_formatted', 'to_date_formatted'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getFromDateFormattedAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->availability_from_date)->format('d-M-Y');
    }

    public function getToDateFormattedAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->availability_to_date)->format('d-M-Y');
    }
}
