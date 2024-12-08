<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Admin Dashboard">
    <meta name="author" content="InfluencersPRO">
    <meta name="keywords" content="InfluencersPRO">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>InfluencersPRO Admin Panel </title>
    <link rel="stylesheet" href="{{ asset('asset-admin/vendors/dropify/dist/dropify.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- End fonts -->
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('asset-admin/vendors/core/core.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('asset-admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('asset-admin/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{ asset('asset-admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('asset-admin/css/demo1/style.css')}}">
    <!-- End layout styles -->
    <link rel="stylesheet" href="{{ asset('asset-admin/css/toggle.css')}}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css"/>


    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css"/>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
    <link rel="stylesheet" href="{{ asset('asset-admin/css/style.css') }}">

    <script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        api_url = "{{env('API_URL')}}";
        base_url = "{{env('BASE_URL')}}";

        function ajax_setup() {
            $.ajaxSetup({
                headers: {
                    'Authorization': 'Bearer ' + token,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                dataType: 'json',
            });
        }
    </script>
    <style>
        input .fa .fa-eye .one {
            position: absolute !important;
            top: 75% !important;
            right: 6% !important;
            cursor: pointer !important;
            color: lightgray !important;
            border: 2px solid red !important;
        }

        .fa-eye .two {
            position: absolute !important;
            top: 80% !important;
            right: 6% !important;
            cursor: pointer !important;
            color: lightgray !important;
            border: 2px solid red !important;
        }

      

    </style>
</head>
