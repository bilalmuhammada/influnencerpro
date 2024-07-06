<?php

namespace App\Http\Controllers;

use App\Helpers\SiteHelper;
use App\Models\Chat;
use App\Models\ProfileVisit;
use App\Models\User;
use App\Models\UserSocialMediaProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MobileApiController extends Controller
{
    public function getAllCategories()
    {
        return response()->json([
            'status' => true,
            'categories' => getCategories()
        ]);
    }

    public function getInfluencesByCategory(Request $request)
    {
        return response()->json([
            'status' => true,
            'influences' => getInfluencersByCategoryId($request->category_id)
        ]);
    }

    public function detail(Request $request)
    {
        // get influencer for increment view and click
        $Influencer = User::with([
            'country',
            'state',
            'city',
            'role',
            'user_professional_detail',
            'features.feature',
            'personal_information' => [
                'spoken_language',
                'ethnicity',
            ],
            'social_media_profiles',
            'favourites'
        ])->find($request->influencer_id);

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

            return response()->json([
                'status' => true,
                'data' => $Influencer,
                'chat_status' => $chat = Chat::where(['second_user_id' => $request->influencer_id, 'first_user_id' => SiteHelper::getLoginUserId()])->first()->status ?? ''
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Results Found'
        ]);
    }

    public function influencersFilter(Request $request)
    {
        $influencers = getInfluencersByCategoryIdAndFilter($request);

        if ($influencers->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'data' => $influencers,
                'total_influencers' => $influencers->count()
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No records found'
        ]);
    }

    public function updateAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ]);
        }

        User::where('id', Auth::id())->update([
            'country_id' => $request->input('country_id', null),
            'city_id' => $request->input('city_id', null),
            'state_id' => $request->input('state_id', null),
            'sector' => $request->input('sector', null),
            'post_code' => $request->input('post_code', null),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Address Update Successfully'
        ]);
    }

    public function updateSocialMediaAccounts(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'country_id' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json([
//                'status' => FALSE,
//                'message' => $validator->errors()->first(),
//                'errors' => $validator->errors()
//            ]);
//        }

        // social media profile store here
        $socialMediaTypes = ['facebook', 'instagram', 'twitter', 'tiktok', 'youtube', 'linkedin', 'pinterest', 'website'];

        foreach ($socialMediaTypes as $socialMediaType) {
            if ($request->$socialMediaType) {

                $username = $request->input($socialMediaType, null);
                $followers = $request->input($socialMediaType . '_followers', null);
                $matchArray = ['user_id' => Auth::id(), 'type' => $socialMediaType];

                UserSocialMediaProfile::updateOrCreate($matchArray, [
                    'user_id' => Auth::id(),
                    'type' => $socialMediaType,
                    'username' => $username,
                    'followers' => $followers
                ]);
            }
        }

        return response()->json([
            'status' => true,
            'message' => 'Social media account updated successfully'
        ]);
    }
}
