<header class="header">
    <style>
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #997045;
            border-radius: 34px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        .select2-container--default .select2-selection--single {
            border: 0px solid !important;
            border-radius: 20px !important;
            height: 38px !important;
            padding-top: 4px !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b {
            border-color: #997045 transparent transparent transparent !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #997045 !important;
            font-weight: 500 !important;
        }

        .select2-dropdown {
            border: 0px solid !important;
            border-radius: 10px !important;
            overflow: hidden !important;
        }

        .select2-results__option--highlighted[aria-selected] {
            background-color: #997045 !important;
        }
    </style>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

        function translateLanguage() {
            var dropdown = document.getElementById("language_dropdown");
            var selectedLanguageCode = dropdown.options[dropdown.selectedIndex].value;
            if (selectedLanguageCode) {
                var googleTranslateCombo = document.querySelector('.goog-te-combo');
                if (googleTranslateCombo) {
                    googleTranslateCombo.value = selectedLanguageCode;
                    googleTranslateCombo.dispatchEvent(new Event('change'));
                }
            }
        }

        function formatOption(option) {
            if (!option.id) {
                return option.text;
            }
            var flagUrl = $(option.element).data('flag-url');
            var $option = $(
                '<span style="display: flex; align-items: center; font-size:14px; font-weight:500;">' +
                (flagUrl ? '<img src="' + flagUrl + '" class="img-flag" style="width: 20px; height:14px; margin-right: 8px;" /> ' : '') +
                option.text + '</span>'
            );
            return $option;
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        $(document).ready(function() {
            $('#language_dropdown').select2({
                width: 'resolve',
                templateResult: formatOption,
                templateSelection: formatOption,
                escapeMarkup: function(markup) {
                    return markup;
                }
            });

            // Persist language visually
            var googtrans = getCookie('googtrans');
            if (googtrans) {
                var lang = googtrans.split('/').pop();
                if (lang && $('#language_dropdown').val() !== lang) {
                    $('#language_dropdown').val(lang).trigger('change.select2');
                }
            }
        });
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon"></span>
            </a>
            <a href="{{ env('BASE_URL') }}" class="navbar-brand logo">
                <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid shaking" alt="Logo">
            </a>
        </div>
        <div id="google_translate_element" style="display: none;"></div>
        <div class="country" style="border:0px solid green;position:relative;left:-450px;">
            <div class="mobile-country desktop-menu-right">
                <select class="form-control country_dropdown select2" name="language_dropdown" style="width:155px;" id="language_dropdown" onchange="translateLanguage()">
                    @foreach(getlanguge() as $language)
                    <option value="{{ $language->prefix }}" data-flag-url="{{ $language->flag_image_url }}" {{ $language->prefix == 'en' ? 'selected' : '' }}>
                        {{ $language->name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
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
                {{-- ?<li class="active has-submenu"><a href="{{ env('BASE_URL') }}">Home</a></li> --}}
                <li class="has-submenu"><a href="{{ env('BASE_URL') }}chats">Chat</a></li>

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
                        {{-- <li><a href="{{ env('BASE_URL') . 'influencer/change-old-password  ' }}">Change Password</a>
                </li> --}}
                <li><a href="javascript:void(0)" class="logout-btn" onclick="logout(this)">Sign Out</a></li>
            </ul>
            </li>
            @endif
            <!-- <li><a href="about-us.php">About us</a></li>
            <li><a href="contact-us.php">Contact us</a></li> -->
            @if(session()->missing('User'))
            <li class="has-submenu">
                <a href="#">Register<i
                        class="fas fa-chevron-down"></i></a>
                <ul class="submenu">
                    <li class="has-submenu"></li>
                    <li><a href="{{ env('BASE_URL') . 'register?role=influencer' }}">As Influencer</a></li>
                    <li><a href="{{ env('BASE_URL') . 'register?role=brand' }}">As Brand</a></li>
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