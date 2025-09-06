<?php

namespace App\Models;

use App\Helpers\SiteHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    protected $appends = [
        'other_user',
        'latest_message',
        'unread_count',
        'latest_message_recieved_time_diff',
        'unread_ids',
        'latest_message_sender_id'
    ];

    public function messages()
    {
        return $this->hasMany(Message::class, 'chat_id', 'id')->orderBy('sended_at', 'ASC');;
    }

    public function getOtherUserAttribute()
    {
        $ids = [$this->first_user_id, $this->second_user_id];

        $current_user_id = SiteHelper::getLoginUserId();
//    dd( $ids );
        return User::whereIn('id', $ids)
            ->where('id', '!=', $current_user_id)
            ->first();
    }

    public function getLatestMessageAttribute()
    {
        if ($this->status == 'requested') {
            return "Sent you a message request!";
        } else {
            return Message::where('chat_id', $this->id)->latest()->value('message');

        }
    }

    public function getLatestMessageSenderIdAttribute()
    {
        if ($this->status == 'requested') {
            return 0;
        } else {
            return Message::where('chat_id', $this->id)->latest()->value('sender_id');

        }
    }

    public function getUnreadCountAttribute()
    {
        return Message::where([
            'chat_id' => $this->id,
            'is_readed' => false
        ])->count();
    }

    public function getLatestMessageRecievedTimeDiffAttribute()
    {
        $Message = Message::where('chat_id', $this->id)->latest()->first();

        if ($Message !== null) {
            return Carbon::parse($Message->sended_at)->diffForHumans();
        } else {
            return Carbon::parse($this->created_at)->diffForHumans();
        }

    }

    public function getUnreadIdsAttribute()
    {

        return $Message_ids = Message::where([
            'chat_id' => $this->id,
            'is_readed' => false
        ])->pluck('id');
    }

    public function first_user()
    {
        return $this->belongsTo(User::class, 'first_user_id', 'id');
    }

    public function second_user()
    {
        return $this->belongsTo(User::class, 'second_user_id', 'id');
    }
}
