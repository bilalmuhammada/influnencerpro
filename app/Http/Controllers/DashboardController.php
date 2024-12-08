<?php

namespace App\Http\Controllers;

use App\Helpers\SiteHelper;
use App\Models\Country;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::get();
        $countries = Country::all();

        $data = [
            'countries'=> $countries,
            'menu' => 'dashboard',
            'total_users' => $users->count(),
            'active_users' => $users->where('status', 'active')->count(),
            'inactive_users' => $users->where('status', 'inactive')->count(),
        ];
        return view('admin_dashboards.dashboard.index')->with($data);
    }

    public function dashboard()
    {
        return response()->json([
            'status' => true,
            'vendor_counts' => $this->getVendorData(),
            'influencer_counts' => $this->getInfluencerData()
        ]);
    }

    public function getVendorData()
    {
        $Vendors = User::with('role')->whereHas('role', function ($Role) {
            $Role->where('code', 'vendor');
        })->get();

        $returnData = [
            'total_vendor_count' => $Vendors->count(),
            'popular_vendor_count' => $Vendors->where('status', '=', 'POPULAR')->count(),
            'active_vendor_count' => $Vendors->where('status', '=', 'ACTIVE')->count(),
            'pending_vendor_count' => $Vendors->where('status', '=', 'PENDING')->count(),
            'block_vendor_count' => $Vendors->where('status', '=', 'INACTIVE')->count(),
            'rated_vendor_count' => $Vendors->where('status', '=', 'RATED')->count(),
            'favorite_vendor_count' => $Vendors->where('status', '=', 'FAVORITE')->count(),
        ];

        return $returnData;

    }

    public function getInfluencerData()
    {
        $Influencer = User::with('role')->whereHas('role', function ($Role) {
            $Role->where('code', 'influencer');
        })->get();

        $returnData = [
            'total_Influencer_count' => $Influencer->count(),
            'popular_Influencer_count' => $Influencer->where('status', '=', 'POPULAR')->count(),
            'active_Influencer_count' => $Influencer->where('status', '=', 'ACTIVE')->count(),
            'pending_Influencer_count' => $Influencer->where('status', '=', 'PENDING')->count(),
            'block_Influencer_count' => $Influencer->where('status', '=', 'INACTIVE')->count(),
            'rated_Influencer_count' => $Influencer->where('status', '=', 'RATED')->count(),
            'favorite_Influencer_count' => $Influencer->where('status', '=', 'FAVORITE')->count(),
        ];

        return $returnData;

    }

    public function getChartData(Request $request)
    {
        // Get the date range from the request
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');

        $date = Carbon::now()->firstOfYear();
        $start_date = Carbon::parse($date)->format('Y-m-d');
        $last_date = $date->addMonth(11)->format('Y-m-d');

        $to = SiteHelper::reformatDate($start_date);
        $from = SiteHelper::reformatDate($last_date);

        if($request->from_date){
            $to = SiteHelper::reformatDbDate($request->from_date);
        }

         if($request->to_date){
            $from = SiteHelper::reformatDbDate($request->to_date);
        }
        


        $period = \Carbon\CarbonPeriod::create($to, '1 month', $from);

        $Subscription = Subscription::whereDate('created_at', '>=', $start_date)->when($to, function ($Subscription) use ($to) {
            $Subscription->whereDate('created_at', '>=', $to);
        })->when($from, function ($Subscription) use ($from) {
            $Subscription->whereDate('created_at', '<=', $from);
        })->get();


        //get influencer or brands form user
        $influencer_ids = User::with('role')->whereHas('role', function ($Role) {
            $Role->where('code', 'influencer');
        })->pluck('id')->toArray();

        $brand_ids = User::with('role')->whereHas('role', function ($Role) {
            $Role->where('code', 'vendor');
        })->pluck('id')->toArray();

        $subscriptionPaymentMonthArray = [];
        $subscriptionPaymentArray = [];
        $subscriptionInfluencerPaymentArray = [];
        $subscriptionBrandPaymentArray = [];
        foreach ($period as $date) {
            $month = $date->format('Y-m');

            $subscriptionPaymentMonthArray[] = $date->format('Y/m');
            $subscriptionPaymentArray[] = $Subscription->where('month', $month)->sum('amount_paid');
            $subscriptionInfluencerPaymentArray[] = $Subscription->where('month', $month)->whereIn('user_id', $influencer_ids)->sum('amount_paid');
            $subscriptionBrandPaymentArray[] = $Subscription->where('month', $month)->whereIn('user_id', $brand_ids)->sum('amount_paid');

        }
//        $subscriptionPaymentArray['total_net'] = $total_net_payment;

        return response()->json([
            'status' => true,
            'payment_amount_array' => $subscriptionPaymentArray,
            'filtergraph' => $request->input('filtergraph') === "sales" ? "Sales":"Counts",
            'month_array' => $subscriptionPaymentMonthArray,
            'influencer_payment_amount_array' => $subscriptionInfluencerPaymentArray,
            'brand_payment_amount_array' => $subscriptionBrandPaymentArray,
        ]);
    }
}
