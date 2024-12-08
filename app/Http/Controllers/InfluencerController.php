<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;

class InfluencerController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('admin_dashboards.influencers.list')->with(['menu' => 'influencers', 'countries' => $countries]);
    }

    public function create()
    {
        $countries = Country::all();
        return view('admin_dashboards.influencers.create')->with(['menu' => 'influencers/create', 'countries' => $countries]);
    }

    public function transactions()
    {
        $Countries = Country::all();
        $Cities = City::all();

        return view('admin_dashboards.influencers.transactions')->with(['menu' => 'influencers/transactions', 'countries' => $Countries, 'cities' => $Cities]);
    }

    public function reviews()
    {
        return view('admin_dashboards.influencers.reviews')->with(['menu' => 'influencers/reviews']);
    }
}
