<header class="header" style="border-bottom:0px solid #eee;">
    <style>
       


        .colorchange {
            color: blue;
        }

        .colorchange:hover {
            color: goldenrod !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 5px !important;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        .dropdown-menu-custom {
            position: absolute;
            top: 100%;
            /* Position directly below button */
            right: 0;
            /* Align to right edge */
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

   
    @php
    $notifications = [];

    $notifications = getNotifications();
    $unread_messages = getUnreadMessages();

    @endphp

    <nav class="navbar navbar-expand-lg header-nav" style="background-color: white;">
        <div class="navbar-header" style="display: flex; align-items: center;">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="{{ env('BASE_URL') }}" class="navbar-brand logo" >
                <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid shaking" alt="Logo">
            </a>

            <div class="mobile-country desktop-menu-right" >
                <select class="form-control" name="language_dropdown" style="width:150px;" id="language_dropdown_nav" onchange="translateLanguage()">
                    @foreach(getlanguge() as $language)
                    <option value="{{ $language->prefix }}" data-flag-url="{{ asset($language->flag_image_url) }}" {{ $language->prefix == 'en' ? 'selected' : '' }}>
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
                    <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid" alt="Logo">
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

                <li class="nav-item dropdown {{ request()->is('chats') ? 'active' : '' }}">
                    <a href="#" class="nav-link" id="chatLink" data-bs-toggle="dropdown">
                        Chats @if(isset($unread_messages) && count($unread_messages) > 0) <span class="badge-premium-green">{{ count($unread_messages) }}</span> @endif
                    </a>
                    <div class="dropdown-menu notifications" id="chatDropdown" style="width: 400px; max-height: 350px; margin-left: -220px; padding:0px">
                        @if (isset($unread_messages) && count($unread_messages) > 0)
                        <div class="row px-2 py-0">
                            <div class="col-6"><strong>Messages</strong></div>
                            <div class="col-6 text-end font-size-12">
                                <a href="{{ env('BASE_URL') . '/chats' }}" style="color: #000"> View all Chats</a>
                            </div>
                        </div>
                        <hr class="mt-0 mb-1">

                        @foreach ($unread_messages as $message)
                        <div class="notifications-wrapper" style="border-bottom: 1px solid #f0f0f0; margin-bottom: 4px;">
                            <a href="{{ env('BASE_URL') . '/chats' }}" style="text-decoration: none; color: inherit;">
                                <div class="notification-item position-relative" style="background: aliceblue; border-radius: 5px; padding: 2px 10px;">
                                    <div class="d-flex align-items-center" style="gap: 12px; flex: 1;">
                                        <div style="width: 60px; height: 63px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
                                            <img src="{{ $message->sender && $message->sender->image_url ? $message->sender->image_url : asset('assets/img/default.png') }}"
                                                alt="sender image"
                                                style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div style="flex: 1; min-width: 0;">
                                            <strong style="font-size: 14px; display: block; line-height: 1.2; color: blue;">{{ $message->sender ? $message->sender->name : 'User' }}</strong>
                                            <span style="font-size: 12px; color: #6c757d;">{{ \Illuminate\Support\Str::limit($message->message, 40) }}</span>
                                            <br>
                                            <small style="font-size: 10px; color: #adb5bd;">{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        
                        <div class="notification-footer text-center " style="background-color: white; border-top: 1px solid #f0f0f0;">
                            <a href="{{ env('BASE_URL') . '/chats' }}" style="color: red; font-weight: bold; text-decoration: none;">
                                View all Chats
                            </a>
                        </div>
                        @else
                        <div class="p-3 text-center">
                            <em>No unread messages</em>
                            <br>
                            <a href="{{ env('BASE_URL') . '/chats' }}" class="btn btn-primary btn-sm" style=" border: none; color: red;">Go to Chats</a>
                        </div>
                        @endif
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" id="notificationLink" data-bs-toggle="dropdown">
                        Notifications @if(isset($notifications) && count($notifications) > 0) <span class="badge-premium-green">{{ count($notifications) }}</span> @endif
                    </a>

                    <div class="dropdown-menu notifications"
                        style="width: 400px; max-height: 350px; margin-left: -220px;">

                        @if (session()->has('User') && isset($notifications) && count($notifications) > 0)
                        <!-- Header -->
                        <div class="row px-2 py-0">
                            <div class="col-6"><strong>Notifications</strong></div>
                            <div class="col-6 text-end font-size-12">
                                <a href="#" style="color: #000" onclick="markAllAsRead()"> Mark all as Read</a>
                            </div>
                        </div>
                        <hr class="mt-0 mb-1">

                        <!-- Notifications list -->
                        @foreach ($notifications as $notification)
                        @if($loop->iteration > 3) @break @endif



                        <div class="notifications-wrapper" style="border-bottom: 1px solid #f0f0f0; margin-bottom: 4px;">
                            <div class="notification-item position-relative" style="background: aliceblue; border-radius: 5px; padding: 2px 10px;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center" style="gap: 12px; flex: 1;">
                                        <!-- Avatar -->
                                        <div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
                                            <img src="{{ getValueById(\App\Models\User::class, $notification->user_id, 'image_url') ?: asset('assets/img/default.png') }}"
                                                alt="notification image"
                                                style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>

                                        <!-- Content -->
                                        <div style="flex: 1; min-width: 0;">
                                            <strong style="font-size: 14px; display: block; line-height: 1.2; color: blue;">{{ \Illuminate\Support\Str::limit($notification->data, 30) }}</strong>
                                            <span style="font-size: 12px; color: #6c757d;">{{ getValueById(\App\Models\User::class, $notification->user_id, ['name', 'last_name'], 'Unknown User') }}</span>
                                            <br>
                                            <small style="font-size: 10px; color: #adb5bd;">{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</small>
                                        </div>
                                    </div>

                                    <!-- Three Dots Menu -->
                                    <div class="dropdown three-dots-container" style="position: relative;">
                                        <button class="btn btn-link p-0" type="button" onclick="toggleDropdown(this, event)" style="font-size: 18px;">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </button>

                                        <!-- Custom dropdown menu -->
                                        <div class="dropdown-menu-custom" style="display: none; position: absolute; top: 100%; right: 0; background: white; border: 1px solid #ccc; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.15); min-width: 140px; z-index: 1000;">
                                            <a href="#" style="font-size: 12px; display: block; padding: 4px 12px; color: #333; text-decoration: none;" onclick="markAsRead(this)">Mark as Read</a>
                                            <a href="#" style="font-size: 12px; display: block; padding: 4px 12px; color: #dc3545; white-space: nowrap; text-decoration: none;" onclick="removeNotification(this)">Remove Notification</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="notification-footer text-center mt-2" style="background-color: white; border-top: 1px solid #f0f0f0;">
                            <a href="{{ env('BASE_URL').'/notifications' }}" style="color: red; font-weight: bold; text-decoration: none;">
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
        $('#notificationLink, #chatLink').on('click', function(e) {
            $(this).closest('.dropdown').toggleClass('active');
        });
    });

    function toggleDropdown(element, event) {
        // Stop click from bubbling to parent notification dropdown
        event.stopPropagation();

        const dropdownMenu = element.closest('.three-dots-container').querySelector('.dropdown-menu-custom');

        // Close other three-dots menus
        document.querySelectorAll('.dropdown-menu-custom').forEach(menu => {
            if (menu !== dropdownMenu) menu.style.display = 'none';
        });

        // Toggle this menu
        dropdownMenu.style.display = (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') ? 'block' : 'none';
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
        document.querySelectorAll('.dropdown-menu-custom').forEach(menu => {
            menu.style.display = 'none';
        });
    });




</script>


 <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

        function translateLanguage() {
            var dropdown = document.getElementById("language_dropdown_nav");
            var selectedLanguageCode = dropdown.options[dropdown.selectedIndex].value;
            if (selectedLanguageCode) {
                var googleTranslateCombo = document.querySelector('.goog-te-combo');
                if (googleTranslateCombo) {
                    googleTranslateCombo.value = selectedLanguageCode;
                    googleTranslateCombo.dispatchEvent(new Event('change'));
                }
            }
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

        function formatFlagOption(option) {
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

        $(document).ready(function() {
            $('#language_dropdown_nav').select2({
                width: 'resolve',
                templateResult: formatFlagOption,
                templateSelection: formatFlagOption,
                escapeMarkup: function(markup) {
                    return markup;
                }
            });

            // Persist language visually
            var googtrans = getCookie('googtrans');
            if (googtrans) {
                var lang = googtrans.split('/').pop();
                if (lang && $('#language_dropdown_nav').val() !== lang) {
                    $('#language_dropdown_nav').val(lang).trigger('change.select2');
                }
            }

            $('#nationality_id,.selectMul').select2({
                placeholder: " ",
                allowClear: true,
                width: '100%'
            });

            
            
            
            $('.mySelect').select2({
                placeholder: " ",
                allowClear: true, 
                minimumResultsForSearch: Infinity
            });
        });
    </script>
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>