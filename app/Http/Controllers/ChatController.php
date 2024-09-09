<?php

namespace App\Http\Controllers;

use App\Helpers\SiteHelper;
use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    private $logged_in_user_id = 1;

    public function index( Request $request)


    {
        if($request->i){
        Chat::updateOrCreate(
            ['second_user_id'=>$request->i],
            ['first_user_id'=>session()->get('User')['id'],'status'=> 'accepted', 'initiated_by'=>session()->get('User')['id']]
        );
    }
      
        $chats = Chat::with(['messages'])
            ->where('first_user_id', SiteHelper::getLoginUserId())
            ->orWhere('second_user_id', SiteHelper::getLoginUserId());

    //   dd();
        if ($request->i) {
                $chats = $chats->where('second_user_id', '=', $request->i);
        } 
        // dd( $chats );

        if (session()->get('role') == 'vendor') {
            $chats = $chats->where('status', '=', 'accepted');
        } else {
            $chats = $chats->where('status', '!=', 'rejected');
        }

        $chats = $chats->orderBy('created_at','desc')->get();
    //    dd( $chats,session()->get('role'));
        foreach ($chats as $chat) {
            $groupedMessages = [];
            if ($chat->messages) {
                foreach ($chat->messages as $message) {
                    $groupedMessages[Carbon::parse($message->sended_at)->format('d/M/Y')][] = $message;
                    $message->update(['is_delivered' => true]);
                }

                // Sort the messages by sended_at
                ksort($groupedMessages);
                $chat->sorted_messages = $groupedMessages;
            }
        }

       
//        dd($chats->toArray());

        return view('chats.list')->with([
            'chats' => $chats,
            'login_user_id' => SiteHelper::getLoginUserId()
        ]);
    }
    public function toggleFavorite(Request $request)
    {
        $chat = Chat::findOrFail($request->chat_id);
        $chat->is_favorite = !$chat->is_favorite;
        $chat->save();

        return response()->json(['is_favorite' => $chat->is_favorite]);
    }

    public function toggleBlock(Request $request)
    {
        $chat = Chat::findOrFail($request->chat_id);
        $chat->is_blocked = !$chat->is_blocked;
        $chat->save();

        return response()->json(['is_blocked' => $chat->is_blocked]);
    }


    public function getAcceptedUserForChat(Request $request)
    {
        $chats = Chat::with(['messages'])
            ->where('first_user_id', SiteHelper::getLoginUserId())
            ->where('status', '!=', 'rejected')
            ->orWhere('second_user_id', SiteHelper::getLoginUserId())
            ->get();

        return response()->json([
            'status' => true,
            'data' => $chats
        ]);
    }

    public function initiateChat(Request $request)
    {
        if (!empty($request->user_id)) {

            $Chat = Chat::create([
                'status' => 'requested',
                'second_user_id' => $request->user_id,
                'first_user_id' => SiteHelper::getLoginUserId(),
                'initiated_by' => SiteHelper::getLoginUserId(),
            ]);

            $User = User::find(1);


            return response()->json([
                'status' => true,
                'message' => "Request send successfully"
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Empty"
        ]);
    }

    public function sendMessage(Request $request)
    {
        // dd($request->all());
        $Message = Message::create([
            'sender_id' => SiteHelper::getLoginUserId(),
            'receiver_id' => 22,
            'message' => $request->message,
            'chat_id' => $request->chat_id,
            'is_readed' => 0,
            'sended_at' => Carbon::now()
        ]);

        return response()->json([
            'status' => true,
            'message' => "Message Sent Successfully",
            'data' => $Message
        ]);
    }

    public function markMessagesAsRead(Request $request)
    {
        Message::where('chat_id', $request->id)->update([
            'is_readed' => 1,
            'readed_at' => Carbon::now()
        ]);

        return response()->json([
            'status' => true,
            'message' => "Done"
        ]);

    }

    public function getNewMessages(Request $request)
    {
        $chats = Chat::with(['messages' => function ($message) {
            $message->where('is_delivered', 0)->where('sender_id', '!=', SiteHelper::getLoginUserId());
        }])
            ->where('first_user_id', SiteHelper::getLoginUserId())
            ->orWhere('second_user_id', SiteHelper::getLoginUserId())
            ->get();

        foreach ($chats as $chat) {
            if ($chat->messages) {
                foreach ($chat->messages as $message) {
                    $message->update(['is_delivered' => true]);
                }
            }
        }

        return response()->json([
            'status' => true,
            'data' => $chats,
            'login_user_id' => SiteHelper::getLoginUserId()
        ]);
    }

    public function acceptOrRejectChat(Request $request)
    {
        $request->validate([
            'chat_id' => 'required',
            'status' => 'required'
        ]);

        Chat::where('id', $request->chat_id)->update(['status' => $request->status]);

        return response()->json([
            'status' => true,
            'message' => 'Chat has been ' . $request->status
        ]);
    }

    public function markMessagesAsReadAll()
    {
        Message::where('receiver_id', SiteHelper::getLoginUserId())->update([
            'is_readed' => 1,
            'readed_at' => Carbon::now()
        ]);

        return response()->json([
            'status' => true,
            'message' => "Done"
        ]);
    }

    public function invitedInfluencer(Request $request)
    {
        $role = session()->get('role');

        $influencers = User::with(['city', 'country', 'state', 'role', 'user_professional_detail'])->has('invented')->whereHas('role', function ($Role) {
            $Role->where('code', 'influencer');
        })->whereHas('invented', function ($favourite) use ($request) {
            $favourite->where('user_id', SiteHelper::getLoginUserId())->when($request->from_date, function ($fav) use ($request) {
                $fav->whereDate('created_at', '>=', $request->from_date);
            })->when($request->to_date, function ($fav) use ($request) {
                $fav->whereDate('created_at', '<=', $request->to_date);
            });
        }) ->join('favourites', 'users.id', '=', 'favourites.influencer_id')  // Assuming the relationship uses 'influencer_id'
        ->where('favourites.user_id', SiteHelper::getLoginUserId())
        ->where('favourites.fr_in', 2)
        ->orderBy('favourites.created_at', 'desc') // Order by the 'created_at' column in 'favourites'
        ->select('users.*') // Ensures you get only user columns
        ->get();
        // $Chats = Chat::with('first_user', 'second_user')->when($role == 'vendor', function ($Chat) {
        //     $Chat->where('first_user_id', SiteHelper::getLoginUserId());
        // })->when($role == 'influencer', function ($Chat) {
        //     $Chat->where('second_user_id', SiteHelper::getLoginUserId())->where('status', 'requested');
        // })->when($request->from_date, function ($chat) use ($request) {
        //     $chat->whereDate('created_at', '>=', $request->from_date);
        // })->when($request->to_date, function ($chat) use ($request) {
        //     $chat->whereDate('created_at', '<=', $request->to_date);
        // })->get();

        return view('chats.invited-influencer')->with('influencers', $influencers);
    }

    public function statusUpdate(Request $request)
    {
        $Chat = Chat::where('id', $request->chat_id)->update(['status' => $request->status]);

        return response()->json([
            'status' => true,
            'message' => "invitation $request->status successfully"
        ]);
    }

    public function deleteChats(Request $request)
    {
//        return $request;
        Chat::whereIn('id', $request->chat_ids)->delete();

        return response()->json([
            'status' => true,
            'message' => "chat removed successfully"
        ]);
    }
}
