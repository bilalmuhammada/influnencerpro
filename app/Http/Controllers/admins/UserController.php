<?php

namespace App\Http\Controllers;

use App\Helpers\SiteHelper;
use App\Models\Attachment;
use App\Models\Review;
use App\Models\Role;
use App\Models\State;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserPersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        return view('users.list')->with(['menu' => 'users']);
    }
    public function getCitiesByCountry(Request $request)
    {
        // dd( $request->country_id);
        $state_ids = getStateByCountryId($request->country_id)->pluck('id');
        
        $cities = getCityByStateIds($state_ids);

        return response()->json([
            'status' => true,
            'data' => $cities
        ]);
    }
    public function all(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role' => 'required|exists:roles,code',
        ]);
        // dd('dd');

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }
        $role = $request->role;

        $Users = User::with(['subscription','personal_information', 'plan'])->whereHas('role', function ($Role) use ($role) {
            $Role->where('code', $role);
        })->when($request->status, function ($User, $status) {
            $User->where('status', $status);
        })->latest()->get();
// dd(  $Users);
        if ($Users->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'message' => '',
                'data' => $Users
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }
    public function contactForm()
    {
       
        return view('auth.contact-us');
    }

    public function changeStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:users,id',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        // dd(  $request->id, $request->status);
        if (!empty($request->status)) {
            $user = User::find($request->id);
            $user->status = 'inactive';
            if ($request->status == 'on') {
                $user->status = 'active';
            }
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'Status updated successfully!',
                're' => $request->all()
            ]);
        }
      

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'email' => 'required|email|unique:users',
//            'type' => 'required',
            'password' => 'required|min:8|required_with:confirm_password|same:confirm_password',
             'role' => 'required|exists:roles,code',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }
        $user_id = Auth::id();
        $role_id = Role::where('code', $request->role)->first()->id;

        $image = $request->file('image');
        if ($image) {
            $file_name = Str::random(10);
            $type = $image->getClientOriginalExtension();
            $image_name = $file_name . '.' . $type;
            $image->move(public_path('uploads/users'), $image_name);
        } else {
            $image_name = '';
        }


        $User = User::create([
            'name' => $request->first_name,
            'last_name' => $request->last_name,
            'brand_name' => $request->brand_name,
            'role_id' => $role_id,
            'addedby' => $request->addedby,
            'email' => $request->email,
            'description' => $request->description,
            'phone' => $request->phone,
            'position' => $request->position,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'state_id' => $request->state_id,
            'company_name' => $request->company_name,
            'website' => $request->website,
            'password' => Hash::make($request->password),
//            'status' => $request->status == 'on' ? 1 : 0,
        ]);
        $match = ['user_id' => $User->id];
        // personal information store here
        UserPersonalInformation::updateOrCreate($match, [
            // 'dialects' => $request->dialects,
            'user_id' => $User->id,
            'age' => $request->age,
            'gender' => $request->gender,
        ]);

        if ($User && $image) {
            Attachment::create([
                'name' => $image_name,
                'file_name' => $file_name,
                'type' => $type,
                'object' => 'User',
                'object_id' => $User->id,
                'context' => 'user-image'
            ]);

            SiteHelper::sendFileToSite(public_path('uploads/users') . '/' . $image_name, 'users');
        }


        return response()->json([
            'status' => true,
            'message' => ucfirst($request->role == 'vendor' ? 'Brand' : $request->role) . ' created successfully'
        ]);
    }

    public function show($id)


    {
        
        return response()->json([
            'status' => true,
            'data' =>User::with(['subscription','personal_information', 'plan'])->find($id)
        ]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $image = $request->file('image');
        if ($image) {
            $file_name = Str::random(10);
            $type = $image->getClientOriginalExtension();
            $image_name = $file_name . '.' . $type;
            $image->move(public_path('uploads/users'), $image_name);
        } else {
            $image_name = '';
        }

        $user_data_array = [
            'name' => $request->first_name,
            'last_name' => $request->last_name,
            'brand_name' => $request->brand_name,
            'email' => $request->email,
            'addedby' => $request->addedby,
            'description' => $request->description,
            'phone' => $request->phone,
            'position' => $request->position,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'state_id' => $request->state_id,
            'company_name' => $request->company_name,
            'website' => $request->website
//            'status' => $request->status == 'on' ? 1 : 0,
        ];

      

        if ($request->password) {
            $user_data_array['password'] = Hash::make($request->password);
        }

        $User = User::with(['role', 'attachment'])->find($request->id);
        $User->update($user_data_array);
        $match = ['user_id' => $request->id];
        // personal information store here
        UserPersonalInformation::updateOrCreate($match, [
            // 'dialects' => $request->dialects,
            'user_id' => $request->id,
            'age' => $request->age,
            'gender' => $request->gender,
        ]);
        if ($User && $image) {
            if ($User->attachment && File::exists(public_path('uploads/users/' . $User->attachment->name))) {
                unlink(public_path('uploads/users/' . $User->attachment->name));
            }

            Attachment::where('object', 'User')->where('object_id', $User->id)->where('context', 'user-image')->delete();
            Attachment::create([
                'name' => $image_name,
                'file_name' => $file_name,
                'type' => $type,
                'object' => 'User',
                'object_id' => $User->id,
                'context' => 'user-image'
            ]);

            SiteHelper::sendFileToSite(public_path('uploads/users') . '/' . $image_name, 'users');
        }


        return response()->json([
            'status' => true,
            'message' => ucfirst($User->role->code == 'vendor' ? 'Brand' : $request->role) . ' update successfully'
        ]);
    }

    public function delete(Request $request)
    {
        $User = User::where('id', $request->id)->first();

        if ($User || $User->attachment) {
            // dd('dd');
            // if (File::exists(public_path('uploads/users/' . $User->attachment->name))) {
            //     unlink(public_path('uploads/users/' . $User->attachment->name));
            // }

            // Attachment::where('object', 'User')->where('object_id', $User->id)->delete();
            $User->delete();
        }
        return response()->json([
            'status' => true,
            'message' => 'Record delete successfully'
        ]);
    }

    public function reviews(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role' => 'required|exists:roles,code',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }
        $role_id = Role::where('code', $request->role)->first()->id;

        $Reviews = Review::with(['user', 'category'] )->whereHas('user', function ($User) use ($role_id) {
            $User->where('role_id', $role_id);
        })->get();

        //  dd($Reviews);
        if ($Reviews->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'data' => $Reviews
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }

    public function deleteReview($id)
    {
        $rules = [
            'id' => 'required|exists:reviews,id',
        ];

        $validator = Validator::make(['id' => $id], $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        Review::where('id', $id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Review Deleted Successfully'
        ]);
    }

    public function transactions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role' => 'required|exists:roles,code',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }
        $role_id = Role::where('code', $request->role)->first()->id;

        $Transactions = Transaction::with(['user'])->whereHas('user', function ($User) use ($role_id, $request) {
            $User->where('role_id', $role_id)->when($request->city_id, function ($U) use ($request) {
                $U->where('city_id', $request->city_id);
            })->when($request->country_id, function ($U) use ($request) {
                $U->where('country_id', $request->country_id);
            });
        })->when($request->from_date, function ($Transaction) use ($request) {
            $Transaction->where('date', '>=', SiteHelper::reformatDbDate($request->from_date));
        })->when($request->to_date, function ($Transaction) use ($request) {
            $Transaction->where('date', '<=', SiteHelper::reformatDbDate($request->to_date));
        })->get();

        if ($Transactions->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'data' => $Transactions
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => []
        ]);
    }

    public function deleteTransaction($id)
    {
        $rules = [
            'id' => 'required|exists:transactions,id',
        ];

        $validator = Validator::make(['id' => $id], $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        Transaction::where('id', $id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Transaction Deleted Successfully'
        ]);
    }

    public function uploadFile(Request $request)
    {
        // Get the data from the request
        $data = $request->all();
        // Extract the file name and file data from the data array
        $file_name = $data['file_name'];
        $file_data = base64_decode($data['file_data']);
        // Define the destination folder on the server
        $live_server_folder = public_path("uploads/users");
        // Save the file on the server
        if (file_put_contents($live_server_folder . DIRECTORY_SEPARATOR . $file_name, $file_data)) {
            return true;
        } else {
            return false;
        }
    }

    public function getStatesByCountry(Request $request)
    {
        return response()->json([
            'status' => true,
            'data' => \App\Models\State::where('country_id', $request->country_id)->get()
        ]);
    }

    public function getCitiesByState(Request $request)
    {
        return response()->json([
            'status' => true,
            'data' => \App\Models\City::where('state_id', $request->state_id)->get()
        ]);
    }

    // public function getCitiesByCountry(Request $request)
    // {
    //     $states_ids = State::where('country_id', $request->country_id)->pluck('id')->toArray();
    //     return response()->json([
    //         'status' => true,
    //         'data' => \App\Models\City::whereIn('state_id', $states_ids)->get()
    //     ]);
    // }
}
