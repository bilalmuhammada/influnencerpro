<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.list')->with(['menu' => 'admins']);
    }


    public function create()
    {
        $countries = Country::all();
        return view('admin_dashboards.admins.create')->with(['menu' => 'admins/create', 'countries' => $countries]);
    }
    public function all()
    {
        $users = admin::all();
        if ($users->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'message' => '',
                'data' => $users
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        

        $Category = Admin::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'gender' => $request->gender,
            'age' => $request->age,
            'addedby' => $request->addedby,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'password' =>Hash::make($request->password),
            
        ]);


        return response()->json([
            'status' => true,
            'message' => 'Admin created successfully'
        ]);
    }
    public function changeStatus(Request $request)
    {
        if (!empty($request->status)) {
            $user = User::find($request->admin_id);
            $user->status = '0';
            if ($request->status == 'on') {
                $user->status = '1';
            }
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'Status updated successfully!',
                're' => $request->all()
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'Invalid request'
        ]);
    }
}
