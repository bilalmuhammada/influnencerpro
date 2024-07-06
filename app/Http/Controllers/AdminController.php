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

class AdminController extends Controller
{
    public function index()
    {
        $Influencer = User::with(['role', 'user_professional_detail'])->withCount('favourites')->whereHas('role', function ($Role) {
            $Role->where('code', 'influencer');
        })->find(session()->get('User')->id);

        return view('admin.dashboard')->with('influencer', $Influencer);
    }

    public function getDataFroDashboard(Request $request)
    {
        $Influencer = User::find(Auth::id());
        $total_favourites = Favourite::where('influencer_id', Auth::id())->count();

        $ProfileVisitsAndClicks = ProfileVisit::when($request->from_date, function ($Visit) use ($request) {
            $Visit->where('date', '>=', $request->from_date);
        })->when($request->to_date, function ($Visit) use ($request) {
            $Visit->where('date', '>=', $request->to_date);
        })->count();

        $favourite_count = Favourite::when($request->from_date, function ($Visit) use ($request) {
            $Visit->whereDate('created_at', '>=', $request->from_date);
        })->when($request->to_date, function ($Visit) use ($request) {
            $Visit->whereDate('created_at', '>=', $request->to_date);
        })->count();

        return response()->json([
            'status' => true,
            'pie_chart' => [
                'label' => ['Clicks', 'Views', 'Favorites'],
                'data' => [intval($Influencer->total_clicks), intval($Influencer->total_views), intval($total_favourites)],
                'color' => ['red', 'green', 'blue']
            ],
            'profile_visit_bar_chart' => $this->barChartForProfileVisit($request),
            'profile_visit_count' => $ProfileVisitsAndClicks,
            'favorite_count' => $favourite_count
        ]);
    }

    public function barChartForProfileVisit()
    {
        // Calculate the date range for the past 12 months
        $end_date = Carbon::now()->startOfMonth();
        $start_date = $end_date->copy()->subMonths(11)->startOfMonth();

        // Initialize an empty array to store visit counts for each month
        $visitData = [];
        $monthArray = [];
        $favouriteData = [];
        $chatData = [];

        // Loop through each month and count visits
        $currentMonth = $start_date->copy();
        while ($currentMonth->lte($end_date)) {
            $nextMonth = $currentMonth->copy()->addMonth();

            $visitCount = ProfileVisit::where('influencer_id', Auth::id())->where('date', '>=', $currentMonth)
                ->where('date', '<=', $nextMonth)
                ->count();

            $favouriteCount = Favourite::where('influencer_id', Auth::id())->where('created_at', '>=', $currentMonth)
                ->where('created_at', '<=', $nextMonth)->count();

            $chatCount = Chat::with('first_user', 'second_user')->where('created_at', '>=', $currentMonth)
                ->where('created_at', '<=', $nextMonth)->where('second_user_id', SiteHelper::getLoginUserId())->where('status', 'accepted')->count();

            // Generate random RGB values for fillColor and strokeColor
            $fillColor = '#' . substr(md5(mt_rand()), 0, 6);
            $strokeColor = '#' . substr(md5(mt_rand()), 0, 6);

            // Create an object with 'x' and 'y' properties
            $visitData[] = $visitCount;
            $favouriteData[] = $favouriteCount;
            $chatData[] = $chatCount;
            $monthArray[] = $currentMonth->format('M/Y');

            $currentMonth->addMonth();
        }

        return [
            'profile_visit_count' => $visitData,
            'favourite_count' => $favouriteData,
            'chat_count' => $chatData,
            'months' => $monthArray,
        ];

    }
}
