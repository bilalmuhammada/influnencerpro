<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings.list')->with(['menu' => 'listings']);
    }

    public function all()
    {
        $listings = Listing::with(['created_by.role', 'country'])->latest()->get();

        if ($listings->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'message' => '',
                'data' => $listings
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }
}
