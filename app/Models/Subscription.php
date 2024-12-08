<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $appends = ['month'];

    public function getMonthAttribute(){
        return Carbon::parse($this->created_at)->format('Y-m');
    }
}
