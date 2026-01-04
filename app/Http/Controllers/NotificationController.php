<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class NotificationController extends Controller
{
    public function index()
    {
        $userId = Auth::id() ?? (Session::get('User')->id ?? (Session::get('user')->id ?? null));

        if (!$userId) {
            return redirect()->route('login')->with('error', 'Please login to view notifications');
        }

        $notifications = DB::table('notifications')
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->paginate(20);


        return view('notifications.index', compact('notifications'));
    }
}
