<header class="header"  style="border-bottom:0px solid #eee;">
    <style>
        .VIpgJd-ZVi9od-ORHb{
            display: none !important;        }
    </style>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript">
        function translateLanguage() {
            var dropdown = document.getElementById("country_dropdown");
            alert(dropdown);
         
            var selectedLanguage = dropdown.options[dropdown.selectedIndex].value;
             alert(selectedLanguage);
            var languageMapping = {
                '1': 'en',  // Example: Country ID 1 maps to English
                '2': 'fr', // Example: Country ID 30 maps to French
                '3': 'ar', // Example: Country ID 13 maps to Arabic
                // Add your mappings here
            };

            var selectedLanguageCode = languageMapping[selectedLanguage];



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
                <select class="form-control country_dropdown1 " name="country_dropdown"  style="width:150px; background-color: transparent !important; border-color: transparent !important;" id="country_dropdown" onchange="translateLanguage()">>
                    @foreach(getCountries() as $country)
                   
                        <option
                        {{ $country->id == request()->country ? 'selected' : '' }} 
                        {{-- data-flag-url="{{ $country->image_url }}" --}}
                        value="{{ $country->id }}"
                        style="font-size:8px !important;">
                        {{ $country->name }}
                           
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
                    <a href="{{ env('BASE_URL') . '/register?role=influencer' }}">Register<i
                            class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu"></li>
                        <li><a href="{{ env('BASE_URL') . '/register?role=influencer' }}">As  Influencer</a></li>
                        <li><a href="{{ env('BASE_URL') . '/register?role=brand' }}">As  Brand</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('login') }}" class="log-btn">
                        <img src="{{ asset('assets/img/icon/lock-icon.svg') }}" class="me-1" alt="icon"> Login
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
<!-- </header> -->
