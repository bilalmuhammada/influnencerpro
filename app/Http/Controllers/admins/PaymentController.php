<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payments.list')->with(['menu' => 'payments']);
    }

    public function all()
    {
        $listings = Payment::with(['user.role', 'country'])->latest()->get();

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
