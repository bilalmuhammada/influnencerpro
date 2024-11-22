<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <title>InfluencersPro</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/logo/Influencers Pro-01-01.png" type="image/x-icon') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/> --}}
       {{-- <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">  --}}

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    {{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>--}}
    <script src="{{ asset('assets/js/jquery-3.6.1.min.js')}}"></script>

    {{--    sweet alert link--}}
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <!-- bar chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    {{--    <link rel="stylesheet" href="{{ asset('assets/plugins/c3-chart/c3.min.css')}}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.18.3/tagify.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


    <link rel="shortcut icon" href="{{ asset('assets/img/logo/Influencers Pro-01-01.png" type="image/x-icon') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    @if(!isset($view_type))
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/skills.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/step-form/style.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/popup/magnific-popup.css') }}">
        <script src="{{ asset('assets/plugins/popup/jquery.magnific-popup.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/slick-custom.js') }}"></script> --}}
    @endif

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lobibox@1.2.7/dist/css/lobibox.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
    <link rel="stylesheet" href="{{ asset('assets/js/emojionearea-master/dist/emojionearea.min.css') }}">
    
    <script src="{{ asset('assets/js/emojionearea-master/dist/emojionearea.min.js') }}"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css"/>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script> --}}
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script> --}}
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/slick.js') }}"></script> --}}
   <script>
       var  base_url = "{{ env('BASE_URL') }}";
       var  api_url = "{{ env('API_URL') }}";
        
        token = localStorage.getItem('user_token');
    </script>

    @if(isset($view_type) && $view_type == 'influencer')
        <style>
            .switch {
                position: relative;
                display: inline-block;
                width: 26px;
                height: 10px;

            }
            input:focus {
            border: 1px solid blue !important;
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

            .btn-primary:hover {
                background-color: #997045 !important;
            }

            .plan-h {
                position: relative;
                top: -28px;
                background: #fff;
                width: 150px;
                font-size: 25px;
                font-weight: bold;
            }

            /* .btn-primary:hover {
                background-color:#0504aa !important;
            } */
            /* .select2-container .select2-selection--single {
                height: 44px !important;
            } */
            .emojionearea.emojionearea-inline{
                height:44px !important;
            }
        </style>
    @endif
</head>
