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
.terms-h{
    color: blue;
}
.bt-plan{
background: goldenrod !important;
}
.plan-h{
    color: goldenrod; 
}
.plan-h:hover{
    color: blue; 
}
.mb-4{
    margin-bottom: 2.5rem !important;
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
            <input type='hidden' name="total" value="49">
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
        
    <span class="plan-h">Star</span>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;" ><b>$ 49</b></h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">1 Month</div>
    </div>
    <hr>
    <div class="row mx-auto">
    <ul class="circle-check mx-auto" style="list-style-type:none;height:200px;padding-left:30px;">
        <li><i class="fa fa-check-circle"></i>  Stay  Active: 30 Days</li>
        <li><i class="fa fa-check-circle"></i>  Mention your Target Fee  </li>
        <li><i class="fa fa-check-circle"></i>  Manage your Travel-Calendar </li>
        <li><i class="fa fa-check-circle"></i>  Make Direct Deals with Brands </li>
        <li><i class="fa fa-check-circle"></i>  Receive Direct Chats from Brands  </li>
        <li><i class="fa fa-check-circle"></i>  Showcase all your Social Platforms</li>
        <li><i class="fa fa-check-circle"></i>  Manage your Availability-Calendar</li>
       
        <li><i class="fa fa-check-circle"></i>  Make Direct Collaborations with Brands</li>
        <li><i class="fa fa-check-circle"></i>  Receive Direct Deals in your Travelling-Countries</li>
        {{-- <li><i class="fa fa-times-circle text-danger"></i> Featured Days: <b>No</b></li> --}}
    </ul>
    </div>
    <div class="mx-auto" style="text-align:center;margin-top: 90px;">
    {{-- <a href=""> --}}
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
            <input type='hidden' name="total" value="129">
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
        <div style="text-align:center;">
        <span class="plan-h">Gold</span>
        </div>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;" id="payment"> <b>$ 129</b>
         {{-- <b>(Save 15%)</b> --}}
        </h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">3 Months</div>
    </div>
    <hr>
    <div class="row mx-auto">
    <ul class="circle-check" style="list-style-type:none;height:200px;padding-left:30px;">
        <li><i class="fa fa-check-circle"></i>  Stay  Active: 90 Days</li>
        <li><i class="fa fa-check-circle"></i>  Mention your Target Fee  </li>
        <li><i class="fa fa-check-circle"></i>  Manage your Travel-Calendar </li>
        <li><i class="fa fa-check-circle"></i>  Make Direct Deals with Brands </li>
        <li><i class="fa fa-check-circle"></i>  Receive Direct Chats from Brands  </li>
        <li><i class="fa fa-check-circle"></i>  Showcase all your Social Platforms </li>
        <li><i class="fa fa-check-circle"></i>  Manage your Availability-Calendar </li>

        <li><i class="fa fa-check-circle"></i>  Make Direct Collaborations with Brands</li>
        <li><i class="fa fa-check-circle"></i>  Receive Direct Deals in your Travelling-Countries</li>
    </ul>
    </div>
    <div class="mx-auto" style="text-align:center;margin-top: 90px;">
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
            <input type='hidden' name="total" value="229">
    <div class="mx-auto" style="border:2px solid #A17A4E;padding:0px;padding-bottom:10px;background:;border-radius:5px;">
    <div  class="mx-auto text-center p-2">
    <span class="plan-h">Pro</span>
    <div class="mx-auto" style="border:2px solid #A17A4E;width:40px;text-align:center;margin-top:-10px;"></div>
    <h6 style="padding-top:10px;">
        <b>$ 229</b>
        {{-- <b>(Save 20%)</b>  --}}
    </h6>
    <div class="mx-auto text-muted" style="text-align:center;margin-top:-10px;">6 Months</div>
    </div>
    <hr>
    <div class="row mx-auto">
    <ul class="circle-check" style="list-style-type:none;height:200px;padding-left:30px;">
        <li><i class="fa fa-check-circle"></i>  Stay  Active: 180 Days</li>
        <li><i class="fa fa-check-circle"></i>  Mention your Target Fee  </li>
        <li><i class="fa fa-check-circle"></i>  Manage your Travel-Calendar </li>
        <li><i class="fa fa-check-circle"></i>  Make Direct Deals with Brands </li>
        <li><i class="fa fa-check-circle"></i>  Receive Direct Chats from Brands  </li>
        <li><i class="fa fa-check-circle"></i>  Showcase all your Social Platforms</li>
        <li><i class="fa fa-check-circle"></i>  Manage your Availability-Calendar  </li>

        <li><i class="fa fa-check-circle"></i>  Make Direct Collaborations with Brands</li>
        <li><i class="fa fa-check-circle"></i>  Receive Direct Deals in your Travelling-Countries</li>

    </ul>
    </div>
    <div class="mx-auto" style="text-align:center;margin-top: 90px;">
        <input type='hidden' name="productname" value="Pro Plan">
        <a href="">
            <button class="btn bt-plan" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> SELECT PLAN</button>
            
    </a>
    </div>
    </div>
        </form>
    </div>
    </div>
</div>
<!-------->
</div>
</div>
@endsection

@section('page_scripts')

@endsection