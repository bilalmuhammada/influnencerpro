<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('messages.list')->with(['menu' => 'messages']);
    }

    public function all()
    {
        $messages = Message::with(['user'])->latest()->get();

        if ($messages->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'message' => '',
                'data' => $messages
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }
}
