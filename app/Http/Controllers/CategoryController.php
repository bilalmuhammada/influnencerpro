<?php

namespace App\Http\Controllers;

use App\Helpers\SiteHelper;
use App\Models\Attachment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin_dashboards.categories.list')->with(['menu' => 'categories']);
    }

    public function all()
    {
        $categories = Category::latest()->get();

        if ($categories->isNotEmpty()) {
            return response()->json([
                'status' => true,
                'message' => '',
                'data' => $categories
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
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => FALSE,
                'message' => $validator->errors()->first()
            ]);
        }

        $image_name = '';
        $image = $request->file('image');
        if ($image) {
            $file_name = Str::random(10);
            $type = $image->getClientOriginalExtension();
            $image_name = $file_name . '.' . $type;
            $image->move(public_path('uploads/categories'), $image_name);

            SiteHelper::sendFileToSite(public_path('uploads/categories') . '/' . $file_name . '.' . $type, 'categories');
        }

        $status = 'active'; //inactive
        if ($request->status) {
            $status = 'active';
        }

        $Category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $status,
        ]);

        if ($Category && $image) {
            Attachment::create([
                'name' => $image_name,
                'file_name' => $file_name,
                'type' => $type,
                'object' => 'Category',
                'object_id' => $Category->id,
                'context' => 'category-image'
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Category created successfully'
        ]);
    }

    public function edit($category_id = '')
    {
     
        if ($category_id != '') {
            $category = Category::find($category_id);

           
            if (!empty($category)) {
                return response()->json([
                    'status' => true,
                    'message' => '',
                    'data' => $category
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
            'category_id' => 'required|exists:categories,id',
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
            $image->move(public_path('uploads/categories'), $image_name);
        } else {
            $image_name = '';
        }

        $status = 'active'; //inactive
        if ($request->status) {
            $status = 'active';
        }

        $Category = Category::with(['attachment'])->find($request->category_id);
        $Category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $status,
        ]);

        if ($Category && $image) {
            if ($Category->attachment && File::exists(public_path('uploads/categories/' . $Category->attachment->name))) {
                unlink(public_path('uploads/categories/' . $Category->attachment->name));
            }

            Attachment::where('object', 'Category')->where('object_id', $Category->id)->delete();
            Attachment::create([
                'name' => $image_name,
                'file_name' => $file_name,
                'type' => $type,
                'object' => 'Category',
                'object_id' => $Category->id,
                'context' => 'category-image'
            ]);

            SiteHelper::sendFileToSite(public_path('uploads/categories') . '/' . $file_name . '.' . $type, 'categories');
        }

        return response()->json([
            'status' => true,
            'message' => 'Category updated successfully'
        ]);
    }

    public function delete($category_id = '')
    {
        if ($category_id != '') {
            $category = Category::find($category_id);
            if (!empty($category)) {

                if ($category->attachment && File::exists(public_path('uploads/categories/' . $category->attachment->name))) {
                    unlink(public_path('uploads/categories/' . $category->attachment->name));
                }

                $category->attachment->delete();
                $category->delete();
                return response()->json([
                    'status' => true,
                    'message' => 'Category Deleted Successfully',
                ]);
            }
        }

        return response()->json([
            'status' => false,
            'message' => 'Invalid request'
        ]);
    }

    public function changeStatus(Request $request)
    {
        if (!empty($request->status)) {
            $category = Category::find($request->category_id);
            $category->status = 'inactive';
            if ($request->status == 'on') {
                $category->status = 'active';
            }
            $category->save();
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
