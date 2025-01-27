<?php

namespace App\Http\Controllers;

use App\Helpers\SiteHelper;
use App\Models\Attachment;
use App\Models\City;
use App\Models\Role;
use App\Models\StaticDatabase;
use App\Models\usebodyinfo;
use App\Models\User;
use App\Models\UserArt;
use App\Models\UserAvailability;
use App\Models\UserCategory;
use App\Models\UserCatrgory;
use App\Models\UserFeature;
use App\Models\UserPersonalInformation;
use App\Models\UserProfessionDetail;
use App\Models\UserSocialMediaProfile;
use App\Models\UserSpokenLanguage;
use App\Notifications\PasswordReset;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        // dd('dd');
        if (\session()->has('User')) {
            return redirect('/home');
        }
        return view('auth.login');
    }

  

    public function register()
    {
        return view('auth.register');
    }

    public function accountSetting()
    {
        return view('auth.account-setting');
    }

    public function completeProfile()
    {
        $Influencer = getInfluencerById(\session()->get('User')['id']);

           $userInformation=     usebodyinfo::all();
           $cities=     City::all();
       

        return view('auth.complete-profile')->with(['influencer' => $Influencer,'cities'=>$cities,'userInformation'=>$userInformation]);
    }

    public function vendorAccountSetting()
    {
        return view('auth.vendor-account-setting');
    }

    public function registerBackend(Request $request)
    {

        // dd($request->all());gender
      
        

       


        if ($request->role == 'vendor') {
            $validator = Validator::make($request->all(), [
  
                'brand_name' => 'required', 
                'company_name' => 'required', 
                'website' => 'required|url',
               'email' => ['required', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],

                'first_name' => 'required', 
                'last_name' => 'required', 
                'position' => 'required',
                'phone' => 'required',
                'gender' => 'required',
                'national_id' => 'required',
                'country_id' => 'required',
                'city_id' => 'required',
                'age' => ['required', 'date', 'before:' . now()->subYears(18)->format('Y-m-d')],
                'password' => 'required|min:8|required_with:confirm_password|same:confirm_password|regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
              
            ], [
                'age.date' => 'The date of birth must be a valid date.',
                'age.before' => 'You must be at least 18 years old.',
                'password.confirmed' => 'Confirm Password does not match.',
                'website' => 'Please enter valid website url with http:// in front',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => FALSE,
                    'message' => $validator->errors()->first(),
                    'errors' => $validator->errors()
                ]);
            }
        }
        else{

            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone' => 'required',
                'gender'=>'required',
                
                'email' => ['required', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],

                  
                'age' => ['required', 'date', 'before:' . now()->subYears(18)->format('Y-m-d')],
                'national_id' => 'required',
                'gender' => 'required',
                  
                'country_id' => 'required',
                'city_id' => 'required',
    
                'password' => 'required|min:8|required_with:confirm_password|same:confirm_password|regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
                'role' => 'required|exists:roles,code'
            ],
            [
                'age.date' => 'The date of birth must be a valid date.',
                'age.before' => 'You must be at least 18 years old.',
                'password.confirmed' => 'Confirm Password does not match.',

            ]
            
        
        );

            if ($validator->fails()) {
                return response()->json([
                    'status' => FALSE,
                    'message' => $validator->errors()->first(),
                    'errors' => $validator->errors()
                ]);
            }
        }
       
        // if ($request->agreed_to_terms != 'on') {
        //     return response()->json([
        //         'status' => FALSE,
        //         'message' => 'Please Check User Agreement, Privacy Policy',
        //         'errors' => ['agreed_to_terms' => ["Please Check User Agreement, Privacy Policy"]]
        //     ]);
        // }


        $User = User::where('email', $request->email)->first();

     
        // check if User exist or not
        if ($User) {
            return response()->json([
                'status' => false,
                'message' => 'Please user different email address',
                'errors' => ['email' => ["Please user different email address"]]
            ]);
        }
      
        $User = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'agreed_to_terms' => $request->agreed_to_terms == 'on' ? 1 : 0,
            'email' => $request->input('email', null),
            'phone' => $request->phone,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'website' => $request->website,
            'company_name' => $request->company_name,
            'position' => $request->position,
            'brand_name' => $request->input('brand_name', null),
            'password' => Hash::make($request->password),
            'role_id' => Role::firstWhere('code', $request->role)->id,
            'type' => $request->role == 'influencer' ? 'BUYER' : 'SELLER',
        ]);
       
        $token = $User->createToken($request->role)->plainTextToken;
        
        return response()->json([
            'status' => 200,
            'message' => 'You have registered successfully',
            'token' => ['token' => $token]
        ])->header('Cache-Control', 'private')->header('Authorization', $token);
     
    }

    // public function loginBackend(Request $request)
    // {
        public function loginBackend(Request $request)
{
    // Validate the request inputs
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',  // Ensure that email is validated correctly
        'password' => 'required|min:6',
    ]);

    // Handle validation failure
    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'message' => $validator->errors()->first(),
            'errors' => $validator->errors()
        ]);
    }

    // Attempt to log in using the provided credentials
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed, get the authenticated user
        $User = Auth::user();

        // Optionally, load the user's role relationship if needed
        $User->load('role');

        // Generate token for the user (if you need to use tokens)
        $token = $User->createToken('admin')->plainTextToken;

        // Store additional session data if necessary
        Session::put('role', $User->role->code);
        Session::put('User', $User);

        return response()->json([
            'status' => true,
            'message' => 'Logged in',
            'user' => $User,
            'role_key' => $User->role->code,
            'token' => ['token' => $token]
        ])->header('Cache-Control', 'private')->header('Authorization', $token);
    } else {
        // Authentication failed
        return response()->json([
            'status' => false,
            'message' => 'Invalid Email or Password!',
            'errors' => ['email' => ['Invalid Email or Password!']]
        ]);
    }
}


    public function logout()
    {
    //    dd('sss');
        Session::flush();
        return response()->json([
            'status' => true,
            'message' => 'Logged out'
        ]);
    }

    public function completeProfileBackend(Request $request)
    {

//        foreach ($request->available_country_id as $key => $country_id) {
//            return $request->available_from_date;
//            if ($request->available_from_date[$key]) {
//                UserAvailability::create([
//                    'user_id' => 1,
//                    'country_id' => $country_id,
//                    'city_id' => $request->available_city_id[$key],
//                    'availability_from_date' => $request->available_from_date[$key],
//                    'availability_to_date' => $request->available_to_date[$key],
//                ]);
//            }
//        }
//
//        return true;
//        $validator = Validator::make($request->all(), [
//            'dialects' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json([
//                'status' => FALSE,
//                'message' => $validator->errors()->first(),
//                'errors' => $validator->errors()
//            ]);
//        }

        $user_id = Auth::id();
        $Influencer = User::with(['role', 'attachment'])->find($user_id);


        // update user table here
        User::where('id', $user_id)->update([
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'state_id' => $request->state_id,
        ]);

        //create categories
        if ($request->category_ids) {
            UserCategory::where('user_id', Auth::id())->delete();

            foreach ($request->category_ids as $category) {
                UserCategory::create([
                    'user_id' => Auth::id(),
                    'category_id' => $category
                ]);
            }
        }

        $match = ['user_id' => $user_id];
        // personal information store here
        UserPersonalInformation::updateOrCreate($match, [
            'dialects' => $request->dialects,
            'hair_type' => $request->hair_type,
            'hair_color' => $request->hair_color,
            'age' => $request->age,
            'valid_license' => $request->valid_license,
            'tattoes' => $request->tattoes,
            'gender' => $request->gender,
            'spoken_language_id' => $request->spoken_language_id,
            'ethnicity_id' => $request->ethnicity_id,
            'eye_color' => $request->eye_color,
            'height' => $request->height,
            'weight' => $request->weight,
            'shoes_size' => $request->shoes_size,
            'bio' => $request->bio,
            'willing_to_traval' => $request->willing_to_traval,
            'is_collaboration' => $request->is_collaboration,
            'user_id' => Auth::id()
        ]);

        // user feature store here
        if ($request->features) {
            UserFeature::where('user_id', Auth::id())->delete();
            foreach ($request->features as $key => $value) {
                UserFeature::create([
                    'user_id' => Auth::id(),
                    'feature_id' => $value,
                ]);
            }
        }

        // social media profile store here
        $socialMediaTypes = ['facebook', 'instagram', 'twitter', 'tiktok'];

        foreach ($socialMediaTypes as $socialMediaType) {
            if ($request->$socialMediaType && $request->$socialMediaType == 'on') {

                $username = $request->input($socialMediaType . '_username');
                $followers = $request->input($socialMediaType . '_followers');
                $matchArray = ['user_id' => Auth::id(), 'type' => $socialMediaType];

                UserSocialMediaProfile::updateOrCreate($matchArray, [
                    'user_id' => Auth::id(),
                    'type' => $socialMediaType,
                    'username' => $username,
                    'followers' => $followers
                ]);
            }
        }

        // user professional detail store here
        UserProfessionDetail::updateOrCreate($match, [
            'user_id' => Auth::id(),
            'professional_category' => $request->professional_category,
            'category_id' => $request->category_id,
            'category_model_id' => $request->category_model_id,
            'available_from_date' => $request->available_from_date,
            'available_to_date' => $request->available_to_date,
            'price' => $request->price,
            'price_include' => $request->price_include,
            'skills' => json_encode($request->skills),
        ]);

        $logo = $request->file('logo');
        if ($logo && $Influencer) {

            if ($Influencer->attachment && File::exists(public_path('uploads/users/' . $Influencer->attachment->name))) {
                unlink(public_path('uploads/users/' . $Influencer->attachment->name));
            }

            $logo_name = $logo->getClientOriginalName() . Auth::id() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/users'), $logo_name);

            Attachment::where('object', 'User')->where('object_id', $Influencer->id)->where('context', 'user-image')->delete();
            Attachment::create([
                'name' => $logo_name,
                'file_name' => $logo->getClientOriginalName() . Auth::id(),
                'type' => $logo->getClientOriginalExtension(),
                'object' => 'User',
                'object_id' => $Influencer->id,
                'context' => 'user-image'
            ]);

            SiteHelper::sendFileToSite(public_path('uploads/users') . '/' . $logo_name);
        }

        $profile_images = $request->file('profile_images');

        if ($profile_images && $Influencer) {
            foreach ($profile_images as $profile_image) {

                $profile_image_name = $profile_image->getClientOriginalName() . Auth::id() . '.' . $profile_image->getClientOriginalExtension();
                $profile_image->move(public_path('uploads/users'), $profile_image_name);

                Attachment::create([
                    'name' => $profile_image_name,
                    'file_name' => $profile_image->getClientOriginalName() . Auth::id(),
                    'type' => $profile_image->getClientOriginalExtension(),
                    'object' => 'User',
                    'object_id' => $Influencer->id,
                    'context' => 'influencer-profile-image'
                ]);

                SiteHelper::sendFileToSite(public_path('uploads/users') . '/' . $profile_image_name);
            }
        }

        UserAvailability::where('user_id', $Influencer->id)->delete();

        foreach ($request->available_country_id as $key => $country_id) {
            if ($request->availability_from_date[$key]) {
                UserAvailability::create([
                    'user_id' => $Influencer->id,
                    'country_id' => $country_id,
                    'city_id' => $request->available_city_id[$key],
                    'availability_from_date' => $request->availability_from_date[$key],
                    'availability_to_date' => $request->availability_to_date[$key],
                ]);
            }
        }

        if ($request->main_available_date) {
            UserAvailability::create([
                'user_id' => $Influencer->id,
                'country_id' => $request->country_id,
                'city_id' => $request->city_id,
                'availability_date' => $request->main_available_date,
                'is_default' => 1,
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Profile updated successfully'
        ]);
    }

    public function completeProfileBackendForWeb(Request $request)
    {
//        return $request;

//        foreach ($request->available_country_id as $key => $country_id) {
//            return $request->available_from_date;
//            if ($request->available_from_date[$key]) {
//                UserAvailability::create([
//                    'user_id' => 1,
//                    'country_id' => $country_id,
//                    'city_id' => $request->available_city_id[$key],
//                    'availability_from_date' => $request->available_from_date[$key],
//                    'availability_to_date' => $request->available_to_date[$key],
//                ]);
//            }
//        }
//
//        return true;
//        $validator = Validator::make($request->all(), [
//            'dialects' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            return response()->json([
//                'status' => FALSE,
//                'message' => $validator->errors()->first(),
//                'errors' => $validator->errors()
//            ]);
//        }
// dd($request->all());

        $user_id = Auth::id();
        $Influencer = User::with(['role', 'attachment'])->find($user_id);


        // update user table here
        User::where('id', $user_id)->update([
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'state_id' => $request->state_id,
        ]);

        //create categories
        if ($request->category_ids) {
            UserCategory::where('user_id', Auth::id())->delete();

            foreach ($request->category_ids as $category) {
                UserCategory::create([
                    'user_id' => Auth::id(),
                    'category_id' => $category
                ]);
            }
        }

        $match = ['user_id' => $user_id];
        // personal information store here
        UserPersonalInformation::updateOrCreate($match, [
            // 'dialects' => $request->dialects,
            'hair_type' => $request->hair_type,
            'hair_color' => $request->hair_color,
            'age' => $request->age,
            'valid_license' => $request->valid_license,
            'tattoes' => $request->tattoes,
            'gender' => $request->gender,
            'spoken_language_id' => $request->spoken_language_id,
            'ethnicity_id' => $request->ethnicity_id,
            'eye_color' => $request->eye_color,
            'height' => $request->height,
            'weight' => $request->weight,
            'shoes_size' => $request->shoes_size,
            'bio' => $request->bio,
            'price_include' => $request->price_include,
            'price_negotiable' => $request->price_negotion,
            'willing_to_traval' => $request->willing_to_traval,
            'is_collaboration' => $request->is_collaboration,
            'national_id' =>$request->national_id,
            'country_id' => $request->base_country_id,
            'city_id' => $request->base_city_id,
            'travlling_one_country_id' => $request->travlling_one_country_id,
            'travlling_one_city_id' => $request->travlling_one_city_id,
            'travlling_one_from_date' =>date('Y-m-d', strtotime($request->travlling_one_from_date)),
            'travlling_one_to_date' => date('Y-m-d', strtotime($request->travlling_one_to_date)),
            'travlling_two_country_id' => $request->travlling_two_country_id,
            'travlling_two_city_id' => $request->travlling_two_city_id,
            'travlling_two_from_date' => date('Y-m-d', strtotime($request->travlling_two_from_date)),
            'travlling_two_to_date' => date('Y-m-d', strtotime($request->travlling_two_to_date)),
            'travlling_three_country_id' => $request->travlling_three_country_id,
            'travlling_three_city_id' => $request->travlling_three_city_id,
            'travlling_three_from_date' => date('Y-m-d', strtotime($request->travlling_three_from_date)),
            'travlling_three_to_date' => date('Y-m-d', strtotime($request->travlling_three_to_date)),
            'main_available_from_date' => date('Y-m-d', strtotime($request->main_available_from_date)),
            'base_date' => date('Y-m-d', strtotime($request->base_date)),
            'user_id' => Auth::id()
        ]);

//   

$matchprf_user_id = ['user_id' => $user_id];


UserProfessionDetail::updateOrCreate($matchprf_user_id, [
    'user_id' => Auth::id(),
    'professional_category' => $request->professional_category,
    'category_id' => $request->category_id,
    'category_model_id' => $request->category_model_id,
    'available_from_date' => $request->available_from_date,
    'available_to_date' => $request->available_to_date,
    'price' => $request->price,
    'price_include' => $request->price_include,
    'skills' => json_encode($request->skills),
]);
dd('dd');
        // user feature store here
        if ($request->features) {
            // dd($request->features);
            UserFeature::where('user_id', Auth::id())->delete();
            foreach ($request->features as $key => $value) {
                UserFeature::create([
                    'user_id' => Auth::id(),
                    'feature_id' => $value,
                ]);
            }
        }

        // social media profile store here
        // $socialMediaTypes = ['facebook', 'instagram', 'twitter', 'tiktok', 'youtube', 'snapchat', 'pinterest', 'web'];
        $socialMediaTypes = [
            'instagram',
            'facebook',
            'tiktok',
            'youtube',
            'twitter',
            'snapchat',
            'pinterest',
            'web',
        ];
        //  dd($request->all());
        // dd(,$request->input(  '_username'),$request->input($socialMediaType . '_followers'),$request->input($socialMediaType . '_url'));
        foreach ($socialMediaTypes as $socialMediaType) {
            
            // $username = $request->input($socialMediaType . '_username');
            // if ($username) {

                $followers = $request->input($socialMediaType . '_followers');
                $url = $request->input($socialMediaType . '_url');
                $matchArray = ['user_id' => Auth::id(), 'type' => $socialMediaType];
// dd($matchArray);
                UserSocialMediaProfile::updateOrCreate($matchArray, [
                    'user_id' => Auth::id(),
                    'type' => $socialMediaType,
                   
                    'followers' =>  $followers,
                    'url' => $url,
            
                ]);
            // }
        }
        // dd($request->arts,$request->spoken_language_ids);
        if ($request->spoken_language_ids) {

            UserSpokenLanguage::where('user_id', $Influencer->id)->delete();

            foreach ($request->spoken_language_ids as $language_id) {
                UserSpokenLanguage::create([
                    'user_id' => $Influencer->id,
                    'spoken_language_id' => $language_id
                ]);
            }
        }

        if ($request->arts) {
            UserArt::where('user_id', $Influencer->id)->delete();
            foreach ($request->arts as $art) {
                UserArt::create([
                    'user_id' => $Influencer->id,
                    'art_key' => $art,
                    'art_name' => StaticDatabase::getArts()->where('key', '=', $art)->first()->name
                ]);
            }
        }

        // user professional detail store here
       

        // $logo = $request->file('logo');
        // if ($logo && $Influencer) {

        //     if ($Influencer->attachment && File::exists(public_path('uploads/users/' . $Influencer->attachment->name))) {
        //         unlink(public_path('uploads/users/' . $Influencer->attachment->name));
        //     }

        //     $logo_name = $logo->getClientOriginalName() . Auth::id() . '.' . $logo->getClientOriginalExtension();
        //     $logo->move(public_path('uploads/users'), $logo_name);

        //     Attachment::where('object', 'User')->where('object_id', $Influencer->id)->where('context', 'user-image')->delete();
        //     Attachment::create([
        //         'name' => $logo_name,
        //         'file_name' => $logo->getClientOriginalName() . Auth::id(),
        //         'type' => $logo->getClientOriginalExtension(),
        //         'object' => 'User',
        //         'object_id' => $Influencer->id,
        //         'context' => 'user-image'
        //     ]);

        //     SiteHelper::sendFileToSite(public_path('uploads/users') . '/' . $logo_name);
        // }

        // $profile_images = $request->file('profile_images');

        // if ($profile_images && $Influencer) {
        //     foreach ($profile_images as $profile_image) {

        //         $profile_image_name = $profile_image->getClientOriginalName() . Auth::id() . '.' . $profile_image->getClientOriginalExtension();
        //         $profile_image->move(public_path('uploads/users'), $profile_image_name);

        //         Attachment::create([
        //             'name' => $profile_image_name,
        //             'file_name' => $profile_image->getClientOriginalName() . Auth::id(),
        //             'type' => $profile_image->getClientOriginalExtension(),
        //             'object' => 'User',
        //             'object_id' => $Influencer->id,
        //             'context' => 'influencer-profile-image'
        //         ]);

        //         SiteHelper::sendFileToSite(public_path('uploads/users') . '/' . $profile_image_name);
        //     }
        // }

        if ($request->available_country_id) {
            UserAvailability::where('user_id', $Influencer->id)->where('is_default', 0)->delete();

            foreach ($request->available_country_id as $key => $country_id) {
                if ($request->availability_from_date[$key]) {
                    UserAvailability::create([
                        'user_id' => $Influencer->id,
                        'country_id' => $country_id,
                        'city_id' => $request->available_city_id[$key],
                        'availability_from_date' => Carbon::createFromFormat('d-M-Y', $request->availability_from_date[$key])->format('Y-m-d'),
                        'availability_to_date' => Carbon::createFromFormat('d-M-Y', $request->availability_to_date[$key])->format('Y-m-d'),
                    ]);
                }
            }

        }

        if ($request->main_available_from_date) {
            UserAvailability::where('user_id', $Influencer->id)->where('is_default', 1)->delete();

            UserAvailability::create([
                'user_id' => $Influencer->id,
                'country_id' => $request->country_id,
                'city_id' => $request->city_id,
                'availability_from_date' => Carbon::createFromFormat('d-M-Y', $request->main_available_from_date)->format('Y-m-d'),
                'availability_to_date' => Carbon::createFromFormat('d-M-Y', $request->main_available_to_date)->format('Y-m-d'),
                'is_default' => 1,
            ]);
        }

       

        return response()->json([
            'status' => true,
            'message' => 'Profile updated successfully'
        ]);
    }

   public function uploadProfileImageForWeb(Request $request){

     $user_id =  Auth::id();
    $Influencer = User::with(['role', 'attachment'])->find($user_id);


 $profile_image= $request->file('file');
//   dd($user_id );
        // if ($profile_images && $Influencer) {
            // foreach ($profile_images as $profile_image) {

                $profile_image_name = $profile_image->getClientOriginalName() .$user_id. '.' . $profile_image->getClientOriginalExtension();
                $profile_image->move(public_path('uploads/users'), $profile_image_name);

                Attachment::create([
                    'name' => $profile_image_name,
                    'file_name' => $profile_image->getClientOriginalName() .$user_id,
                    'type' => $profile_image->getClientOriginalExtension(),
                    'object' => 'User',
                    'object_id' => $Influencer->id,
                    'context' => 'influencer-profile-image'
                ]);
// dd('dd');

                SiteHelper::sendFileToSite(public_path('uploads/users') . '/' . $profile_image_name);
            // }

        // }

        return response()->json([
            'status' => true,
            'message' => 'Image updated successfully'
        ]);
    }

    public function forgotPassword()
    {
        // dd('dd');
        return view('auth.forgot-password');
    }

    public function forgotPasswordCheck(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ]);
        }

        $User = User::where('email', $request->email)->first();

        if (!empty($User)) {
            $password_reset_code = date('hisymd') . $User->id;
            $User->password_reset_code = $password_reset_code;
            $User->save();

            /*******PREPARE EMAIL FOR USER PASSWORD RESET********/
            $link = env('BASE_URL') . 'reset/' . $password_reset_code;
            $User->notify(new PasswordReset($password_reset_code));


            /*******END- PREPARE EMAIL FOR USER PASSWORD RESET********/

            return response()->json([
                'status' => TRUE,
                'message' => "An Email Has been sent to your email address to reset your password",
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => "Email doesn't exists!"
            ]);
        }
    }

    public function reset($password_reset_code)
    {
        $User = User::where('password_reset_code', $password_reset_code)->get()->toArray();
        if (empty($User)) {
            return redirect(env('BASE_URL') . 'home');
        }

        return view('auth.change-password')->with(['password_reset_code' => $password_reset_code]);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password_reset_code' => 'required',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::where('password_reset_code', $request->password_reset_code)->first();
        if (!empty($User)) {
            $User->password = Hash::make($request->password);
            $User->password_reset_code = '';
            $User->save();
            return response()->json([
                'status' => true,
                'message' => 'Password changed successfully'
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid password reset request'
            ]);
        }
    }

    public function resetPasswordCodeCheck(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password_reset_code' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::where('password_reset_code', $request->password_reset_code)->first();
        if (!empty($User)) {
            return response()->json([
                'status' => true,
                'message' => 'Enter New Password',
                'password_reset_code' => $request->password_reset_code
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid password reset request'
            ]);
        }
    }

    public function changePassword()
    {
        return view('auth.change-password');
    }

    public function changeOldPassword()
    {
        return view('auth.change-old-password');
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ]);
        }

        $User = User::where('id', Auth::id())->first();
        if (!empty($User)) {
            // check if old password match or not
            if (Hash::check($request->old_password, $User->password)) {
                $User->password = Hash::make($request->password);
                $User->password_reset_code = '';
                $User->save();
                return response()->json([
                    'status' => true,
                    'message' => 'Password changed successfully',
                ]);
            } else {
                return response()->json([
                    'status' => FALSE,
                    'message' => 'Incorrect old password',
                    'errors' => ['old_password' => ['Incorrect old password!']]
                ]);
            }
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid password reset request',
                'errors' => ['password' => ['Invalid password reset request!']]
            ]);
        }
    }

    public function accountSettingUpdate(Request $request)
    {

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',

            'email' => 'required',
            'phone' => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ]);
        }

        $User = User::with(['role', 'attachment'])->find(Auth::id());

        if (!$User) {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid request',
                'errors' => ['name' => ['Invalid request!']]
            ]);
        }
    

        $User->update([
            'name' => $request->input('name', NULL),
            'last_name' => $request->input('last_name', NULL),
            'phone' => $request->input('phone', NULL),
        ]);

        $logo = $request->file('image');
        //  dd($logo);
        if ($logo) {
            if ($User->attachment && File::exists(public_path('uploads/users/' . $User->attachment->name))) {
                unlink(public_path('uploads/users/' . $User->attachment->name));
            }

            $logo_name = $logo->getClientOriginalName() . Auth::id() . '.' . $logo->getClientOriginalExtension();
            
            $logo->move(public_path('uploads/users'), $logo_name);

            
            Attachment::where('object', 'User')->where('object_id', $User->id)->where('context', 'user-image')->delete();
            Attachment::create([
                'name' => $logo_name,
                'file_name' => $logo->getClientOriginalName() . Auth::id(),
                'type' => $logo->getClientOriginalExtension(),
                'object' => 'User',
                'object_id' => $User->id,
                'context' => 'influencer-profile-image-main'
            ]);

            SiteHelper::sendFileToSite(public_path('uploads/users') . '/' . $logo_name);
        }

        \session()->put('User', User::with(['role', 'attachment'])->find(Auth::id()));

        return response()->json([
            'status' => true,
            'message' => 'Updated',
        ]);
    }

    public function vendorAccountSettingUpdateBackend(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
     

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ]);
        }

        $User = User::find(Auth::id());

        if (!$User) {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid request',
                'errors' => ['name' => ['Invalid request!']]
            ]);
        }

        $dataArray = [
            'name' => $request->input('name', NULL),
            'brand_name' => $request->input('brand_name', NULL),
            'last_name' => $request->input('last_name', NULL),
            'country_id' => $request->input('country_id', NULL),
            'city_id' => $request->input('city_id', NULL),
            'phone' => $request->input('phone', NULL),
        ];

        if ($request->password) {
            $dataArray['password'] = $request->password;
        }

        $User->update($dataArray);

        \session()->put('User', $User);

        return response()->json([
            'status' => true,
            'message' => 'Account Setting Update successfully',
        ]);
    }

    public function removeProfileImage(Request $request)
    {
        Attachment::where('id', '=', $request->attachment_id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Image Removed successfully',
        ]);
    }
    //  admins method
    public function index()
    {
        if (Session::has('user')) {
            return redirect('/admin_dashboards/dashboard');
        }
        return view('admin_dashboards.auth.login');
    }

    public function editProfile()
    {
        // dd(session()->get('user') );
        $admin = User::find(session()->get('user')['id']);

      
        return view('admin_dashboards.auth.edit-profile')->with('admin', $admin);
    }

    public function loginAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::with(['role'])->where('email', $request->email)->first();

        // check if User exist or not
        if (!$User) {
            return response()->json([
                'status' => FALSE,
                'code' => 404,
                'message' => 'No user registered with this email'
            ]);
        }

        // check if password match or not
        if (Hash::check($request->password, $User->password)) {
            Session::put('user', $User);
            return response()->json([
                'status' => TRUE,
                'code' => 200,
                'message' => 'Logged in',
                'user' => $User,
                'role_key' => Role::firstWhere('id', $User->role_id)->code,
            ]);
        } else {
            return response()->json([
                'code' => 404,
                'message' => 'Invalid Password!'
            ]);
        }
    }

    public function resetPasswordAdmin()
    {
        return view('admin_dashboards.auth.change-password')->with(['menu' => 'change-password']);
    }

    public function updatePasswordAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::find(Session::get('user')->id);
        if (!empty($User)) {
            // check if old password match or not
            if (Hash::check($request->old_password, $User->password)) {
                $User->password = Hash::make($request->password);
                $User->password_reset_code = '';
                $User->save();
                return response()->json([
                    'status' => true,
                    'message' => 'Password changed successfully'
                ]);
            } else {
                return response()->json([
                    'status' => FALSE,
                    'message' => 'Incorrect old password'
                ]);
            }
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid password reset request'
            ]);
        }
    }

    // public function logout()
    // {
    //     Session::forget('user');
    //     if (Session::has('user')) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'logout failed'
    //         ]);
    //     } else {
    //         return response()->json([
    //             'status' => true,
    //             'message' => 'logout success'
    //         ]);
    //     }
    // }

    // public function forgotPassword()
    // {
    //     if (Session::has('user')) {
    //         return redirect('/');
    //     }

    //     return view('auth.forgot-password');
    // }

    public function generateForgotPasswordEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::where('email', $request->email)->first();

        if (!empty($User)) {
            $password_reset_code = date('hisymd') . $User->id;
            $User->password_reset_code = $password_reset_code;
            $User->save();

            /*******PREPARE EMAIL FOR USER PASSWORD RESET********/
            $link = env('BASE_URL') . 'reset/' . $password_reset_code;
            $User->notify(new PasswordReset($password_reset_code));


            /*******END- PREPARE EMAIL FOR USER PASSWORD RESET********/

            return response()->json([
                'status' => TRUE,
                'message' => "An Email Has been sent to your email address to reset your password",
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => "Email doesn't exists!"
            ]);
        }
    }

    public function checkForgotPasswordCode($password_reset_code)
    {
        $User = User::where('password_reset_code', $password_reset_code)->first();
        if (empty($User)) {
            return redirect(env('BASE_URL'));
        }

        return view('auth.reset-password')->with(['password_reset_code' => $password_reset_code]);
    }

    public function storeNewPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password_reset_code' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $User = User::where('password_reset_code', $request->password_reset_code)->first();
        if (!empty($User)) {
            $User->password = Hash::make($request->password);
            $User->password_reset_code = '';
            $User->save();
            return response()->json([
                'status' => true,
                'message' => 'Password changed successfully'
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid password reset request'
            ]);
        }
    }

    public function editProfileBackend(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ]);
        }
        $login_user_id = \session()->get('user')['id'];

        $User = User::with(['role', 'attachment'])->find($login_user_id);

        if (!$User) {
            return response()->json([
                'status' => FALSE,
                'message' => 'Invalid request',
                'errors' => ['name' => ['Invalid request!']]
            ]);
        }

        $User->update([
            'name' => $request->input('name', NULL),
            'last_name' => $request->input('last_name', NULL),
            'phone' => $request->input('phone', NULL),
        ]);

        $logo = $request->file('image');
        if ($logo) {
            if ($User->attachment && File::exists(public_path('uploads/users/' . $User->attachment->name))) {
                unlink(public_path('uploads/users/' . $User->attachment->name));
            }

            $logo_name = $logo->getClientOriginalName() . $login_user_id . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/users'), $logo_name);

            Attachment::where('object', 'User')->where('object_id', $User->id)->delete();
            Attachment::create([
                'name' => $logo_name,
                'file_name' => $logo->getClientOriginalName() . $login_user_id,
                'type' => $logo->getClientOriginalExtension(),
                'object' => 'User',
                'object_id' => $User->id,
                'context' => $User->role->code . '-image'
            ]);
        }

        \session()->put('user', User::with(['role', 'attachment'])->find($login_user_id));

        return response()->json([
            'status' => true,
            'message' => 'Account Setting Update successfully',
        ]);
    }
}
