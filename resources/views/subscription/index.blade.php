@extends('layout.master')
<style>
    li{
        margin-bottom: 7px !important;
    }
    .fa-check-circle,.fa-times-circle{
        margin-right: 9px !important;

    }
    ::-webkit-scrollbar {
  width: 12px; /* You can adjust this value based on your preference */
}

/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}

/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}
    </style>
@section('content')
<div class="content">
<div class="container"  style="margin-top: 60px;border-top:1px solid #eee;padding-top:30px;">
<h2 class="terms-h text-center mb-4">Select Your Plan</h2>
<!------->
<div class="col-md-12">
    
    <div class="row">
    <div class="col-md-4 mx-auto mt-1" >
        <form action="/session" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type='hidden' name="total" value="199">
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
       
    <span class="plan-h">Star</span>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;"><b>$ 199</b></h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">1 month</div>
    </div>
    <hr>
    <div class="row mx-auto">
    <ul class="circle-check mx-auto" style="list-style-type:none;height:200px;padding-left:30px;">
        <li><i class="fa fa-check-circle"></i>  Active: <b>30 days</b></li>
        <li><i class="fa fa-check-circle"></i>  Chat Influencers: <b>150</b></li>
        <li><i class="fa fa-check-circle"></i>  Favorite Influencers: <b>200</b></li>
        <li><i class="fa fa-check-circle"></i>  View Influencers: <b>1 – 500K Followers</b></li>
        <li><i class="fa fa-check-circle"></i>  View Influencers: <b> Based Country </b></li>
        <li><i class="fa fa-check-circle"></i>  Access Socials: <b>Instagram, Facebook, Snapchat</b></li>
        {{-- <li><i class="fa fa-times-circle text-danger"></i> Featured Days: <b>No</b></li> --}}
    </ul>
    </div>
    <div class="mx-auto" style="text-align:center;margin-top: 90px;">
        <input type='hidden' name="productname" value="Star Plan">
    <a href="">
        <button class="btn bt-plan" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> SELECT PLAN</button>
                              
    {{-- <button class="btn bt-plan">SELECT PLAN</button> --}}
    </a>
    </div>
    </div>
</form>
    </div>

    <div class="col-md-4 mx-auto mt-1" >
        <form action="/session" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type='hidden' name="total" value="599">
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
        <div style="text-align:center;">
        <span class="plan-h">Gold</span>
        </div>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;"><b>$ 599</b>
         {{-- <b>(Save 15%)</b> --}}
        </h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">3 Months</div>
    </div>
    <hr>
    <div class="row mx-auto">
    <ul class="circle-check" style="list-style-type:none;height:200px;padding-left:30px;">
        <li><i class="fa fa-check-circle"></i>  Active: <b>90 days</b></li>
        <li><i class="fa fa-check-circle"></i>  Chat Influencers: <b>500</b></li>
        <li><i class="fa fa-check-circle"></i>  Favorite Influencers: <b>700</b></li>
        <li><i class="fa fa-check-circle"></i>  View Influencers: <b>1 – 1M Followers</b></li>
        <li><i class="fa fa-check-circle"></i>  View Influencers: <b>  Based Country  </b></li>
        <li><i class="fa fa-check-circle"></i>  View Influencers: <b>  Worldwide </b></li>
        <li><i class="fa fa-check-circle"></i>  Access Socials: <b style="display: inline-flex;">Instagram, Facebook, Snapchat,<br> Tik Tok</b></li>
    </ul>
    </div>
    <div class="mx-auto" style="text-align:center;margin-top: 90px;">
        <input type='hidden' name="productname" value="Gold Plan">
        <a href="">
            <button class="btn bt-plan" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> SELECT PLAN</button>
               
    </a>
    </div>
    </div>
    </div>


    <div class="col-md-4 mx-auto mt-1" >
        <form action="/session" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type='hidden' name="total" value="1299">
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
    <span class="plan-h">Pro</span>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;">
        <b>$ 1299</b> 
        {{-- <b>(Save 20%)</b>  --}}
    </h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">6 Months</div>
    </div>
    <hr>
    <div class="row mx-auto">
    <ul class="circle-check" style="list-style-type:none;height:200px;padding-left:30px;">
        <li><i class="fa fa-check-circle"></i>  Active: <b>180 Days</b></li>
        <li><i class="fa fa-check-circle"></i>  Chat Influencers: <b>Unlimited</b></li>
        <li><i class="fa fa-check-circle"></i>  Favorite Influencers: <b>Unlimited</b></li>
        <li><i class="fa fa-check-circle"></i>  View Influencers: <b>Unlimited Followers</b></li>
        <li><i class="fa fa-check-circle"></i>  View Influencers: <b>  Based Country  </b></li>
        <li><i class="fa fa-check-circle"></i>  Celebrity Influencers: <b>  Worldwide </b> <li>
        <li><i class="fa fa-check-circle"></i>  View Influencers: <b>  Worldwide </b></li>
       
        <li><i class="fa fa-check-circle"></i>  Access Socials: <b style="display: inline-flex;">Instagram, Facebook, Snapchat,<br> Tik Tok,You Tube, Website</b></li>

    </ul>
    </div>
    <div class="mx-auto" style="text-align:center;margin-top: 90px;">
        <input type='hidden' name="productname" value="Pro Plan">
        <a href="">
            <button class="btn bt-plan" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> SELECT PLAN</button>
               
    </a>
    </div>
    </div>
    </div>
    </div>
</div>
<!-------->
</div>
</div>
@endsection

@section('page_scripts')

@endsection