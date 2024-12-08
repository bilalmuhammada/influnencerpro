<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function index()
    {
        return view('roles.list')->with(['menu' => 'roles']);
    }

    public function all()
    {
        $roles = Role::latest()->get();

        if ($roles->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'message' => '',
                'data' => $roles
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'No Record Found'
        ]);
    }

    public function edit($role_id = '')
    {
        if ($role_id != '') {
            $role = Role::find($role_id);

            if (!empty($role)) {
                return response()->json([
                    'status' => true,
                    'message' => '',
                    'data' => $role
                ]);
            }
        }

        return response()->json([
            'status' => false,
            'message' => 'Invalid request'
        ]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'role_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $role = Role::find($request->role_id);
        Role::where('id', $request->role_id)->update([
            'name' => $request->name,
            'notes' => $request->notes
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Role updated successfully'
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'role_key' => 'required|unique:roles',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $role_key = strtolower($request->role_key);
        $role_key = str_replace( ' ', '_', $role_key);

        Role::create([
            'name' => $request->name,
            'role_key' => $role_key,
            'notes' => $request->notes
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Role created successfully'
        ]);
    }

    public function delete($role_id = '')
    {
        if ($role_id != '') {
            $role = Role::find($role_id);
            if (!empty($role)) {
                $role->delete();
                return response()->json([
                    'status' => true,
                    'message' => 'Role Deleted Successfully',
                ]);
            }
        }

        return response()->json([
            'status' => false,
            'message' => 'Invalid request'
        ]);
    }
}
