@extends('layout.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/c3-chart/c3.min.css')}}">
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

    <div class="main-wrapper">

        <div class="container">
            <section style="border-top:2px solid #eee;">
                <div class="project-chart">
                    <div class="row">
                        <div class="subscribe-employe" style="padding:40px 0px 10px 0px;">
                            <ul>
                                @if(session()->get('role') == 'vendor')
{{--                                    <li class="active"><a--}}
{{--                                            href="{{env('BASE_URL') .'reports/my-reports'}}">Administrator </a>--}}
{{--                                    </li>--}}
                                    <li>
{{--                                        {{env('BASE_URL') .'reports/vendors-earning'}}--}}
                                        <a href="javascript:void(0)">Vendor</a>
                                    </li>
                                @else
                                    <li>
{{--                                        {{env('BASE_URL') .'reports/influencer-earning'}}--}}
                                        <a href="javascript:void(0)">Influencer</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="col-xl-12 d-flex">
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">Earnings Report</h5>
                                        <div class="dropdown">
                                            <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                2022
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" style="display: block !important;">
                                    <div id="chart-sracked"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="project-download">
                    <div class="title-group d-flex">
                        <h2>Earnings</h2>
                        <div class="down-load">
                            <a href="#" class="btn-primary"><i class="fas fa-cloud-download-alt"></i> Download</a>
                        </div>
                    </div>
                    <div class="select-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-6">
                                <select class="form-select">
                                    <option> Date</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <select class="form-select">
                                    <option> Reference Number</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <select class="form-select">
                                    <option> Contract name</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <select class="form-select">
                                    <option> Payment type</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                    <option>Option 5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body" style="display: block !important;">
                        <div class="table-responsive">
                            <table class="table table-center table-hover mb-0 datatable">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="select-all">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <th>Transaction date</th>
                                    <th>Reference Number</th>
                                    <th>Contract Name</th>
                                    <th>Contract Value</th>
                                    <th>Income</th>
                                    <th>Payment type</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td>25/03/20022</td>
                                    <td><a href="#">#55454</a></td>
                                    <td>xyz</td>
                                    <td>$450.44</td>
                                    <td>$40.44</td>
                                    <td>Credit card</td>
                                    <td class="text-end subscription-end">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-danger"
                                           data-bs-toggle="modal"
                                           data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </section>
        </div>

        @endsection
        @section('page_scripts')
            <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

            <script src="{{ asset('assets/plugins/moment/moment.min.js')}}"></script>
            <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

            <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{ asset('assets/plugins/datatables/datatables.min.js')}}"></script>

            <script src="{{ asset('assets/plugins/c3-chart/d3.v5.min.js')}}"></script>
            <script src="{{ asset('assets/plugins/c3-chart/c3.min.js')}}"></script>
            <script src="{{ asset('assets/plugins/c3-chart/chart-data.js')}}"></script>

            <script src="{{ asset('assets/js/script.js')}}"></script>
@endsection

