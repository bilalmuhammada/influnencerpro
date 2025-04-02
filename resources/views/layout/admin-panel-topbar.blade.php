

<header class="header" style="border-bottom:0px solid #eee;">
    <style>
        .VIpgJd-ZVi9od-ORHb {
            display: none !important;
        }

        .select2-search__field{
            border-radius: 0.3rem;
            padding-left: 10px !important;
    border-color: #997045 !important;
}
/* .select2-container--default.select2-container--open.select2-container--below .select2-selection--single, .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple{
    margin-left: 3px !important;
} */
.select2-search__field:hover{
    border-color: blue !important;
}
.select2-container--default .select2-selection--single{
                border: 0px solid !important ;
            }
            .select2-dropdown {
                border: 0px solid !important;
            }

        .select2-container--default .select2-results > .select2-results__options {
            min-height: 120px;
        }
/* 
        .select2-selection__arrow {
            display: none;
        } */
        .select2-container--default .select2-selection--single .select2-selection__arrow b {

border-color:blue  transparent transparent transparent !important; 
}
.select2-container--default .select2-selection--single .select2-selection__arrow b:hover {

border-color:goldenrod transparent transparent transparent  !important; 
}
        .select2-selection .select2-selection--single {
            margin-left: -12px !important;
        }

        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
            color: blue !important;
        }

        .select2-container--default .select2-results>.select2-results__options {
            overflow-x: hidden !important;
            border-radius: 0.3rem;
            background-color: #ffffff !important;
            color: rgb(0, 0, 0) !important;
        }

        .select2-container--open .select2-dropdown--below {
            /* margin-left: -5px !important; */
            background-color: #ffffff !important;
        }

        .select2-container--default .select2-selection--single {
            border: 0px solid !important;
        }

        .register-btn,
        .log-btn {
            color: blue;
        }

        .register-btn:hover,
        .log-btn:hover {
            color: #997045 !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: rgb(0, 0, 1) !important;
            width: 200px !important;
           
            /* margin-left: 8px !important; */
        }

        .select2-container .select2-selection--single .select2-selection__rendered{
            padding-left: 8px;
        }
        #select2-language_dropdown-container{
           
            color: blue !important
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #997045;
            border-radius: 34px;
        }

        .colorchange{
color: blue;
        }
        
        .colorchange:hover{
color: goldenrod !important;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
    </style>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript">
        function translateLanguage() {
            var dropdown = document.getElementById("language_dropdown");
            var selectedLanguage = dropdown.options[dropdown.selectedIndex].value;

            if (selectedLanguage) {
                var googleTranslateCombo = document.querySelector('.goog-te-combo');
                if (googleTranslateCombo) {
                    googleTranslateCombo.value = selectedLanguage;
                    googleTranslateCombo.dispatchEvent(new Event('change'));
                }
            }
        }

        function formatOption(option) {
            if (!option.id) {
                return option.text;
            }

            var flagUrl = $(option.element).data('flag-url');
            return $('<span style="font-size:14px;font-weight:bold; white-space: nowrap;padding:8px;"><img src="' + flagUrl + '" class="img-flag" style="width: 20px; height:14px; margin-right: 5px;" /> ' + option.text + '</span>');
        }

        $(document).ready(function () {
            $('#language_dropdown').select2({
                width: 'resolve',
                templateResult: formatOption,
                templateSelection: formatOption,
                escapeMarkup: function (markup) {
                    return markup;
                }
            });

            function toggleOptionsMenu(event) {
                event.stopPropagation();
                const button = event.currentTarget;
                const optionsMenu = button.nextElementSibling;
                document.querySelectorAll('.options-menu').forEach(menu => {
                    if (menu !== optionsMenu) {
                        menu.style.display = 'none';
                    }
                });
                optionsMenu.style.display = optionsMenu.style.display === 'block' ? 'none' : 'block';
            }
        });
    </script>

    <nav class="navbar navbar-expand-lg header-nav" style="background-color: white;">
        <div class="navbar-header" style="display: flex;">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="{{ env('BASE_URL') }}" class="navbar-brand logo" style="margin-left: 57px;">
                <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid shaking" alt="Logo">
            </a>

            <div class="mobile-country desktop-menu-right" style="margin-top: 16px;">
                <select class="form-control country_dropdown select2" name="language_dropdown" style="width:155px;" id="language_dropdown" onchange="translateLanguage()">
                    {{-- <option value="null" selected class="colorchange">Language</option> --}}
                    @foreach(getlanguge() as $language)
                    <option value="{{ $language->prefix }}" data-flag-url="{{ $language->flag_image_url }}" {{ $language->id == 131 ? 'selected' : '' }}>
                        {{ $language->name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- <div class="country" style="border:0px solid green;position:relative;right:182px;"> --}}
           
        {{-- </div> --}}

        <div id="google_translate_element" style="display: none;"></div>

        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="#" class="menu-logo">
                    <img src="{{ asset('assets/img/logo/InfluencersPro-01.png') }}" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav nav" style="margin-right: 32px;">
                @if(session()->get('role') == 'vendor')
                <li class="has-submenu {{ request()->is('vendor/dashboard') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') . '/vendor/dashboard' }}">Influencers</a>
                </li>
              
                <li class="has-submenu {{ request()->is('vendor/favourite-influencers') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') . '/vendor/favourite-influencers' }}">Favourited Influencers</a>
                </li>
                <li class="has-submenu {{ request()->is('chats/invited-influencers') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') . '/chats/invited-influencers' }}">Invited Influencers</a>
                </li>
                @else
                <li><a href="{{ env('BASE_URL') . '/influencer/dashboard' }}">Dashboard</a></li>
                <li class="has-submenu {{ request()->is('influencers/' . session()->get('User')['id'] . '/public-profile') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') . '/influencers'}}/{{session()->has('User') ? session()->get('User')['id'] : '' }}/public-profile">Public Profile</a></li>
                <li class="has-submenu {{ request()->is('influencer/complete-profile') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') }}/influencer/complete-profile">Edit Profile</a></li>
                @endif

                <li class="has-submenu {{ request()->is('subscriptions') ? 'active' : '' }}">
                    <a href="#" style="color: #88878792">Subscription<i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu6" style="margin-left: 0px;">
                        @if(session()->get('role') == 'influencer')
                        <li><a href="{{ env('BASE_URL') . '/influncersubscriptions' }}">Subscriptions</a></li>
                        @else
                        <li><a href="{{ env('BASE_URL') . '/subscriptions' }}">Subscriptions</a></li>
                        @endif
                        <li><a href="{{ env('BASE_URL') . '/reports/transaction-history' }}">Transactions History</a></li>
                    </ul>
                </li>
                <li class="has-submenu {{ request()->is('chats') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') . '/chats' }}">Chats</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">Notifications</a>
                    <div class="dropdown-menu notifications" style="width: 450px; margin-left: -240px; height: auto; overflow: auto;">
                        <!-- Notification logic -->
                    </div>
                </li>
               
                <li class="has-submenu">
                    <a href="#">
                        <img src="{{ session()->has('User') ? session()->get('User')->influencer_profile_image_main : asset('assets/img/user.png') }}" alt="img" width="40" height="40" style="border-radius:20px;margin-top:-10px;">
                    </a>
                    <ul class="submenu" style="margin-left: -25px;">
                        <li><a href="{{ env('BASE_URL') . '/influencer/account-setting' }}">Edit Profile</a></li>
                        <li><a href="javascript:void(0)" class="logout-btn" onclick="logout(this)">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>




<script>

$(document).ready(function() {
        // Initialize Select2
        $(document).ready(function() {
     $('#language_dropdown').select2({
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
        return $('<span style="font-size:14px; font-weight:bold;  white-space: nowrap;padding:6px;"><img src="' + flagUrl + '" class="img-flag" style="width: 20px; height:14px; margin-right: 5px;margin-bottom: 6px;" /> ' + option.text + '</span>');
    } else {

    
        return $('<span style="font-size:14px;font-weight:bold;white-space: nowrap;padding:6px;"">' +
    // '<img src="{{ asset("/assets/img/social-icon/lang.png") }}" class="img-flag" style="width: 20px; height:20px; margin-right: 5px;margin-bottom: 11px;" />  +
    option.text + 
    '</span>');}
        // return $('<span style="font-size:18px;"><img src="' + flagUrl + '" class="img-flag" style="width: 30px; height: 20px; margin-right: 0px;" /> ' + option.text + '</span>');
    }


    function toggleOptionsMenu(event) {
    // Prevent event from propagating to parent elements
    event.stopPropagation();

    // Toggle visibility of the options menu
    const button = event.currentTarget;
    const optionsMenu = button.nextElementSibling;

    // Hide other open menus
    document.querySelectorAll('.options-menu').forEach(menu => {
        if (menu !== optionsMenu) {
            menu.style.display = 'none';
        }
    });

    // Toggle the current menu
    optionsMenu.style.display = optionsMenu.style.display === 'block' ? 'none' : 'block';
}
});
});
</script>