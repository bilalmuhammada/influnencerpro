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
            /* border-radius: 0.4rem; */
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
    <div class="container mx-auto">
        <div class="col-md-12">
            <div class="row mx-auto">


                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <div class="card avatar-one"
                         style="border:0px solid #997045;width:200px;">
                        <a href="{{ env('BASE_URL') . 'dashboard-influencer-detail' }}">
                            <div class="start"
                                 style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:200px;">
                                <i class="fas fa-check-circle text-success verified"
                                   style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                   &nbsp;
                            </div>
                            <div class="influencerdetail" id="">
                                <div class="start"
                                     style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:196px;">
                                    <i class="fas fa-check-circle text-success verified"
                                       style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                </div>
                                <br>
                                <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; United Arab Emirates</span><br/>
                                <span
                                    style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; Travel, Fashion, Modeling</span>
                                <ul style="list-style-type: none;margin-top:10px;">
                                    <li style=" display: inline-block;color:#fff;">&nbsp;&nbsp; <span
                                            style="font-size: 12px;text-align:center;"><a href=""><img
                                                    src="assets/img/social-icon/insta.png" alt="" width="30px"></a> <br> &nbsp;&nbsp;&nbsp;&nbsp; 12k</span>
                                    </li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="assets/img/social-icon/fb.png" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;7k</span></li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="assets/img/social-icon/tiktok.png" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;9k</span></li>
                                </ul>
                            </div>
                            <img src="{{ asset('assets/img/user/avatar-9.jpg')}}" alt="author" class="influencer"
                                 width="200px">
                        </a>
                        <div class="influencer-dev" style="margin:10px;padding:3px;">
                            <h5 style="font-size:16px;">Noraiz
                            </h5>
                            <h5 style="font-size:16px;">No. &nbsp;987879</i></h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <div class="card avatar-one"
                         style="border:0px solid #997045;width:200px;">
                        <a href="{{ env('BASE_URL') . 'dashboard-influencer-detail' }}">
                            <div class="start"
                                 style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:200px;">
                                <i class="fas fa-check-circle text-success verified"
                                   style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                   &nbsp;
                            </div>
                            <div class="influencerdetail" id="">
                                <div class="start"
                                     style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:196px;">
                                    <i class="fas fa-check-circle text-success verified"
                                       style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                </div>
                                <br>
                                <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; United Arab Emirates</span><br/>
                                <span
                                    style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; Travel, Fashion, Modeling</span>
                                <ul style="list-style-type: none;margin-top:10px;">
                                    <li style=" display: inline-block;color:#fff;">&nbsp;&nbsp; <span
                                            style="font-size: 12px;text-align:center;"><a href=""><img
                                                    src="assets/img/social-icon/insta.png" alt="" width="30px"></a> <br> &nbsp;&nbsp;&nbsp;&nbsp; 12k</span>
                                    </li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="assets/img/social-icon/fb.png" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;7k</span></li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="assets/img/social-icon/tiktok.png" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;9k</span></li>
                                </ul>
                            </div>
                            <img src="{{ asset('assets/img/user/avatar-9.jpg')}}" alt="author" class="influencer"
                                 width="200px">
                        </a>
                        <div class="influencer-dev" style="margin:10px;padding:3px;">
                            <h5 style="font-size:16px;">Noraiz
                            </h5>
                            <h5 style="font-size:16px;">No. &nbsp;987879</i></h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <div class="card avatar-one"
                         style="border:0px solid #997045;width:200px;">
                        <a href="{{ env('BASE_URL') . 'dashboard-influencer-detail' }}">
                            <div class="start"
                                 style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:200px;">
                                <i class="fas fa-check-circle text-success verified"
                                   style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                   &nbsp;
                            </div>
                            <div class="influencerdetail" id="">
                                <div class="start"
                                     style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:196px;">
                                    <i class="fas fa-check-circle text-success verified"
                                       style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                </div>
                                <br>
                                <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; United Arab Emirates</span><br/>
                                <span
                                    style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; Travel, Fashion, Modeling</span>
                                <ul style="list-style-type: none;margin-top:10px;">
                                    <li style=" display: inline-block;color:#fff;">&nbsp;&nbsp; <span
                                            style="font-size: 12px;text-align:center;"><a href=""><img
                                                    src="assets/img/social-icon/insta.png" alt="" width="30px"></a> <br> &nbsp;&nbsp;&nbsp;&nbsp; 12k</span>
                                    </li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="assets/img/social-icon/fb.png" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;7k</span></li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="assets/img/social-icon/tiktok.png" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;9k</span></li>
                                </ul>
                            </div>
                            <img src="{{ asset('assets/img/user/avatar-9.jpg')}}" alt="author" class="influencer"
                                 width="200px">
                        </a>
                        <div class="influencer-dev" style="margin:10px;padding:3px;">
                            <h5 style="font-size:16px;">Noraiz
                            </h5>
                            <h5 style="font-size:16px;">No. &nbsp;987879</i></h5>
                        </div>
                    </div>
                </div>


                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <div class="card avatar-one"
                         style="border:0px solid #997045;width:200px;">
                        <a href="{{ env('BASE_URL') . 'dashboard-influencer-detail' }}">
                            <div class="start"
                                 style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:200px;">
                                <i class="fas fa-check-circle text-success verified"
                                   style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                   &nbsp;
                            </div>
                            <div class="influencerdetail" id="">
                                <div class="start"
                                     style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:196px;">
                                    <i class="fas fa-check-circle text-success verified"
                                       style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                </div>
                                <br>
                                <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; United Arab Emirates</span><br/>
                                <span
                                    style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; Travel, Fashion, Modeling</span>
                                <ul style="list-style-type: none;margin-top:10px;">
                                    <li style=" display: inline-block;color:#fff;">&nbsp;&nbsp; <span
                                            style="font-size: 12px;text-align:center;"><a href=""><img
                                                    src="assets/img/social-icon/insta.png" alt="" width="30px"></a> <br> &nbsp;&nbsp;&nbsp;&nbsp; 12k</span>
                                    </li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="assets/img/social-icon/fb.png" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;7k</span></li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="assets/img/social-icon/tiktok.png" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;9k</span></li>
                                </ul>
                            </div>
                            <img src="{{ asset('assets/img/user/avatar-9.jpg')}}" alt="author" class="influencer"
                                 width="200px">
                        </a>
                        <div class="influencer-dev" style="margin:10px;padding:3px;">
                            <h5 style="font-size:16px;">Noraiz
                            </h5>
                            <h5 style="font-size:16px;">No. &nbsp;987879</i></h5>
                        </div>
                    </div>
                </div>


                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <div class="card avatar-one"
                         style="border:0px solid #997045;width:200px;">
                        <a href="{{ env('BASE_URL') . 'dashboard-influencer-detail' }}">
                            <div class="start"
                                 style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:200px;">
                                <i class="fas fa-check-circle text-success verified"
                                   style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                   &nbsp;
                            </div>
                            <div class="influencerdetail" id="">
                                <div class="start"
                                     style="color:#0504aa;position:absolute;margin-top:10px;text-align:right;border:0px solid red;width:196px;">
                                    <i class="fas fa-check-circle text-success verified"
                                       style="background-color:#fff;padding:7px;border-radius:50%;"></i>
                                </div>
                                <br>
                                <span style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Based in:</b><br/>&nbsp;&nbsp; United Arab Emirates</span><br/>
                                <span
                                    style="font-size: 12px;color:#fff;"><b>&nbsp;&nbsp; Influencer Categories:</b><br/>&nbsp;&nbsp; Travel, Fashion, Modeling</span>
                                <ul style="list-style-type: none;margin-top:10px;">
                                    <li style=" display: inline-block;color:#fff;">&nbsp;&nbsp; <span
                                            style="font-size: 12px;text-align:center;"><a href=""><img
                                                    src="assets/img/social-icon/insta.png" alt="" width="30px"></a> <br> &nbsp;&nbsp;&nbsp;&nbsp; 12k</span>
                                    </li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="assets/img/social-icon/fb.png" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;7k</span></li> &nbsp;
                                    <li style=" display: inline-block;color:#fff;"><span style="font-size: 12px;"><a
                                                href=""><img src="assets/img/social-icon/tiktok.png" alt=""
                                                             width="30px"></a> <br>&nbsp;&nbsp;9k</span></li>
                                </ul>
                            </div>
                            <img src="{{ asset('assets/img/user/avatar-9.jpg')}}" alt="author" class="influencer"
                                 width="200px">
                        </a>
                        <div class="influencer-dev" style="margin:10px;padding:3px;">
                            <h5 style="font-size:16px;">Noraiz
                            </h5>
                            <h5 style="font-size:16px;">No. &nbsp;987879</i></h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


