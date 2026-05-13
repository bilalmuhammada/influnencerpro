@extends('layout.master')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@section('content')
    <style>
        .lobibox-notify.notify-mini .lobibox-notify-body {
            margin: 7px 1px 0px 0px !important;
        }

        .lobibox-notify,
        .lobibox-notify-success,
        .animated-fast,
        .fadeInDown,
        .notify-mini {
            width: 100px !important;
            margin-right: 120px !important;
            /* text-align: center !important; */
        }

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

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(16px);
            -ms-transform: translateX(16px);
            transform: translateX(16px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .shaking {
            display: inline-block;
            transition: transform 0.2s ease-in-out;
        }

        .social-wrapper:hover .shaking {
            /* Change to your desired hover color */

            animation: shake 2.5s linear infinite;
        }

        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-2px);
            }

            50% {
                transform: translateX(2px);
            }

            75% {
                transform: translateX(-2px);
            }

            100% {
                transform: translateX(0);
            }
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
            /* top: -8px; */
            opacity: 1;
            visibility: visible;
            height: 200px;
        }

        .avatar-one .influencerdetail {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 200px;
            background: rgba(0, 0, 0, 0.6);
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease-in-out;
        }

        .datepicker:focus {
            border: 1px solid blue !important;
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

        .ui-state-default {
            border: 0px !important;
            background-color: white !important;
            /* Change this to the desired color */
        }

        #ui-datepicker-div {
            width: 195px !important;
        }

        ::-webkit-scrollbar {
            width: 6px;
            /* You can adjust this value based on your preference */
        }

        .datepicker {
            padding-left: 18px !important;
        }

        .social-wrapper:hover .followers-count {
            color: goldenrod;
            /* Change to your desired hover color */
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

        .influencer-box-5 {
            flex: 0 0 20%;
            max-width: 19%;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (max-width: 1200px) {
            .influencer-box-5 {
                flex: 0 0 25%;
                max-width: 25%;
            }
        }

        @media (max-width: 992px) {
            .influencer-box-5 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }

        @media (max-width: 768px) {
            .influencer-box-5 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (max-width: 576px) {
            .influencer-box-5 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>

    <section style="border-top:2px solid #eee;padding-top:90px;">
        {{-- <br /> --}}
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
    {{-- <br /> --}}
    <div class="container" style="max-width: 90%; width: 90%;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 mx-auto">
                    <form action="{{ env('BASE_URL') }}chats/invited-influencers">
                        <div class="row">
                            <div class="col-lg-2 col-md-6">
                                <input type="text" class="form-control datepicker from_date" style="width:115%;"
                                    name="from_date" placeholder="Date">
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <input type="text" class="form-control datepicker to_date"
                                    style="width:115%;margin-left: 14px;" name="to_date" placeholder="Date">
                            </div>
                            <div class="col-lg-2 col-md-6" style="margin-top:5px;margin-left: 31px;">
                                <button class="btn btn-primary filter">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="col-md-2" style="text-align:right;">
                    <a href="{{ env('BASE_URL') }}download-csv" class="btn btn-primary filter">Download</a>
                </div> --}}
            </div>
        </div>
    </div>
    <br />
    <div class="container" style="max-width: 90%; width: 90%;">
        <div class="col-md-12 col-lg-12 col-xl-12 mx-auto">
            <div class="row " id="infulecer-show">


                @forelse($influencers as $influencer)
                    <div class="influencer-box-5 influencer-box" style="top:6px;">
                        <div class="card avatar-one"
                            data-url="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail"
                            style="border:0px solid #997045;width:100%; padding: 0px; cursor: pointer; height: 100%;">
                            <a href="javascript:void(0)">


                                @php
                                    $color = 'white';
                                    $color1 = 'white';

                                    if (isset($influencer->favourites) && count($influencer->favourites) > 0) {
                                        if ($influencer->favourites[0]->influencer_id == $influencer->id) {
                                            if ($influencer->favourites[0]->fr_in == 1) {
                                                $color = 'red';
                                            }

                                        }
                                    }

                                    if (isset($influencer->invented) && count($influencer->invented) > 0) {
                                        if ($influencer->invented[0]->influencer_id == $influencer->id) {

                                            if ($influencer->invented[0]->fr_in == 2) {
                                                $color1 = '#61de2a';
                                            }
                                        }
                                    }




                                  @endphp

                                <div class="influencerdetail" id="">
                                    <div class="start"
                                        style="position:absolute;text-align:right;border:0px solid red;right:10px;top:10px;z-index:9;">

                                        <i class="fa-solid fa-heart shaking add-to-favourite"
                                            data-id="{{ $influencer->id }}" data-fvt="1"
                                            style="padding:7px;border-radius:50%;margin-top: 0px;  color:{{$color}}!important; margin-right: -8px; display: {{ $color == 'red' ? 'none' : 'inline-block' }}"></i>
                                        <i class="fa-solid fa-heart shaking remove-favourite"
                                            data-id="{{ $influencer->id }}" data-fvt="1"
                                            style="padding:7px;border-radius:50%;margin-top: 0px;  color:red!important; margin-right: -8px; display: {{ $color == 'red' ? 'inline-block' : 'none' }}"></i>

                                        <i class="fas fa-check-circle shaking  add-to-invented"
                                            data-id="{{ $influencer->id }}" data-fvt="2"
                                            style="padding:7px;border-radius:50%;margin-top: 0px; color:{{$color1}}!important; margin-right: -1px; display: {{ $color1 == '#61de2a' ? 'none' : 'inline-block' }}"></i>
                                        <i class="fas fa-check-circle shaking remove-invented"
                                            data-id="{{ $influencer->id }}" data-fvt="2"
                                            style="padding:7px;border-radius:50%;margin-top: 0px; color:#61de2a!important; margin-right: -1px; display: {{ $color1 == '#61de2a' ? 'inline-block' : 'none' }}"></i>

                                    </div>
                                    <br>
                                    {{--<span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based
                                            in:</b><br />&nbsp;&nbsp; {{ $influencer->state ? $influencer->state->name : ''
                                        }}</span><br />--}}
                                    {{--<span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer
                                            Categories:</b><br />&nbsp;&nbsp; {{ $influencer->user_professional_detail &&
                                        $influencer->user_professional_detail->category ?
                                        $influencer->user_professional_detail->category->name : '' }}</span>--}}
                                    <ul class="d-flex justify-content-center w-100 align-items-end"
                                        style="list-style-type: none; margin-top: 118px; padding-left: 0; gap: 6px;">
                                        @php
                                            $instagram = getInfluencerSocialMediaProfileByTypeAndId('instagram', $influencer->id);
                                            $tiktok = getInfluencerSocialMediaProfileByTypeAndId('tiktok', $influencer->id);
                                            $facebook = getInfluencerSocialMediaProfileByTypeAndId('facebook', $influencer->id);
                                            $twitter = getInfluencerSocialMediaProfileByTypeAndId('twitter', $influencer->id);
                                            $youtube = getInfluencerSocialMediaProfileByTypeAndId('youtube', $influencer->id);
                                            $snapchat = getInfluencerSocialMediaProfileByTypeAndId('snapchat', $influencer->id);
                                        @endphp
                                        @if($instagram && !empty($instagram->followers) && $instagram->followers != '0')



                                            <li style="display: inline-block;;color:#fff;">
                                                <div class="social-wrapper" style="text-align: center;">
                                                    <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                        <img src="{{ asset('assets/img/social-icon/insta.png') }}" class="shaking"
                                                            style="margin-bottom: 4px;" alt="" width="25px">
                                                    </a>
                                                    <div class="text-center font-change followers-count" style="font-size:11px;">
                                                        {{ $instagram ? $instagram->followers : 0 }}
                                                    </div>
                                                </div>
                                            </li>
                                        @endif

                                        @if($twitter && !empty($twitter->followers) && $twitter->followers != '0')
                                            <li style="display: inline-block;;color:#fff;">
                                                <div class="social-wrapper" style="text-align: center;">
                                                    <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                        <img src="{{ asset('assets/img/social-icon/twitter.png') }}" class="shaking"
                                                            style="margin-bottom: 4px;" alt="" width="25px">
                                                    </a>
                                                    <div class="text-center font-change followers-count" style="font-size:11px;">
                                                        {{ $twitter ? $twitter->followers : 0 }}
                                                    </div>
                                                </div>
                                            </li>


                                        @endif

                                        @if($youtube && !empty($youtube->followers) && $youtube->followers != '0')
                                            <li style="display: inline-block;;color:#fff;">
                                                <div class="social-wrapper" style="text-align: center;">
                                                    <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                        <img src="{{ asset('assets/img/social-icon/youtube.svg') }}" class="shaking"
                                                            style="margin-bottom: 4px;" alt="" width="25px">
                                                    </a>
                                                    <div class="text-center font-change followers-count" style="font-size:11px;">
                                                        {{ $youtube ? $youtube->followers : 0 }}
                                                    </div>
                                                </div>
                                            </li>


                                        @endif
                                        @if($tiktok && !empty($tiktok->followers) && $tiktok->followers != '0')
                                            <li style="display: inline-block;;color:#fff;">
                                                <div class="social-wrapper" style="text-align: center;">
                                                    <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                        <img src="{{ asset('assets/img/social-icon/tiktok.png') }}" class="shaking"
                                                            style="margin-bottom: 4px;" alt="" width="25px">
                                                    </a>
                                                    <div class="text-center font-change followers-count" style="font-size:11px;">
                                                        {{ $tiktok ? $tiktok->followers : 0 }}
                                                    </div>
                                                </div>
                                            </li>


                                        @endif
                                        @if($facebook && !empty($facebook->followers) && $facebook->followers != '0')
                                            <li style="display: inline-block;;color:#fff;">
                                                <div class="social-wrapper" style="text-align: center;">
                                                    <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                        <img src="{{ asset('assets/img/social-icon/fb.png') }}" class="shaking"
                                                            style="margin-bottom: 4px;" alt="" width="25px">
                                                    </a>
                                                    <div class="text-center font-change followers-count" style="font-size:11px;">
                                                        {{ $facebook ? $facebook->followers : 0 }}
                                                    </div>
                                                </div>
                                            </li>


                                        @endif
                                        @if($snapchat && !empty($snapchat->followers) && $snapchat->followers != '0')
                                            <li style="display: inline-block;;color:#fff;">
                                                <div class="social-wrapper" style="text-align: center;">
                                                    <a href="{{ env('BASE_URL') }}/influencers/{{ $influencer->id }}/detail">
                                                        <img src="{{ asset('assets/img/social-icon/snapchat.png') }}"
                                                            class="shaking" style="margin-bottom: 3px;" alt="" width="27px">
                                                    </a>
                                                    <div class="text-center font-change followers-count" style="font-size:11px;">
                                                        {{ $snapchat ? $snapchat->followers : 0 }}
                                                    </div>
                                                </div>
                                            </li>


                                        @endif
                                    </ul>
                                </div>
                                <img src="{{ $influencer ? $influencer->image_url : '' }}" alt="author" class="influencer"
                                    width="100%" height="200px" style="object-fit: cover;">
                            </a>
                            @php
                                $categoryNames = '';
                                foreach ($influencer->categories as $key => $category) {
                                    // Format the first category with # and italic style
                                    if ($key == 0) {
                                        $categoryNames .= "<span style='font-style: italic;'># " . '</span>' . $category->name;
                                    } else {
                                        // Append other categories without # and italic style
                                        $categoryNames .= ', ' . $category->name;
                                    }
                                }


                                // dd($influencer->categories);
                            @endphp
                            <div class="influencer-dev" style="margin: 10px 10px 0px 10px; padding: 3px 0px 0px 3px;">
                                <h5 style="font-size:12px;" class="influencer-name">
                                    {{ $influencer ? $influencer->full_name : '' }}
                                </h5>
                                <h5 style="font-size:12px;">{!! $categoryNames ?? '' !!}</h5>
                                <h5 style="font-size:12px;">
                                    Price:
                                    {{ getSafeValueFromObject($influencer->user_professional_detail, 'price_formatted') }}
                                    &nbsp;&nbsp;City: {{ $influencer->city ? $influencer->city->name : '' }}
                                </h5>
                            </div>
                        </div>
                    </div>
                @empty

                    <div class="col-12 text-center">
                        <p>No Data</p>
                    </div>

                @endforelse

            </div>

        </div>
    </div>
    </div>
@endsection

@section('page_scripts')
    <script>
        $(document).on('click', '.avatar-one', function(e) {
            if ($(e.target).closest('.add-to-favourite, .remove-favourite, .add-to-invented, .remove-invented').length) {
                return;
            }
            let url = $(this).data('url');
            if (url) {
                window.location.href = url;
            }
        });

        $(document).ready(function () {

            $('.datepicker').datepicker({
                dateFormat: 'dd-M-yy',
                changeMonth: true,
                changeYear: true,
                yearRange: "2024:+0",
            });
        });



        $('#downloadCsvButton').on('click', function () {
            // Gather influencer IDs from hidden input fields
            var influencerIds = $('.influencer-id').map(function () {
                return $(this).val();
            }).get();

            // Send AJAX request to download CSV
            $.ajax({
                url: api_url + 'download-csv', // Replace with your Laravel route
                method: 'POST',
                data: { influencer_ids: influencerIds },
                success: function (response) {
                    // Create a Blob from the response data
                    var blob = new Blob([response], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });

                    // Create a downloadable link
                    var downloadLink = document.createElement('a');
                    downloadLink.href = URL.createObjectURL(blob);
                    downloadLink.download = 'users.xlsx';

                    // Append the link to the document and trigger the click event
                    document.body.appendChild(downloadLink);
                    downloadLink.click();

                    // Remove the link from the document
                    document.body.removeChild(downloadLink);
                },
                error: function (xhr, status, error) {
                    // Handle error
                    console.log('helo')
                    console.error(status);
                    console.error(error);
                    console.error(xhr.responseText);
                }
            });
        });


        $(document).on('click', '.add-to-favourite', function (e) {
            e.preventDefault();
            thisElem = $(this);
            let influencerId = thisElem.data('id');
            let fvt = thisElem.data('fvt');

            $.ajax({
                url: api_url + 'influencers/add-to-favourites',
                type: "POST",
                dataType: "json",
                data: {
                    "influencer_id": influencerId,
                    "fvt": fvt
                },
                success: function (response) {
                    if (response.status) {
                        show_success_message(response.message);
                        thisElem.hide();
                        thisElem.parents('.influencerdetail').find('.remove-favourite').show();
                    } else {
                        show_success_message(response.message);
                        thisElem.hide();
                        thisElem.parents('.influencerdetail').find('.add-to-favourite').show();
                    }
                }
            });
        });
        $(document).on('click', '.add-to-invented', function (e) {
            e.preventDefault();
            thisElem = $(this);
            let influencerId = thisElem.data('id');
            let fvt = thisElem.data('fvt');

            $.ajax({
                url: api_url + 'influencers/add-to-invented',
                type: "POST",
                dataType: "json",
                data: {
                    "influencer_id": influencerId,
                    "fvt": fvt
                },
                success: function (response) {
                    if (response.fr_in == 2) {
                        thisElem.css('color', '#61de2a');
                    } else {
                        thisElem.css('color', 'white');
                    }


                    if (response.status) {

                        console.log(response.fr_in);
                        show_success_message(response.message);
                        $(thisElem).hide();
                        $(thisElem).parents('.influencerdetail').find('.remove-favourite').show();
                        $(thisElem).parents('.avatar-one').find('.main-icon').css('color', '#61de2a');
                    } else {
                        show_error_message(response.message);

                    }
                }
            });
        });
    </script>
@endsection