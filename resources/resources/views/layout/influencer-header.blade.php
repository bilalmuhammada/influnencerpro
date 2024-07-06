<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <title>InfluencersPro</title>

        <link rel="shortcut icon" href="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" type="image/x-icon">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    </head>

    <script>
        base_url = "{{ env('BASE_URL') }}";
        api_url = "{{ env("API_URL") }}";

        token = localStorage.getItem('user_token');
    </script>
</head>
