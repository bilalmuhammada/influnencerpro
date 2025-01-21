<?php

namespace App\Http\Controllers;

use App\Models\State;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
class GeneralController extends Controller
{
    public function subscription()
    {
        session(['current_url' => url()->current()]);
        return view('subscription.index');
    }
    public function influncersubscription()
    {
        session(['current_url' => url()->current()]);

        return view('subscription.influncerindex');
    }
    public function checkout()

    {
        $url=session('current_url');
        
        $path = parse_url($url, PHP_URL_PATH); // Get the path component of the URL
        $segments = explode('/', rtrim($path, '/')); // Split the path into segments and remove trailing slash

        $lastSegment = end($segments);
        if($lastSegment==="subscriptions"){
            return view('subscription.index');
        }else{
            return view('subscription.influncerindex');
        }
        return view('subscription.checkout');
    }
    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        $productname = $request->get('productname');
        $totalprice = $request->get('total');
         $two0 = "00";
        $total = "$totalprice$two0";
 
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);
 
        return redirect()->away($session->url);
    }
 
    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }

    public function getStatesByNationality(Request $request)
    {
        $states = getStateByCountryId($request->nationality_id);

        return response()->json([
            'status' => true,
            'data' => $states
        ]);
    }

    public function getStatesByMultiSelectNationality(Request $request)
    {
        $states = State::whereIn('country_id', $request->nationality_id)->get();

        return response()->json([
            'status' => true,
            'data' => $states
        ]);
    }

    public function getCitiesByState(Request $request)
    {
        $cities = getCityByStateId($request->state_id);

        return response()->json([
            'status' => true,
            'data' => $cities
        ]);
    }

    public function getCitiesByCountry(Request $request)
    {
        $state_ids = getStateByCountryId($request->nationality_id)->pluck('id');

        
        $cities = getCityByStateIds($state_ids);

        return response()->json([
            'status' => true,
            'data' => $cities
        ]);
    }

    public function getCountries()
    {
        return response()->json([
            'status' => true,
            'data' => getCountries()
        ]);
    }

    public function uploadFileSendFromAdminPanel(Request $request)
    {
        // Get the data from the request
        $data = $request->all();
        // Extract the file name and file data from the data array
        $file_name = $data['file_name'];
        $file_data = base64_decode($data['file_data']);
        // Define the destination folder on the server
        $live_server_folder = public_path("uploads/") . $request->folder_name;
        // Save the file on the server
        if (file_put_contents($live_server_folder . DIRECTORY_SEPARATOR . $file_name, $file_data)) {
            return true;
        } else {
            return false;
        }
    }
}
