<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <title>InfluencersPro</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/logo/Influencers Pro-01-01.png" type="image/x-icon') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
{{--    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">--}}

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>--}}
    <script src="{{ asset('assets/js/jquery-3.6.1.min.js')}}"></script>

    <!-- bar chart -->

{{--    <link rel="stylesheet" href="{{ asset('assets/plugins/c3-chart/c3.min.css')}}">--}}

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
        <script src="{{ asset('assets/js/slick-custom.js') }}"></script>
    @endif

 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lobibox@1.2.7/dist/css/lobibox.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
    <link rel="stylesheet" href="{{ asset('assets/js/emojionearea-master/dist/emojionearea.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>


    {{-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    
    <script>

          $(document).ready(function () {
            // alert('dd');
            $(".datepicker11").datepicker({
             dateFormat: 'dd-M-yy',
             changeMonth: true,
             changeYear: true,
             yearRange: "1950:+0",
            //  minDate: new Date(1980, 0, 1)
         });
         $(".datepicker11").change(function() {
    var input = $(this); // Store reference to `this`
    setTimeout(function() {
        input.parents('.form-focus').toggleClass('focused', input.val().length > 0);
    }, 10);
});
$(".datepicker1").datepicker({
             dateFormat: 'dd-M-yy',
             changeMonth: true,
             changeYear: true,
             yearRange: "2024:+0",
            //  minDate: new Date(1980, 0, 1)
         });
         $(".datepicker1").change(function() {
    var input = $(this); // Store reference to `this`
    setTimeout(function() {
        input.parents('.form-focus').toggleClass('focused', input.val().length > 0);
    }, 10);
});
         $(".datepicker22").datepicker({
             dateFormat: 'dd-M-yy',
             changeMonth: true,
             changeYear: true,
             yearRange: "1950:+0",
            //  minDate: new Date(1980, 0, 1)
         });
         $(".datepicker22").change(function() {
    var input = $(this); // Store reference to `this`
    setTimeout(function() {
        input.parents('.form-focus').toggleClass('focused', input.val().length > 0);
    }, 10);
});
$(".datepicker2").datepicker({
             dateFormat: 'dd-M-yy',
             changeMonth: true,
             changeYear: true,
             yearRange: "2024:+0",
            //  minDate: new Date(1980, 0, 1)
         });
         $(".datepicker2").change(function() {
    var input = $(this); // Store reference to `this`
    setTimeout(function() {
        input.parents('.form-focus').toggleClass('focused', input.val().length > 0);
    }, 10);
});
        });
        base_url = "{{ env('BASE_URL') }}";
        api_url = "{{ env("API_URL") }}";

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

        </style>
        @endif
</head>
