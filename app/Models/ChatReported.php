<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatReported extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'chat_reporteds';
    public function Chats()
    {
        return $this->belongsTo(Chat::class, 'chat_id', 'id');
    }
}
