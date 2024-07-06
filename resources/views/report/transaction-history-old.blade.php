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
    <div class="main-wrapper">


        <section style="border-top:2px solid #eee;padding-top:120px;">
            <div class="container">
                <div class="row">
                    <h1 style="font-size:45px;">Transaction History</h1>
                    <h3>Balance: <span class="text-success">${{ $transactions->sum('amount')}}</span></h3>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col">
                                <label for="">CSV</label><br/>
                                <button class="btn download-csv btn-primary"> &nbsp; &nbsp;
                                    <b>Download
                                        CSV </b>
                                    &nbsp; &nbsp;
                                </button>
                            </div>
                            <div class="col">
                                <label for="">Invoices</label>
                                <button type="button" class="btn btn-primary" style=""><b>Download
                                        Invoices</b>
                                </button>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ env('BASE_URL') }}reports/transaction-history" method="get">
                            <div class="row">
                                <div class="col">
                                    <label for="">From Date</label>
                                    <input type="date" class="form-control form_date" name="form_date">
                                    {{--                        <select type="text" class="form-select">--}}
                                    {{--                            <option value="">One Week</option>--}}
                                    {{--                            <option value="">Two Week</option>--}}
                                    {{--                            <option value="">Three Week</option>--}}
                                    {{--                        </select>--}}
                                </div>
                                <div class="col">
                                    <label for="">To Date</label>
                                    <input type="date" class="form-control to_date" name="to_date">
                                    {{--                        <select type="text" class="form-select">--}}
                                    {{--                            <option value="">One Week</option>--}}
                                    {{--                            <option value="">Two Week</option>--}}
                                    {{--                            <option value="">Three Week</option>--}}
                                    {{--                        </select>--}}
                                </div>
                                <div class="col">
                                    <label for="">Transaction category</label>
                                    <select type="text" class="form-control category_id" name="category_id">
                                        <option value="">All Categories</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col" style="margin-top:32px;">
                                    <button class="btn btn-primary">Filter</button>
                                    {{--                        <label for="">Bank Details</label>--}}
                                    {{--                        <select type="text" class="form-select">--}}
                                    {{--                            <option value="">bank xyz</option>--}}
                                    {{--                        </select>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br/>
                <table style="width:100%;" id="datatable">
                    <thead>
                    <tr style="border-top:1px solid #999;">
                        <th>Date</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Amount/Balance</th>
                        <th>Ref ID</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transaction)
                        <tr style="border-top:1px solid #999;">
                            <td>{{ $transaction->date_formatted }}</td>
                            <td></td>
                            <td></td>
                            <td>${{ $transaction->amount }}</td>
                            <td>{{ $transaction->invoice_number }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br/>
            </div>
        </section>
        @endsection
        @section('page_scripts')
            <script src="{{ asset('assets/js/report.js')}}"></script>
            <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
            <script>
                $('#datatable').DataTable();

                $(document).on('click', '.download-csv', function (e) {
                    e.preventDefault();
                    exportToExcel('transaction-history');
                });
            </script>
@endsection
