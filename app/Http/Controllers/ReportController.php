<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function transactionHistory(Request $request)
    {
        $from_date = $request->from_date;
        $category_id = $request->category_id;
        $transactions = Transaction::where('user_id', session()->get('User')->id)->when($from_date, function ($Transaction) use ($from_date) {
            $Transaction->where('date', '>=', $from_date);
        })->when($request->to_date, function ($Transaction) use ($request) {
            $Transaction->where('date', '<=', $request->to_date);
        })->when($category_id, function ($Transaction) use ($category_id) {
            $Transaction->where('category_id', $category_id);
        })->get();

        $categories = Category::all();

        return view('report.transaction-history')->with(['transactions' => $transactions, 'categories' => $categories]);
    }

    public function myReports()
    {
        return view('report.my-reports');
    }

    public function vendorsEarning()
    {
        return view('report.vendors-earning');
    }

    public function influencerEarning()
    {
        return view('report.influencer-earning');
    }

    public function earning(Request $request)
    {
        $from_date = $request->from_date;
        $payment_method = $request->payment_method;
// dd( date('Y-m-d',strtotime($request->from_date)));
        $transactions = Transaction::where('user_id', 2)->when($from_date, function ($Transaction) use ($from_date) {
            $Transaction->where('date', '>=',date('Y-m-d',strtotime($from_date)));
        })->when($request->to_date, function ($Transaction) use ($request) {
            $Transaction->where('date', '<=',date('Y-m-d',strtotime($request->to_date)));
        // })->when($payment_method, function ($Transaction) use ($payment_method) {
        //     $Transaction->where('payment_method', $payment_method);
         })->get();

        // dd(  $transactions,$payment_method );
        return response()->json([
            'status' => true,
            'data' => $transactions
        ]);
    }

    public function transactionDelete(Request $request)
    {
        Transaction::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Transaction deleted successfully'
        ]);
    }

    public function transactionMultiDelete(Request $request)
    {
        Transaction::whereIn('id', $request->transIds)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Transaction deleted successfully'
        ]);
    }

    public function earningChart()
    {
        $date = Carbon::now();
        $start_date = Carbon::parse($date)->format('Y-m-d');
        $last_date = $date->subYear(1)->format('Y-m-d'); // 8
        $result = CarbonPeriod::create($last_date, '1 month', $start_date);

        $Transactions = Transaction::where('date', '>', $last_date)->get();

        // Initialize an array to store month names
        $month_array = [];
        $transactions = [];

        foreach ($result as $dt) {
            $month = $dt->format("Y-m");
            $month_array[] = $month;

            $transitions[] = $Transactions->where('date_to_month', '=', $month)->sum('amount');
        }

        return response()->json([
            'status' => true,
            'months' => $month_array,
            'data' => $transitions
        ]);

    }
}
