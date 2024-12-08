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

    <!-- Fonts -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.css')}}">
    <!-- End plugin css for this page -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('asset-admin/vendors/core/core.css')}}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('asset-admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('asset-admin/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">

    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('asset-admin/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{ asset('asset-admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('asset-admin/css/demo1/style.css')}}">
    <!-- End layout styles -->
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
</head>
