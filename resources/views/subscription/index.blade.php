@extends('layout.master')
<style>
    .li{
        margin-bottom: 7px !important;
    }
    .fa-check-circle,.fa-times-circle{
        margin-right: 9px !important;

    }
    ::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
}


/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}
#select2-language_dropdown-container {
            margin-left: -22px !important;
        }

/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}
.terms-h{
    color: blue;
    margin-bottom: 2.5rem !important;
}
.plan-h{
    color: goldenrod; 
}
.plan-h:hover{
    color: blue; 
}

    </style>
@section('content')
<div class="content">
<div class="container"  style="padding-top:30px;">
<h2 class="terms-h text-center ">Select Your Plan</h2>
<!------->
<div class="col-md-12">
    
    <div class="row">
    <div class="col-md-4 mx-auto mt-1" >
        <form action="/session" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type='hidden' name="total" value="299">
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;padding-bottom:17px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
       
    <span class="plan-h">Star</span>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;"><b>$ 299</b></h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">1 month</div>
    </div>
    <hr>
    <div class="row mx-auto">
    <ul class="circle-check mx-auto" style="list-style-type:none;height:200px;padding-left:30px;">
        <li class="li"><i class="fa fa-check-circle"></i>  Active: 30 days</li>
        <li class="li"><i class="fa fa-check-circle"></i>  View Categories: 30+</li>
        <li class="li"><i class="fa fa-check-circle"></i>  View Profiles: Full Access</li>
        <li class="li"><i class="fa fa-check-circle"></i>  Travel Calendars: Worldwide</li>
        <li class="li"><i class="fa fa-check-circle"></i>  View Influencers & Talents: Globally</li>
        <li class="li"><i class="fa fa-check-circle"></i>  Hire Influencers & Talents: Unlimited</li>
        <li class="li"><i class="fa fa-check-circle"></i>  Influencers & Talents Collaboration: Unlimited</li>
        <li class="li" style="white-space: nowrap;"><i class="fa fa-check-circle"></i>  View Influencers: Verified, 50M+ Followers, Celebrities</li>
    
        <li class="li" style="display:ruby-text; white-space: nowrap;"><i class="fa fa-check-circle"></i>  Access Socials: <span style="display: inline-flex;">Instagram, Twitter, Facebook, Pinterest,<br>&nbsp;Snapchat, Tik Tok, You Tube, Website </span></li>
</li>
        {{-- <li><i class="fa fa-times-circle text-danger"></i> Featured Days: <b>No</b></li> --}}
    </ul>
    </div>
    <div class="mx-auto" style="text-align:center;margin-top: 130px;">
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
            <input type='hidden' name="total" value="769">
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;padding-bottom:17px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
        <div style="text-align:center;">
        <span class="plan-h">Gold</span>
        </div>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;"><b>$ 769</b>
         {{-- <b>(Save 15%)</b> --}}
        </h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">3 Months</div>
    </div>
    <hr>
    <div class="row mx-auto">
    <ul class="circle-check" style="list-style-type:none;height:200px;padding-left:30px;">
        <li class="li"><i class="fa fa-check-circle"></i>  Active: 90 days</li>
        <li class="li"><i class="fa fa-check-circle"></i>  View Categories: 30+</li>
        <li class="li"><i class="fa fa-check-circle"></i>  View Profiles: Full Access</li>
        <li class="li"><i class="fa fa-check-circle"></i>  Travel Calendars: Worldwide</li>
        <li class="li"><i class="fa fa-check-circle"></i>  View Influencers & Talents: Globally</li>
        <li class="li"><i class="fa fa-check-circle"></i>  Hire Influencers & Talents: Unlimited</li>
        <li class="li"><i class="fa fa-check-circle"></i>  Influencer & Talent Collaborations: Unlimited</li>
        <li class="li" style="white-space: nowrap;"><i class="fa fa-check-circle"></i>  View Influencers: Verified, 50M+ Followers, Celebrities</li>
        <li class="li" style="display:ruby-text; white-space: nowrap;"><i class="fa fa-check-circle"></i>  Access Socials: <span style="display: inline-flex;">Instagram, Twitter, Facebook, Pinterest,<br>&nbsp;Snapchat, Tik Tok, You Tube, Website </span></li>
</li>
    </ul>
    </div>
    <div class="mx-auto" style="text-align:center;margin-top: 130px;">
        <input type='hidden' name="productname" value="Gold Plan">
        <a href="">
            <button class="btn bt-plan" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> SELECT PLAN</button>
               
    </a>
    </div>
    </div>
</form>
    </div>


    <div class="col-md-4 mx-auto mt-1" >
        <form action="/session" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type='hidden' name="total" value="1459">
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;padding-bottom:17px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
    <span class="plan-h">Pro</span>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;">
        <b>$ 1,459</b> 
        {{-- <b>(Save 20%)</b>  --}}
    </h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">6 Months</div>
    </div>
    <hr>
    <div class="row mx-auto">
    <ul class="circle-check" style="list-style-type:none;height:200px;padding-left:30px;">
        <li class="li"><i class="fa fa-check-circle"></i>  Active: 180 Days</li>
        <li class="li"><i class="fa fa-check-circle"></i>  View Categories: 30+</li>
        <li class="li"><i class="fa fa-check-circle"></i>  View Profiles: Full Access</li>
        <li class="li"><i class="fa fa-check-circle"></i>  Travel Calendars: Worldwide</li>
        <li class="li"><i class="fa fa-check-circle"></i>  View Influencers & Talents: Globally</li>
        <li class="li"><i class="fa fa-check-circle"></i>  Hire Influencers & Talents: Unlimited <li>
        <li class="li"><i class="fa fa-check-circle"></i>  Influencer & Talent Collaborations: Unlimited</li>
        <li class="li" style="white-space: nowrap;"><i class="fa fa-check-circle"></i>  View Influencers: Verified, 50M+ Followers, Celebrities</li>
        {{-- <li><i class="fa fa-check-circle"></i>  Influencer & Talent Collaborations: Unlimited</li> --}}
        <li class="li" style="display:ruby-text; white-space: nowrap;"><i class="fa fa-check-circle"></i>  Access Socials: <span style="display: inline-flex;">Instagram, Twitter, Facebook, Pinterest,<br>&nbsp;Snapchat, Tik Tok, You Tube, Website </span></li>

    </ul>
    </div>
    <div class="mx-auto" style="text-align:center;margin-top: 130px;">
        <input type='hidden' name="productname" value="Pro Plan">
        <a href="">
            <button class="btn bt-plan" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> SELECT PLAN</button>
               
    </a>
    </div>
    </div>
    </div>
</form>
    </div>
</div>
<!-------->
</div>
</div>
@endsection

@section('page_scripts')

@endsection