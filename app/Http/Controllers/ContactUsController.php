<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\ContactUs;
class ContactUsController extends Controller
{
    public function index()
    {
       
        return view('contact-us');
    }

    public function store(Request $request)
    {
        // Validate the form data
        // $validator = Validator::make($request->all(), [
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'mobile' => 'required|string|regex:/^\+?\d*$/',
        //     'country_id' => 'required|exists:countries,id',
        //     'city_id' => 'required|exists:cities,id',
        //     'iam' => 'required|in:brands,influncer',
        //     'reason' => 'required|in:collaboration,suggestion,complain,reportbrand,reportinfluncer',
        //     'subject' => 'required|string|max:255',
        //     'message' => 'required|string',
        //     // 'attachments.*' => 'file|max:2048|mimes:jpg,jpeg,png,pdf,doc,docx',
        // ]);

        // // Handle validation failure
        // if ($validator->fails()) {
        //     return response()->json([
        //         'status' => false,
        //         // 'message' => 'Form submitted successfully!',
        //     ]);
        // }

        // Handle file uploads
        $attachments = [];
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $filePath = $file->store('attachments', 'public');
                $attachments[] = $filePath;
            }
        }

        // Save data (Assuming you have a model `FormSubmission`)
        $formData = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('mobile'),
            'country' => $request->input('country_id'),
            'city' => $request->input('city_id'),
            'iam' => $request->input('iam'),
            'reason' => $request->input('reason'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'attachments' => json_encode($attachments), // Save as JSON in the database
        ];

        // Assuming `FormSubmission` is a model for storing form data
        Contactus::create($formData);

        return response()->json([
            'status' => true,
            'message' => 'Form submitted successfully!',
        ]);

   
    }



}
