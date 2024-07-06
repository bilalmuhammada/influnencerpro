@extends('layout.master')
@section('title', 'Profit Lose Report')
@section('content')
    <!--begin::Form-->

    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
             data-bs-target="#kt_account_profile_details" aria-expanded="true"
             aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Reports: Expenses </h3>
            </div>

            <div class="card-title m-0">
                <button class="btn btn-primary print-btn" id="print-button"><i class="fas fa-print"></i>Print</button>
                <button class="btn btn-primary print-btn ms-2" id="export-sheet-button"><i
                        class="fas fa-file-excel"></i> Export Spreadsheet
                </button>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div class="collapse show">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">

                <div id="element-to-print">
                    <div class="fv-row row">
                        <div class="col-md-12 mb-7 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                            <!--begin::Label-->
                            <!--end::Label-->
                            <table class="table table-bordered table-hover table-responsive table-striped"
                                   id="data-table-1">
                                <tbody>
                                <tr>
                                    <td></td>
                                    @foreach($months as $month)
                                        <td><b>{{ $month }}</b></td>
                                    @endforeach
                                    <td><b>Total</b></td>
                                </tr>
                                @php
                                    $total = 0;
                                    $month_total = 0;
                                @endphp
                                @foreach($expenses as $category => $expense)
                                    @php
                                        $category_total = 0;
                                    @endphp
                                    <tr>
                                        <td>{{ $category }}</td>
                                        @foreach($expense as $month_expense)
                                            @php
                                                $month_expense_formatted = \App\Helpers\SiteHelper::checkAmount($month_expense);
                                                $category_total += $month_expense;
                                            @endphp
                                            <td>{{ $month_expense_formatted }}</td>
                                        @endforeach
                                        <td>
                                            @php
                                                $category_total_formatted = \App\Helpers\SiteHelper::checkAmount($category_total);
                                                $total += $category_total;
                                            @endphp
                                            {{ $category_total_formatted }}
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td><b>Total</b></td>
                                    @foreach($months as $index=>$month)
                                        <td><b>{{ 'Month_total' }}</b></td>
                                    @endforeach
                                    <td><b>{{ $total }}</b></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Form-->
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/report.js') }}"></script>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
    <script>
        $(document).on('click', '#print-button', function (e) {
            e.preventDefault();
            var elementToPrint = document.getElementById('element-to-print');
            printElement(elementToPrint);
        });

        $(document).on('click', '#export-sheet-button', function (e) {
            e.preventDefault();
            exportToExcel('expense-report');
        })


    </script>
@endsection

