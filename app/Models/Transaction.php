<?php

namespace App\Models;

use App\Helpers\SiteHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $appends = ['date_formatted', 'date_to_month'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDateFormattedAttribute()
    {
        if ($this->date) {
            return SiteHelper::reformatReadableDate($this->date);
        } else {
            return '';
        }

    }

    public function getDateToMonthAttribute()
    {
        return Carbon::parse($this->date)->format('Y-m');
    }
}
