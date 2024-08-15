<?php

namespace App\Models;

use App\Helpers\SiteHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = [
        'message_position',
        'sended_at_formatted',
        'message_recieved_time_diff'
    ];

    public function getMessagePositionAttribute()
    {
        $this_user_id = SiteHelper::getLoginUserId();
//        $this_user_id = 1;//will uncomment if impliment in project session or auth

        if ($this->sender_id == $this_user_id) {
            return "right";
        } else {
            return 'left';
        }
    }

    public function getSendedAtFormattedAttribute()
    {
        return Carbon::parse($this->sended_at)->format('h:i A');
    }

    public function getMessageRecievedTimeDiffAttribute()
    {

        if ($this->sended_at) {
            return Carbon::parse($this->sended_at)->diffForHumans();
        } else {
            return Carbon::parse($this->created_at)->diffForHumans();
        }
    }

    public function receiver(){
        return $this->belongsTo(User::class, 'receiver_id', 'id');
    }
    public function sender(){
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }
}
