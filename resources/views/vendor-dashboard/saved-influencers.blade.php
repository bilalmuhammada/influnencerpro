@extends('layout.master')
@section('content')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 26px;
            height: 10px;

        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            top: -3px;
            /* left: 4px; */
            /* bottom: 1px; */
            background-color: #0504aa;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(16px);
            -ms-transform: translateX(16px);
            transform: translateX(16px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .influencerdetail {
            /* display: none;
            opacity:0.9;
            width:200px;
            position: absolute; */
            /* height: 270px; */
        }

        .avatar-one:hover .influencerdetail {
            top: 0;
            opacity: 1;
            visibility: visible;
            height: 100%
        }

        .avatar-one .influencerdetail {
            position: absolute;
            /* left: 0; */
            /* top: 0; */
            /* padding: 5px;  */
            /* padding-left:3px; */
            /* padding-right:3px; */
            z-index: 1;
            height: 200px;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            transition: all 0.35s ease-in-out;
            width: 100%;
            visibility: hidden;
            opacity: 0
        }

        .avatar-one .influencerdetail::after {
            position: absolute;
            left: 0;
            top: 0;
            content: "";
            height: 200px;
            width: 100%;
            background: #000;
            z-index: -1;
            /* border-radius: 15px; */
            opacity: 0.8;
            -webkit-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out
        }

        .filled {
            color: #997045 !important;
        }

        .middle-search:focus {
            border: none !important;
            outline: none !important;
        }

        tr th {
            padding: 10px;
        }

        tr td {
            padding: 10px;
        }

        .select-group {
            background: #FFFFFF;
            box-shadow: 0px 2px 24px rgba(196, 196, 196, 0.25);
            border-radius: 5px;
            padding: 15px;
            margin: 15px 0px 19px;
        }

        .select-group .form-select {
            background-color: #FBFBFB;
            border: 0;
            height: 45px;
        }

        .select-group .form-select:focus {
            box-shadow: none;
        }

        .down-load {
            margin-left: auto;
        }

        .down-load .btn-primary {
            min-width: 118px;
            background: #1B2559;
            border-radius: 5px;
            color: #fff;
            border: 0;
            padding: 10px 15px;
        }

        ul li {
            list-style: none;
        }

        .subscribe-employe ul li {
            padding-bottom: 10px;
            position: relative;
        }

        .subscribe-employe ul {
            padding: 0;
            margin: 0;
            display: flex;
        }

        .subscribe-employe ul .active a {
            color: #0d6efd;
        }

        .subscribe-employe ul li a {
            padding: 0px 20px;
            font-size: 18px;
            color: #131523;
            font-weight: 600;

        }
        .ui-state-default  {
        border: 0px !important;
    background-color: white !important; /* Change this to the desired color */
  }
  #ui-datepicker-div{
width: 195px !important;
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

    <section style="border-top:2px solid #eee;padding-top:90px;">
        <br/>
        <div class="row">
            <div class="col-md-12 ">
                <!-- <div class="input-box text-center mx-auto"
                     style="border:none;height:55px;width:570px;border:1px solid #999;border-radius:30px;text-align:center;">
                    <input type="text" class="middle-search" placeholder=" Search..."
                           style="border:none;height:50px;width:500px;"><i class="fa fa-search"></i>
                </div> -->
            </div>
        </div>
    </section>
    <br/>
    <div class="container">
        <div class="col-md-12">
            <div class="row" style="padding-left:25px;padding-right:25px;">
                <div class="col-md-10">
                    <form action="{{ env('BASE_URL') }}vendor/favourite-influencers" METHOD="GET">
                        <div class="row">
                            <div class="col-lg-2 col-md-6">
                                <input type="text" class="form-control datepicker from_date" name="from_date" style="width:115%"
                                       placeholder="From Date">
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <input type="text" class="form-control datepicker to_date" name="to_date" style="width:115%;margin-left: 14px;" placeholder="To Date">
                            </div>
                            <div class="col-lg-2 col-md-6" style="margin-top:5px;     margin-left: 31px;"  >                          
                                <button class="btn btn-primary filter" type="submit">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="col-md-2" style="text-align:right;">
                    <a href="{{ env('BASE_URL') }}download-csv-favourite-influencer" class="btn btn-primary filter">Downssload</a>
                </div> --}}
            </div>

        </div>
    </div>
    <br/>
    <div class="container mx-auto">
        <div class="col-md-12 mx-auto">
            <div class="row mx-auto">


                @forelse($influencers as $influencer)
                    <div class="col-md-2 col-lg-2 col-xl-2" style="margin-left:20px;margin-right:20px;">
                        <div class="card avatar-one"
                             style="border:0px solid #997045;width:220px;box-shadow:1px 1px 1px 1px #eee;">
                            <a href="{{ env('BASE_URL') }}influencers/{{ $influencer->id }}/detail">
                                <div class="start"
                                     style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:225px;">
                                    <i class="fas fa-check-circle text-success verified" data-id="{{ $influencer->id }}"
                                       style="padding:7px;border-radius:50%;"></i>
                                    &nbsp;
                                </div>
                                <div class="influencerdetail" id="">
                                    <div class="start"
                                         style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:220px;">
                                        <i class="fas fa-check-circle text-success verified"
                                           style="padding:7px;border-radius:50%;" data-id="{{ $influencer->id }}"></i>
                                    </div>
                                    <br>
                                    {{--<span
                                        style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; {{ $influencer->state ? $influencer->state->name : '' }}</span><br/>--}}
                                    {{--<span
                                        style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; {{ $influencer->user_professional_detail && $influencer->user_professional_detail->category ? $influencer->user_professional_detail->category->name : '' }}</span>--}}
                                    <ul style="list-style-type: none;margin-top:90px;">
                                        @php
                                            $instagram = getInfluencerSocialMediaProfileByTypeAndId('instagram', $influencer->id);
                                            $tiktok = getInfluencerSocialMediaProfileByTypeAndId('tiktok', $influencer->id);
                                            $facebook = getInfluencerSocialMediaProfileByTypeAndId('facebook', $influencer->id);
                                            $twitter = getInfluencerSocialMediaProfileByTypeAndId('twitter', $influencer->id);
                                            $youtube = getInfluencerSocialMediaProfileByTypeAndId('youtube', $influencer->id);
                                            $snapchat = getInfluencerSocialMediaProfileByTypeAndId('snapchat', $influencer->id);
                                        @endphp
                                        @if($instagram)
                                            <li style=" display: inline-block;color:#fff;">&nbsp;&nbsp;
                                                <span
                                                    style="font-size: 12px;text-align:center;"><a
                                                        href=""><img
                                                            src="{{ asset('assets/img/social-icon/insta.png') }}" alt=""
                                                            width="20px"></a> <br> <div class="text-center"
                                                                                        style="font-size:11px;">{{ formatNumber($instagram ? $instagram->followers :  0) }}</div></span>
                                            </li> &nbsp;
                                        @endif
                                        @if($twitter)
                                            <li style=" display: inline-block;color:#fff;"><span
                                                    style="font-size: 12px;text-align:center;"><a href=""><img
                                                            src="{{ asset('assets/img/social-icon/twitter.png') }}"
                                                            alt=""
                                                            width="20px"></a> <div class="text-center"
                                                                                   style="font-size:11px;">{{ formatNumber($twitter ? $twitter->followers :  0) }}</div></span>
                                            </li> &nbsp;
                                        @endif
                                        @if($youtube)
                                            <li style=" display: inline-block;color:#fff;"><span
                                                    style="font-size: 12px;text-align:center;"><a href=""><img
                                                            src="{{ asset('assets/img/social-icon/youtube.png') }}"
                                                            alt=""
                                                            width="20px"></a> <div class="text-center"
                                                                                   style="font-size:11px;">{{ formatNumber($youtube ? $youtube->followers :  0) }}</div></span>
                                            </li> &nbsp;
                                        @endif
                                        @if($tiktok)
                                            <li style=" display: inline-block;color:#fff;"><span
                                                    style="font-size: 12px;"><a
                                                        href=""><img
                                                            src="{{ asset('assets/img/social-icon/tiktok.png') }}"
                                                            alt=""
                                                            width="20px"></a> <div class="text-center"
                                                                                   style="font-size:11px;">{{ formatNumber($tiktok ? $tiktok->followers : 0) }}</div></span>
                                            </li>&nbsp;
                                        @endif

                                        @if($facebook)
                                            <li style=" display: inline-block;color:#fff;"><span
                                                    style="font-size: 12px;"><a href=""><img
                                                            src="{{ asset('assets/img/social-icon/fb.png') }}"
                                                            alt="" width="20px"></a> <div class="text-center"
                                                                                          style="font-size:11px;">{{ formatNumber($facebook ? $facebook->followers : 0) }}</div></span>
                                            </li> &nbsp;
                                        @endif
                                        @if($snapchat)
                                            <li style=" display: inline-block;color:#fff;"><span
                                                    style="font-size: 12px;"><a href=""><img
                                                            src="{{ asset('assets/img/social-icon/snapchat.png') }}"
                                                            alt="" width="20px"></a> <div class="text-center"
                                                                                          style="font-size:11px;">{{ formatNumber($snapchat ? $snapchat->followers : 0) }}</div></span>
                                            </li>&nbsp;
                                        @endif
                                    </ul>
                                </div>
                                <img src="{{ $influencer ? $influencer->image_url : '' }}" alt="author"
                                     class="influencer"
                                     width="220px" style="max-height: 200px !important;">
                            </a>
                            <div class="influencer-dev" style="margin:10px;padding:3px;">
                                <h5 style="font-size:12px;"
                                    class="influencer-name">{{ $influencer ? $influencer->full_name : '' }}</h5>
                                <h5 style="font-size:12px;">{{ $influencer->user_professional_detail && $influencer->user_professional_detail->category ? $influencer->user_professional_detail->category->name : '' }}</h5>
                                <h5 style="font-size:12px;">
                                    Price: {{ getSafeValueFromObject($influencer->user_professional_detail, 'price_formatted') }}
                                    &nbsp;&nbsp;Based
                                    in: {{ $influencer->state ? $influencer->state->name : '' }}</h5>
                            </div>
                        </div>
                    </div>
                @empty

                    <div class="col-12 text-center">
                        <p>Nothing Found</p>
                    </div>

                @endforelse

            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
<script>
    $(document).ready(function () {

$('.datepicker').datepicker({
dateFormat: 'dd-mm-yy'
});
 });
</script>
@endsection

