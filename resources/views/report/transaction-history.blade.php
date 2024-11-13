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
        .form-control{
            border-color: #997045 !important;
        }
        .form-control:focus{
            border-color: blue !important;
        }

        .ui-state-default  {
        border: 0px !important;
    background-color: white !important; /* Change this to the desired color */
  }
  #ui-datepicker-div{
width: 212px !important;
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

        .from_date:focus, .to_date:focus {
    border: 1px solid blue !important;
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
            /* background: #1B2559; */
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
        ::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
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
.datepicker {
    padding: 12px;}

    #select2-language_dropdown-container {
            margin-left: -22px !important;
        }
    </style>

    <div class="main-wrapper">

        <div class="container">
            <section style="border-top:2px solid #eee;padding:40px 0px 10px 0px;">
                <div class="project-chart" style="display:none;">
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


                <div class="project-download" style="padding-top:60px;">
                    <div class="title-group d-flex bilal-transc">
                        <h2>Transaction History</h2>
                        <div class="down-load">
                            <a href="#" class="btn-primary" id="deleteSelected" style="margin-right: 20px">
                                {{-- <i class="fas fa-trash-alt"></i> --}}
                                Delete Selected</a>
                            <a href="#" class="btn-primary download-csv">
                                {{-- <i class="fas fa-cloud-download-alt"></i> --}}
                                Download</a>
                        </div>
                    </div>
                    <div class="select-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-6">
                                <input type="text" class="form-control datepicker  from_date" name="from_date"
                                       placeholder=" Date">
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <input type="text" class="form-control  datepicker to_date" name="to_date" placeholder=" Date">
                            </div>
                        {{--                            <div class="col-lg-2 col-md-6">--}}
                        {{--                                <select class="form-select">--}}
                        {{--                                    <option> Reference Number</option>--}}
                        {{--                                    <option>Option 1</option>--}}
                        {{--                                    <option>Option 2</option>--}}
                        {{--                                    <option>Option 3</option>--}}
                        {{--                                    <option>Option 4</option>--}}
                        {{--                                    <option>Option 5</option>--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-lg-2 col-md-6">--}}
                        {{--                                <select class="form-select">--}}
                        {{--                                    <option> Contract name</option>--}}
                        {{--                                    <option>Option 1</option>--}}
                        {{--                                    <option>Option 2</option>--}}
                        {{--                                    <option>Option 3</option>--}}
                        {{--                                    <option>Option 4</option>--}}
                        {{--                                    <option>Option 5</option>--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}
                        <!-- <div class="col-lg-2 col-md-6">
                                <select class="form-select payment_method">
                                    <option value=""> Payment Method</option>
                                    <option value="credit_card">Credit card</option>
                                    <option value="bank">Bank</option>

                                </select>
                            </div> -->
                            <div class="col-lg-2 col-md-6" style="margin-top:5px;">
                                <button class="btn btn-primary filter">Filter</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body" style="display: block !important;">
                        <div class="table-responsive">
                            <table class="table table-center table-hover mb-0" id="datatable">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" style="margin-left: 10px;" id="selectAll"></th>
                                    <th>Transaction Date</th>
                                    <th>Invoice #</th>
                                    <th>Subscription Plan</th>
                                    <th>Amount</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                                </thead>
                                <tbody id="transBody" class="transBody">

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

            <script src="{{ asset('assets/js/report.js')}}"></script>
            <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

            <script>
                $(document).ready(function(){
                  
                    $('#datatable').DataTable({
        language: {
            emptyTable: "No Data",
            zeroRecords: "No Data"
        },
        initComplete: function () {
            // Remove the label text "Search:" and set the placeholder for the search input
            $('#datatable_filter label').contents().filter(function() {
                return this.nodeType === 3; // Remove the text node
            }).remove();

            // Set the placeholder text for the search input
            $('#datatable_filter input').attr('placeholder', 'Search...');
        }
    });
  

});
                $(document).ready(function () {
                    $('.datepicker').datepicker({
                        dateFormat: 'dd-mm-yy',
                       
    // Wait for the document to be ready
   
            });
                    load_transactions();

                    load_chart();

                   

                });

                function load_chart() {
                    /*Project Earning*/

                    $.ajax({
                        url: api_url + 'reports/earning-chart',
                        type: "POST",
                        dataType: "json",
                        success: function (response) {
                            var chart = c3.generate({
                                bindto: '#chart-sracked', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        response.data,
                                    ],
                                    type: 'spline', // default type of chart
                                    groups: [
                                        ['data1', 'data2']
                                    ],
                                    colors: {
                                        data1: '#FF5B37'
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Maximum'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: response.months
                                    },
                                },
                                legend: {
                                    show: false, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        }
                    });
                }

                function load_transactions(destroy = false) {

                    if (destroy == true) {
                        $('#datatable').DataTable().destroy();
                    }

                    $.ajax({
                        url: api_url + 'reports/earning',
                        type: "POST",
                        dataType: "json",
                        data: {
                            "from_date": $('.from_date').val(),
                            "to_date": $('.to_date').val(),
                            "payment_method": $('.payment_method').val(),
                        },
                        success: function (response) {
                            var row = '';
                        
                            
                            if (response.data.length > 0) {
                                
                                $(response.data).each(function (index, value) {

                                    console.log(value.date_formatted);
                                    row += `<tr>
                <td><input type="checkbox" class="transaction-checkbox" trans-id="${value.id}"></td>
                <td>${value.date_formatted}</td>
                <td><a href="#">#${value.invoice_number}</a></td>
                <td>xyz-${value.id}</td>
                <td>${(40.44 + Number(value.id)).toFixed(2)}</td> <!-- Correct formatting -->
                <td class="text-end subscription-end">
                    <a href="javascript:void(0);" class=" delete" trans-id="${value.id}"><i style="font-size:20px;color:blue;" class="far fa-trash-alt"></i></a>
                </td>
            </tr>`;
                                });

                                $('#transBody').html(row);
                            } else {
                                
                    
                                $('.transBody').html(row);
                            }
                            // $('#datatable').DataTable().clear().destroy();
    //                          $('#datatable').DataTable({
    //     language: {
    //         emptyTable: "No Data"
          
    //     }
    // });
                        }
                    });
                }

                $("#selectAll").on("change", function () {
                    $(".transaction-checkbox").prop("checked", $(this).prop("checked"));
                });


                $(document).on('click', '.delete', function (e) {
                    e.preventDefault();
                    var endpoint = api_url + 'transactions/' + $(this).attr('trans-id') + '/delete';

                    deleteRecord(endpoint, $(this));
                });

                $(document).on('click', '.filter', function (e) {
                    e.preventDefault();

                    load_transactions(true);
                });

                $(document).on('click', '.download-csv', function (e) {
                    e.preventDefault();

                    exportToExcel('Transactions Report');
                });


                // Delete selected records on button click
                $("#deleteSelected").on("click", function () {
                    // Array to store transaction IDs
                    var selectedTransIds = [];

                    // Collect checked checkboxes' data-trans-id attributes
                    $(".transaction-checkbox:checked").each(function () {
                        selectedTransIds.push($(this).attr("trans-id"));
                    });
                    console.log(selectedTransIds)

                    // Send Ajax request to delete records
                    if (selectedTransIds.length > 0) {
                        $.ajax({
                            url: api_url + 'transactions/multi-delete', // Replace with your actual delete endpoint
                            type: 'POST',
                            dataType: 'json',
                            data: {transIds: selectedTransIds},
                            success: function (response) {
                                if (response.status) {
                                    Swal.fire({
                                        title: 'Success!',
                                        text: response.message,
                                        icon: 'success',
                                    }).then((result) => {
                                        $(".transaction-checkbox:checked").closest('tr').remove();

                                    })
                                } else {
                                    Swal.fire({
                                        title: 'Problem!',
                                        text: response.message,
                                        icon: 'warning',
                                    })
                                }
                            },
                            error: function (error) {
                                // Handle error
                                console.error(error);
                            }
                        });
                    }
                });
            </script>
@endsection

