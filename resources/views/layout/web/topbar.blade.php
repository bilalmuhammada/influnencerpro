<header class="header"  style="border-bottom:0px solid #eee;">

    <style>
        .VIpgJd-ZVi9od-ORHb{
            display: none !important;}

           
 .select2-container--default .select2-results > .select2-results__options {
    min-height: 120px; /* Set minimum height */
          }
          .select2-selection__arrow{
            display: none;
          }
          .select2-selection .select2-selection--single{
            margin-left: -12px !important;
          }
          .select2-container--default.select2-container--open.select2-container--below .select2-selection--single, .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple{
            margin-left: -10px !important;
          }
         
            .select2-container--default .select2-results>.select2-results__options{
                overflow-x: hidden !important;
                min-height: 120px !important;
                background-color: #000 !important;
                color: white !important;
            }

            .select2-container--open .select2-dropdown--below{
                background-color: #000 !important;
            }
            .select2-container--default .select2-selection--single{
                border: 0px solid !important ;
            }
            .register-btn, .log-btn{
                color: blue;
               

            }
            .select2-dropdown .select2-dropdown--below{
                width: 144px !important;
            }
            .register-btn:hover, .log-btn:hover{
                color: #997045 !important;

            }
            .select2-container--default .select2-selection--single .select2-selection__rendered{
                color: blue !important;
                width: 200px !important;
                margin-left: 10px !important; 
            }
            .select2-container--default .select2-selection--single .select2-selection__arrow {
                right: -15px !important;
            }
    </style>
    
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript">
        function translateLanguage() {
            var dropdown = document.getElementById("country_dropdown");
            // alert(dropdown);
         
            var selectedLanguage = dropdown.options[dropdown.selectedIndex].value;
            //  alert(selectedLanguage);
            

            // var selectedLanguageCode = languageMapping[selectedLanguage];

            var selectedLanguageCode =selectedLanguage;

            if (selectedLanguageCode) {
                var googleTranslateCombo = document.querySelector('.goog-te-combo');
                if (googleTranslateCombo) {
                    googleTranslateCombo.value = selectedLanguageCode;
                    googleTranslateCombo.dispatchEvent(new Event('change'));
                }
                else{
                    // alert('dd');
                    // translateLanguage();
                }
            }

        }
    </script>  
<nav class="navbar navbar-expand-lg header-nav">
    <div class="navbar-header">
        <a id="mobile_btn" href="javascript:void(0);">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
        </a>
        <a href="{{ env('BASE_URL') }}" class="navbar-brand logo">
            <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid" alt="Logo">
        </a>
    </div>


    <div class="country" style="border:0px solid green;position:relative;right:545px;">
        <div class="mobile-country desktop-menu-right">
            {{-- <label for="">Select</label> --}}
            
                {{-- <span style="color: #000;">Select languages</span> --}}
                @php
                // dd($countries[0]->image_url);
               @endphp
                {{-- <select class="form-control country_dropdown1" name="country_dropdown" id="country_dropdown">
                    <!-- Ensure options are correctly placed here -->
                    <option value="af" data-flag-url="https://flagcdn.com/w320/za.png">Afrikaans</option>
                    <option value="sq" data-flag-url="https://flagcdn.com/w320/al.png">Albanian</option>
                    <!-- Add more options as needed -->
                </select> --}}
                <select class="form-control country_dropdown1 " name="country_dropdown"  style="width:157px;" id="country_dropdown" onchange="translateLanguage()">>
                    <option value="null" selected style="color: blue;">Language</option>
                    @foreach(getlanguge() as $language)
                   
                        <option
                        {{-- {{ $country->id == request()->country ? 'selected' : '' }}  --}}
                          value="{{ $language->prefix }}"
                        data-flag-url="{{ $language->flag_image_url }}"
                      
                        {{-- style="font-size:8px !important;" --}}
                        >
                        {{ $language->name }}
                           
                        </option>
                    @endforeach
                </select>
               
        </div>
        </span>
</div>
<div id="google_translate_element" style="display: none;"></div>


    <div class="main-menu-wrapper">
        <div class="menu-header">
            <a href="{{ env('BASE_URL') }}" class="menu-logo">
                <img src="{{ asset('assets/img/logo/InfluencersPro-01.png') }}" class="img-fluid" alt="Logo">
            </a>
            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                <i class="fas fa-times"></i>
            </a>
        </div>
        @php
            $influencers = getDropdownMenu('influencer');
            $brands = getDropdownMenu('vendor');
        @endphp
        <ul class="main-nav nav">
            @if(session()->has('User') && session()->get('role') == 'vendor')
                <li class="active has-submenu"><a href="{{ env('BASE_URL') }}">Home</a></li>
                <li class="has-submenu"><a href="{{ env('BASE_URL') }}chats">Chat</a></li>
                <li class="has-submenu">
                    <a href="#">Influencers<i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                        @foreach($influencers as $influencer)
                            <li><a href="#">{{ $influencer->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="has-submenu"><a href="{{ env('BASE_URL') }}account-setting">Setting</a></li>
                {{--                <li class="has-submenu">--}}
{{--                    <a href="#">Brands<i class="fas fa-chevron-down"></i></a>--}}
{{--                    <ul class="submenu">--}}
{{--                        @foreach($brands as $brand)--}}
{{--                            <li><a href="#">{{ $brand->brand_name }}</a></li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </li>--}}
            @endif

            @if(session()->get('role') == 'influencer')
                    <li><a href="{{ env('BASE_URL') . 'influencer/dashboard' }}">Dashboard</a></li>
                    <li><a href="{{ env('BASE_URL') . 'chats' }}">Chat</a></li>
                <li class="has-submenu">
                    <a href="{{ env('BASE_URL') . '#' }}"><span><b>Welcome {{ session()->get('User')['full_name'] }} </b></span><img
                            src="{{ session()->has('User') ? session()->get('User')->image_url : asset('assets/img/user.png')}}" alt="img" width="40" height="40"
                            style="border-radius:20px;margin-top:-10px;"></a>
                    <ul class="submenu">
                        <li class="has-submenu"></li>
                        <li><a href="{{ env('BASE_URL') . 'influencer/account-setting' }}">Settings</a></li>
                        <li>
                            <a href="{{ env('BASE_URL') . 'influencer/complete-profile' }}" class="logout-btn">
                                Profile
                            </a>
                        </li>
                        {{-- <li><a href="{{ env('BASE_URL') . 'influencer/change-old-password  ' }}">Change Password</a></li> --}}
                        <li><a href="javascript:void(0)" class="logout-btn" onclick="logout(this)">Sign Out</a></li>
                    </ul>
                </li>
            @endif
        <!-- <li><a href="about-us.php">About us</a></li>
            <li><a href="contact-us.php">Contact us</a></li> -->
            @if(session()->missing('User'))
                <li class="has-submenu">
                    <a href="{{ env('BASE_URL') . '/register?role=influencer' }}" class="register-btn">Register<i
                            class="fas fa-chevron-down register-btn"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu"></li>
                        <li><a href="{{ env('BASE_URL') . '/register?role=influencer' }}">As  Influencer</a></li>
                        <li><a href="{{ env('BASE_URL') . '/register?role=brand' }}">As  Brand</a></li>
                    </ul>
                </li>
                <li style="margin-right: 14px;margin-left: -10px;">
                    <a href="{{ url('login') }}" class="log-btn">
                        {{-- <img src="{{ asset('assets/img/icon/lock-icon.svg') }}" class="me-1" alt="icon">  --}}
                        Login
                    </a>
                </li>

            @elseif(session()->get('role') != 'influencer')
                <li>
                    <a href="javascript:void(0)" class="logout-btn" onclick="logout(this)">
                        <img src="{{ asset('assets/img/icon/lock-icon.svg') }}" class="me-1" alt="icon"> Logout
                    </a>
                </li>
            @endif

        </ul>
    </div>
</nav>
</header>
<!-- Select2 CSS -->

<script>
    $(document).ready(function() {
        // Initialize Select2
        $(document).ready(function() {
    console.log('Initializing Select2');
    
    $('#country_dropdown').select2({
        width: 'resolve',
        templateResult: function(option) {
            console.log('Option:', option);
            return formatOption(option);
        },
        templateSelection: formatOption,
        escapeMarkup: function (markup) { return markup; }
    });

    function formatOption(option) {
        if (!option.id) { return option.text; }

        var flagUrl = $(option.element).data('flag-url');
        console.log('Flag URL:', flagUrl);

        if (flagUrl) {
        return $('<span style="font-size:14px;font-weight:bold;  white-space: nowrap;  padding:8px;"><img src="' + flagUrl + '" class="img-flag" style="width: 20px; height:14px; margin-right: 5px;" /> ' + option.text + '</span>');
    } else {
        // return $('<span style="font-size:18px;margin-left:25px;font-weight:600; "><img src="'   '" class="img-flag" style="width: 20px; height:14px; margin-right: 3px;" /> ' + option.text + '</span>');
    
        return $('<span style="font-size:14px;font-weight:bold;    white-space: nowrap; padding:8px;">' +
    '<img src="{{ asset("/assets/img/social-icon/lang.png") }}" class="img-flag" style="width: 20px; height:18px; margin-right: 5px;" /> ' +
    option.text + 
    '</span>');}
        // return $('<span style="font-size:18px;"><img src="' + flagUrl + '" class="img-flag" style="width: 30px; height: 20px; margin-right: 0px;" /> ' + option.text + '</span>');
    }
});
});
</script>

<!-- </header> -->
