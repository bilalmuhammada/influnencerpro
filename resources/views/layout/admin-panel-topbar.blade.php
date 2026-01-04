<header class="header" style="border-bottom:0px solid #eee;">
    <style>
        .VIpgJd-ZVi9od-ORHb {
            display: none !important;
        }

        .select2-search__field {
            border-radius: 0.3rem;
            margin-top: 3px;
            padding-left: 10px !important;
            border-color: #997045 !important;
        }

        /* .select2-container--default.select2-container--open.select2-container--below .select2-selection--single, .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple{
    margin-left: 3px !important;
} */
        .select2-search__field:hover {
            border-color: blue !important;
        }

        .select2-container--default .select2-selection--single {
            border: 0px solid !important;
        }

        .select2-dropdown {
            border: 0px solid !important;
            margin-left: -2px;
        }

        .select2-container--default .select2-results>.select2-results__options {
            min-height: 120px;
        }

        /* 
        .select2-selection__arrow {
            display: none;
        } */
        .select2-container--default .select2-selection--single .select2-selection__arrow b {

            border-color: blue transparent transparent transparent !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow b:hover {

            border-color: goldenrod transparent transparent transparent !important;
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
            max-height: 195px !important;
            background-color: #ffffff !important;
            color: rgb(0, 0, 0) !important;
        }

        .select2-container--open .select2-dropdown--below {

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

        .select2-container .select2-selection--single .select2-selection__rendered {
            padding-left: 8px;
        }

        #select2-language_dropdown-container {

            color: blue !important
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #997045;
            border-radius: 34px;
        }



        .colorchange {
            color: blue;
        }

        .colorchange:hover {
            color: goldenrod !important;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        .dropdown-menu-custom {
            position: absolute;
            top: 2px;
            /* Adjust distance from the icon */
            left: 16rem;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            /* width: 150px; */
            display: none;
            /* Initially hidden */
            z-index: 1000;
        }

        /* Dropdown items */
        .dropdown-menu-custom a {
            display: block;
            padding: 3px;
            color: #333;
            text-decoration: none;
        }

        .dropdown-menu-custom a:hover {
            background-color: #f0f0f0;
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

    @php
    $notifications = [];

    $notifications = getNotifications();



    @endphp

    <nav class="navbar navbar-expand-lg header-nav" style="background-color: white;">
        <div class="navbar-header" style="display: flex;">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="{{ env('BASE_URL') }}" class="navbar-brand logo" style="margin-left: 62px;">
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
            @if( session()->get('User')!=null)
            <ul class="main-nav nav" style="margin-right: 32px;">
                @if(session()->get('role') == 'vendor')
                <li class="has-submenu {{ request()->is('vendor/dashboard') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') . '/vendor/dashboard' }}">Influencers</a>
                </li>

                <li class="has-submenu {{ request()->is('vendor/favourite-influencers') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') . '/vendor/favourite-influencers' }}">Favorited Influencers</a>
                </li>
                <li class="has-submenu {{ request()->is('chats/invited-influencers') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') . '/chats/invited-influencers' }}">Invited Influencers</a>
                </li>
                @else
                <li class="{{ request()->is('influencer/dashboard') ? 'active' : '' }}"><a href="{{ env('BASE_URL') . '/influencer/dashboard' }}" class="{{ request()->is('influencer/dashboard') ? 'active' : '' }}">Dashboard</a></li>
                <li class="has-submenu {{ request()->is('influencers/' . session()->get('User')['id'] . '/public-profile') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') . '/influencers'}}/{{session()->has('User') ? session()->get('User')['id'] : '' }}/public-profile">Public Profile</a>
                </li>
                <li class="has-submenu {{ request()->is('influencer/complete-profile') ? 'active' : '' }}">
                    <a href="{{ env('BASE_URL') }}/influencer/complete-profile">Edit Profile</a>
                </li>
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
                    <a href="{{ env('BASE_URL') . '/chats' }}">Chats</a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="notificationLink" data-bs-toggle="dropdown">
                        Notifications
                    </a>

                    <div class="dropdown-menu notifications"
                        style="width: 400px; max-height: 350px; margin-left: -220px;">

                        @if (session()->has('User') && isset($notifications) && count($notifications) > 0)
                        <!-- Header -->
                        <div class="row px-2 py-1">
                            <div class="col-6"><strong>Notifications</strong></div>
                            <div class="col-6 text-end">
                                <a href="#" onclick="markAllAsRead()">Mark all as Read</a>
                            </div>
                        </div>
                        <hr class="my-1">

                        <!-- Notifications list -->
                        @foreach ($notifications as $notification)



                        <div class="notifications-wrapper mb-2">
                            <div class="notification-item position-relative" style="background: aliceblue; border-radius: 5px; padding: 8px;">
                                <div class="row g-2">
                                    <div class="col-2">
                                        <div style="width: 60px; height: 60px; border-radius:50%; overflow: hidden;">
                                            <img src="{{ getValueById(\App\Models\User::class, $notification->user_id, 'image_url', asset('assets/img/default.png')) }}"
                                                alt="notification image"
                                                style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <strong>{{$notification->data}}</strong><br>
                                        <span>{{ getValueById(\App\Models\User::class, $notification->user_id, ['name', 'last_name'], 'Unknown User') }}
                                        </span><br>
                                        <small>10 min ago</small>
                                    </div>

                                    <div class="col-md-1" style="position: absolute; top: 10px; left: -8px;">
                                        <div class="dropdown">
                                            <!-- Button -->
                                            <button class="btn btn-link" type="button"
                                                onclick="toggleDropdown(this, event)"
                                                style="margin-left: 23rem; margin-top: -34px;">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>

                                            <!-- Custom dropdown menu -->
                                            <div class="dropdown-menu-custom" style="display: none; position: absolute; top: 100%; right: 0; background: white; border: 1px solid #ccc; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); min-width: 140px; z-index: 1000;">
                                                <a href="#" style="font-size: 12px;" onclick="markAsRead(this)">Mark as Read</a>
                                                <a href="#" style="font-size: 12px;" onclick="removeNotification(this)">Remove Notification</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="notification-footer text-center mt-2">
                            <a href="{{ env('BASE_URL').'notifications' }}" style="color: red;">
                                View all Notifications
                            </a>
                        </div>

                        @else
                        <div class="p-3 text-center">
                            <em>No notifications available</em>
                        </div>
                        @endif
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


            @endif
        </div>
    </nav>
</header>




<script>
    $(document).ready(function() {
        $('#notificationLink').on('click', function() {
            $(".dropdown").toggleClass('active'); // toggle active on click
        });
    });

    function toggleDropdown(element, event) {
        // Stop click from bubbling to parent notification dropdown
        event.stopPropagation();

        const dropdownMenu = element.nextElementSibling;

        // Close other three-dots menus
        document.querySelectorAll('.dropdown-menu-custom').forEach(menu => {
            if (menu !== dropdownMenu) menu.style.display = 'none';
        });

        // Toggle this menu
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    }

    // Example actions
    function markAsRead(el) {
        el.closest('.notification-item').style.background = '#fff';
    }

    function removeNotification(el) {
        el.closest('.notification-item').remove();
    }

    // Clicking outside closes only three-dots menus
    document.addEventListener('click', function() {
        document.querySelectorAll('.dropdown-menu-custom').forEach(menu => menu.style.display = 'none');
    });
</script>