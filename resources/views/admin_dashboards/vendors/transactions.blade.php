@extends('layout.master')
@section('content')

    <div class="page-content">
        <nav class="page-breadcrumb">
            <h6 class="card-title">Vendor Transactions</h6>
            <ol class="breadcrumb">
            </ol>
        </nav>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                        <select name="country_id" id="country_id" class="form-control">
                            <option value="">All</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <select name="city_id" id="city_id" class="form-control">

                        </select>
                    </div>
                    <div class="col">
                        <select name="currency" id="currency" class="form-control">
                            <option value="">AED</option>
                            <option value="">$</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control datepicker" id="from_date" placeholder="DD/MM/YYYY">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control datepicker" id="to_date" placeholder="DD/MM/YYYY">
                    </div>
                    {{--                    <div class="col">--}}
                    {{--                        <input type="text" placeholder="Search" class="form-control">--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table">
                                <thead>
                                <tr>
                                <!-- <th>Invoice#</th>
                                    <th>User Name</th>
{{--                                    <th>User Type</th>--}}
                                    <th>Transaction Status</th>
                                    <th>Payment</th>
                                    <th>Total Transaction</th>
                                    <th>Action</th> -->
                                    <th>No.</th>
                                    <th>Invoice No.</th>
                                    <th>Photo</th>
                                    <th>ID</th>
                                    <th>Brand Name</th>
                                    <th>Company Name</th>
                                    <th>Website</th>
                                    <th>Business Email</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Member</th>
                                    <th>Subscription</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody class="t-body"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">
        function makeTableBody(data) {
            var table_body = '';
            var count = 1;
            data.forEach(function (value, key) {
                table_body += `<tr>
                                   <td>${count++}</td>
                                    <td>${value.invoice_number}</td>
                                    <td><img src="${value.user.attachment.file_name_url}" alt=""></td>
                                    <td>${value.id}</td>
                                    <td>${value.user.brand_name ?? '-'}</td>
                                    <td>${value.user.company_name ?? '-'}</td>
                                    <td>${value.user.website ?? '-'}</td>
                                    <td>${value.user.email}</td>
<td>${value.user.name} ${value.user.last_name ?? '-'}</td>
                                    <td>${value.user.country.name ?? '-'}</td>
                                    <td>${value.user.city.name ?? '-'}</td>
                                    <td>${value.user.member_since}</td>
                                    <td>${value.user.plan ? value.user.plan.name : ''}</td>
                                    <td>${value.amount}</td>

                                </tr>`;
            });
            // <td>
            //     <a href='#' id='delete-btn' vendor-id='${value.id}' class='remove-vendor text-danger'><i class='fa fa-trash'></i></a></td>

            $('.t-body').html(table_body);
            initializeDatatable('#dataTable');
        }

        function fetchRecords() {
            $.ajax({
                url: api_url + 'users/transactions',
                type: 'post',
                data: {
                    'role': 'vendor',
                    from_date: $('#from_date').val(),
                    to_date: $('#to_date').val(),
                    country_id: $('#country_id').val(),
                    'city_id': $('#city_id').val(),
                    currency: $('#currency').val()
                },
                dataType: "JSON",
                success: function (response) {
                    if (response.status) {
                        makeTableBody(response.data);
                    } else {
                        $('.t-body').html("<tr><td class='text-center' colspan='6'>No Record Found</td></tr>");
                    }
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Problem!',
                        text: 'Unexpected error',
                        icon: 'warning',
                    })
                }
            });
        }

        $(document).ready(function () {
            fetchRecords();
        });

        $(document).on('change', '#country_id', function () {
            getCitiesByCountry($(this).val());
        });

        $(document).on('change', '#country_id, #city_id, #currency, #from_date, #to_date', function () {
            $('#dataTable').DataTable().destroy();

            setTimeout(function () {
                fetchRecords()
            }, 200);
        });

        $(document).on('click', '.remove-vendor', function () {
            var id = $(this).attr('vendor-id');
            var url = api_url + 'users/' + id + '/delete-transaction';
            deleteRecord(url, $(this));
        });
    </script>
@endsection
