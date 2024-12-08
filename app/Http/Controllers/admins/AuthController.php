<?php

namespace App\Http\Controllers;

use App\Helpers\SiteHelper;
use App\Models\Attachment;
use App\Models\Role;
use App\Models\User;
use App\Notifications\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class AuthController extends Controller
{
    public function index()
    {
        if (Session::has('user')) {
            return redirect('/dashboard');
        }
        return view('auth.login');
    }

    public function editProfile()
    {
        $admin = User::find(session()->get('user')['id']);
        return view('auth.edit-profile')->with('admin', $admin);
    }

    public function login(Request $request)
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

    public function resetPassword()
    {
        return view('auth.change-password')->with(['menu' => 'change-password']);
    }

    public function updatePassword(Request $request)
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

    public function logout()
    {
        Session::forget('user');
        if (Session::has('user')) {
            return response()->json([
                'status' => false,
                'message' => 'logout failed'
            ]);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'logout success'
            ]);
        }
    }

    public function forgotPassword()
    {
        if (Session::has('user')) {
            return redirect('/');
        }

        return view('auth.forgot-password');
    }

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
