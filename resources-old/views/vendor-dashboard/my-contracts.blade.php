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
    </style>
    <body>
    <section style="border-top:2px solid #eee;">
        <div class="container" style="padding:50px;padding-right:50px;">
            <!---------box2------>
            <div class="inner-cols" style="border:1px solid #999;border-radius:12px;">
                <div class="col-md-12">
                    <div class="inner-data" style="padding:15px;">
                        <div class="row">
                            <div class="col-md-10">
                                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                            </div>
                            <div class="col-md-2" style="text-align:right;">
                                <i class="fa fa-heart"
                                   style="border-radius:14px;border:1px solid #000;padding:5px;"></i>
                            </div>
                        </div>

                        <div class="text-muted" style="margin-top:-10px;"><small>Posted 60 seconds ago</small></div>
                        <span style="font-size:13px;">Payment Verified &nbsp; <i class="fa fa-star filled"></i><i
                                class="fa fa-star filled"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i></span>
                        <span style="font-size:13px;"> $0 Spent</span>
                        <span style="font-size:13px;"> <i class="fa fa-map-marker" aria-hidden="true"></i> United States</span>
                        <br/>
                        <br/>
                        <div class="text-muted" style="margin-top:;"><h5>Hourly-intermediate-Est. time: Less than 1
                                month, Less than 30 hrs/week</h5></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="inner-data" style="padding:15px;">
                        <div class="row">
                            <div class="col-md-10">
                                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                            </div>
                            <div class="col-md-2" style="text-align:right;">
                                <i class="fa fa-heart"
                                   style="border-radius:14px;border:1px solid #000;padding:5px;"></i>
                            </div>
                        </div>

                        <div class="text-muted" style="margin-top:-10px;"><small>Posted 60 seconds ago</small></div>
                        <span style="font-size:13px;">Payment Verified &nbsp; <i class="fa fa-star filled"></i><i
                                class="fa fa-star filled"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i></span>
                        <span style="font-size:13px;"> $0 Spent</span>
                        <span style="font-size:13px;"> <i class="fa fa-map-marker" aria-hidden="true"></i> United States</span>
                        <br/>
                        <br/>
                        <div class="text-muted" style="margin-top:;"><h5>Hourly-intermediate-Est. time: Less than 1
                                month, Less than 30 hrs/week</h5></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="inner-data" style="padding:15px;">
                        <div class="row">
                            <div class="col-md-10">
                                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
                            </div>
                            <div class="col-md-2" style="text-align:right;">
                                <i class="fa fa-heart"
                                   style="border-radius:14px;border:1px solid #000;padding:5px;"></i>
                            </div>
                        </div>

                        <div class="text-muted" style="margin-top:-10px;"><small>Posted 60 seconds ago</small></div>
                        <span style="font-size:13px;">Payment Verified &nbsp; <i class="fa fa-star filled"></i><i
                                class="fa fa-star filled"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                class="fa fa-star"></i></span>
                        <span style="font-size:13px;"> $0 Spent</span>
                        <span style="font-size:13px;"> <i class="fa fa-map-marker" aria-hidden="true"></i> United States</span>
                        <br/>
                        <br/>
                        <div class="text-muted" style="margin-top:;"><h5>Hourly-intermediate-Est. time: Less than 1
                                month, Less than 30 hrs/week</h5></div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <!------box2 ended----->
            </div>
        </div>
    </section>
@endsection
