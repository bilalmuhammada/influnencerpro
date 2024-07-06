<?php

namespace App\Http\Controllers;

class ContractController extends Controller
{
    public function index()
    {
        return view('vendor-dashboard.my-contracts');
    }
}
