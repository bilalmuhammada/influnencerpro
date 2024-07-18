<?php

namespace App\Http\Controllers;

use App\Helpers\SiteHelper;
use App\Models\Chat;
use App\Models\Favourite;
use App\Models\ProfileVisit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {

        if (!$request->session()->has('User')) {
            return redirect('/register?role=influencer');
        }

        $influencers = User::with(['city', 'country', 'state', 'role', 'user_professional_detail','favourites'])->whereHas('role', function ($Role) {
            $Role->where('code', 'influencer');
        });

        // dd(  $influencers);
        return view('vendor-dashboard.home')->with(['view_type' => 'influencer', 'influencers' => $influencers->paginate(20), 'total_influencers' => $influencers->count()]);
    }

    public function getPaginatedInfluencers(Request $request)
    {
        $influencers = User::with(['city', 'country', 'state', 'role', 'user_professional_detail', 'favourites'])->whereHas('role', function ($Role) {
            $Role->where('code', 'influencer');
        });

        return response()->json([
            'view_type' => 'influencer',
            'influencers' => $influencers->paginate($request->limit),
            'total_influencers' => $influencers->count()
        ]);
    }


    public function favouriteInfluencers(Request $request)
    {

        $influencers = User::with(['city', 'country', 'state', 'role', 'user_professional_detail'])->has('favourites')->whereHas('role', function ($Role) {
            $Role->where('code', 'influencer');
        })->whereHas('favourites', function ($favourite) use ($request) {
            $favourite->where('user_id', SiteHelper::getLoginUserId())->when($request->from_date, function ($fav) use ($request) {
                $fav->whereDate('created_at', '>=', $request->from_date);
            })->when($request->to_date, function ($fav) use ($request) {
                $fav->whereDate('created_at', '<=', $request->to_date);
            });
        })->get();

        return view('vendor-dashboard.saved-influencers')->with(['view_type' => 'influencer', 'influencers' => $influencers]);
    }

    public function detail(Request $request)
    {
        // get influencer for increment view and click
        $Influencer = User::with(['role', 'user_professional_detail', 'features.feature', 'influencer_profile_images', 'availabilities', 'categories.category'])->find($request->id);
        $chat = Chat::where(['second_user_id' => $request->id, 'first_user_id' => SiteHelper::getLoginUserId()])->first();

        if ($Influencer) {
            $total_views = $Influencer->total_views + 1;
            $total_clicks = $Influencer->total_clicks + 1;

            // update here click and view
            $Influencer->update([
                'total_clicks' => $total_clicks,
                'total_views' => $total_views,
            ]);

            // profile visit tracking create
            ProfileVisit::create([
                'influencer_id' => $Influencer->id,
                'user_id' => session()->get('User')['id'],
                'date' => Carbon::now()
            ]);

            return view('vendor-dashboard.influencer-detail')->with(['view_type' => 'influencer', 'chat' => $chat]);
        }

        return redirect()->back();
    }

    public function influencers()
    {
        $Influencers = User::with('role')->whereHas('role', function ($Role) {
            $Role->where('code', 'influencer');
        })->get();

        return response()->json([
            'status' => true,
            'data' => $Influencers
        ]);
    }

    public function brands()
    {
        $Influencers = User::with('role')->whereHas('role', function ($Role) {
            $Role->where('code', 'vendor');
        })->get();

        return response()->json([
            'status' => true,
            'data' => $Influencers
        ]);
    }

    public function filter(Request $request)
    {
        $influencers = getInfluencersByCategoryIdAndFilter($request);

        return view('vendor-dashboard.home')->with(['view_type' => 'influencer', 'influencers' => $influencers, 'total_influencers' => $influencers->count()]);
    }

    public function searchByName(Request $request)
    {
        $name = $request->input('influencer_name');

        $influencers = User::with(['role', 'user_professional_detail', 'personal_information', 'features', 'social_media_profiles'])
            ->whereHas('role', function ($role) {
                $role->where('code', 'influencer');
            })->where('name', 'like', '%' . $name . '%')->where('last_name', 'like', '%' . $name . '%')->get();

        return response()->json([
            'status' => true,
            'message' => $influencers
        ]);
    }

    public function addToFavourites(Request $request)
    {
        $influencer_id = $request->influencer_id;
        $validation_arr = [
            'influencer_id' => $influencer_id,
        ];

        $Validator = Validator::make($validation_arr, [
            'influencer_id' => 'required|exists:users,id',
        ]);

//        if (!Auth::id() || !Session::has('user')) {
//            return response()->json([
//                'status' => false,
//                'message' => "Login to continue",
//            ]);
//        }

        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            return response()->json([
                'status' => false,
                'message' => "Invalid Selection",
            ]);
        }

        $Favourite = Favourite::where([
            'influencer_id' => $influencer_id,
            'user_id' => Auth::id(),
        ])->first();

        if (!empty($Favourite)) {
            return response()->json([
                'status' => false,
                'message' => "Already exists",
            ]);
        }

        Favourite::create([
            'influencer_id' => $influencer_id,
            'user_id' => Auth::id(),
        ]);

        return response()->json([
            'status' => true,
            'message' => "Added to favourites",
        ]);

    }

    public function removeFromFavourites(Request $request)
    {
        $influencer_id = $request->influencer_id;

        $validation_arr = [
            'influencer_id' => $influencer_id,
        ];

        $Validator = Validator::make($validation_arr, [
            'influencer_id' => 'required|exists:users,id',
        ]);

        if ($Validator->fails()) {
            $error = $Validator->errors()->first();
            return response()->json([
                'status' => false,
                'message' => "Invalid Selection",
            ]);
        }

        $Favourite = Favourite::where([
            'influencer_id' => $influencer_id,
            'user_id' => Auth::id(),
        ])->first();

        if (!empty($Favourite)) {
            $Favourite->delete();

            return response()->json([
                'status' => true,
                'message' => "Removed",
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Failed",
        ]);

    }

    public function chatStatus(Request $request)
    {
        return response()->json([
            'status' => true,
            'data' => $chat = Chat::where(['second_user_id' => $request->id, 'first_user_id' => SiteHelper::getLoginUserId()])->first()->status
        ]);
    }
}
