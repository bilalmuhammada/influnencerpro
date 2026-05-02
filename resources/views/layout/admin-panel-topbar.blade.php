<header class="header" style="border-bottom:0px solid #eee;">
    <style>
        .colorchange {
            color: #007bff;
        }

        .colorchange:hover {
            color: #daa520 !important;
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

        /* Notification Refinements */
        .notification-subject {
            margin-top: -2px;
            color: black !important;
            font-weight: 400 !important;
            transition: color 0.2s;
        }

        .notification-item:hover .notification-subject {
            color: #daa520 !important;
        }

        .three-dots-btn {
            color: #007bff !important;
            transition: color 0.2s;
        }

        .three-dots-btn:hover {
            color: #daa520 !important;
        }

        .notif-header-text {
            padding-left: 0px;
            color: black !important;
            font-weight: 400 !important;
        }

        .mark-all-btn {
            color: black !important;
            font-weight: 400 !important;
            text-decoration: none;
        }

        .notif-badge {
            background-color: #e6f7ef;
            color: #28a745;
            padding: 0px 4px;
            border-radius: 50px;
            font-size: 9px;
            margin-right: 0px;
            font-weight: bold;
        }

        .notifications-wrapper {
            padding: 0 !important;
        }

        .notification-item {
            padding: 0px 7px !important;
            background: #fff !important;
            border-radius: 0 !important;
            transition: background 0.2s;
        }

        .notification-item:hover {
            background-color: #efffff !important;
        }

        .notif-name {
            font-size: 14px;
            color: #333;
            margin-bottom: 2px;
        }

        .notif-desc {
            margin-bottom: 5px;
            font-size: 12px;
            color: #666;

        }

        .notif-time {
            font-size: 10px;
            color: #999;
        }

        .dropdown-menu {
            border-radius: 4px !important;
            padding: 0 !important;
        }

        .notif-chat {
            font-weight: normal;
            font-size: 14px;
            display: block;
            line-height: 1.2;
            ;
        }

        .notif-chat:hover {
            color: #daa520 !important;
        }

        .notification-item:hover .notif-chat {
            color: #daa520 !important;
        }

        .main-nav>li:last-child {
            margin-right: 0 !important;
        }

        .main-nav>li>a {
            padding: 10px 10px !important;
        }

        .view-all-link {
            color: red !important;
            text-decoration: none !important;
            transition: color 0.2s;
        }

        .view-all-link:hover {
            color: #daa520 !important;
        }

        /* Show dropdown on hover */
        @media (min-width: 992px) {
            .main-nav>li.dropdown:hover>.dropdown-menu {
                display: block !important;
                margin-top: 0;
            }
        }
    </style>



    @php
        $notifications = getNotifications();
        $unread_notifications_count = getUnreadNotificationsCount();
        $unread_messages = getUnreadMessages();
        $recent_chats = getRecentChats();
    @endphp

    <nav class="navbar navbar-expand-lg header-nav" style="background-color: white;">
        <div class="container d-flex align-items-center">
            <div class="navbar-header" style="display: flex; align-items: center;">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ env('BASE_URL') }}" class="navbar-brand logo">
                    <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid shaking"
                        alt="Logo">
                </a>

                <div class="mobile-country desktop-menu-right" style="margin-left: 20px;">
                    <select class="form-control" name="language_dropdown" style="width:150px;"
                        id="language_dropdown_nav" onchange="translateLanguage()">
                        @foreach(getlanguge() as $language)
                            <option value="{{ $language->prefix }}" data-flag-url="{{ asset($language->flag_image_url) }}"
                                {{ $language->prefix == 'en' ? 'selected' : '' }}>
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
                        <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid"
                            alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                @if(session()->get('User') != null)
                            <ul class="main-nav nav" style="display: flex !important; align-items: center;">

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
                                    <li class="{{ request()->is('influencer/dashboard') ? 'active' : '' }}"><a
                                            href="{{ env('BASE_URL') . '/influencer/dashboard' }}"
                                            class="{{ request()->is('influencer/dashboard') ? 'active' : '' }}">Dashboard</a></li>
                                    <li
                                        class="has-submenu {{ request()->is('influencers/' . session()->get('User')['id'] . '/public-profile') ? 'active' : '' }}">
                                        <a
                                            href="{{ env('BASE_URL') . '/influencers'}}/{{session()->has('User') ? session()->get('User')['id'] : '' }}/public-profile">Public
                                            Profile</a>
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
                                        <li><a href="{{ env('BASE_URL') . '/reports/transaction-history' }}">Transactions
                                                History</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown {{ request()->is('chats') ? 'active' : '' }}">
                                    @php
                                        $hasUnread = isset($unread_messages) && count($unread_messages) > 0;
                                    @endphp
                                    <a href="{{ $hasUnread ? '#' : url('/chats') }}" class="nav-link" id="chatLink" {!! $hasUnread
                    ? 'data-bs-toggle="dropdown"' : '' !!}>
                                        Chats @if($hasUnread) <span class="badge-premium-green">{{ count($unread_messages) }}</span>
                                        @endif
                                    </a>
                                    @if ($hasUnread)
                                        <div class="dropdown-menu notifications" id="chatDropdown"
                                            style="width: 400px; max-height: 350px; margin-left: -220px; padding:0px; border-radius: 4px !important; overflow: hidden; border: 1px solid #ddd;">
                                            <div class="d-flex justify-content-between align-items-center p-1"
                                                style="background: #fff; border-bottom: 1px solid #eee;">
                                                <span class="notif-header-text"
                                                    style="font-size: 14px; font-weight: 600 !important;">Chats</span>
                                                <span class="notif-badge" style="font-weight: bold;">{{ count($unread_messages) }}
                                                    New</span>
                                            </div>

                                            <div class="notifications-list" style="max-height: 250px; overflow-y: auto;">
                                                @foreach ($recent_chats as $message)
                                                                    <div class="notifications-wrapper" style="border-bottom: 1px solid #eee;">

                                                                        <a href="{{ env('BASE_URL') . '/chats' }}"
                                                                            style="text-decoration: none; color: inherit;">
                                                                            <div class="notification-item position-relative"
                                                                                style="background: {{ $message->is_readed ? '#fff' : 'aliceblue' }}; border-radius: 5px; padding: 2px 0px;">
                                                                                <div class="d-flex align-items-start" style="gap: 12px; flex: 1;">
                                                                                    <div
                                                                                        style="width: 57px; height: 57px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
                                                                                        <img src="{{ $message->sender && $message->sender->image_url ? $message->sender->image_url : asset('assets/img/default.png') }}"
                                                                                            alt="sender image"
                                                                                            style="width: 100%; height: 100%; object-fit: cover;">
                                                                                    </div>
                                                                                    <div style="flex: 1; min-width: 0;">
                                                                                        <strong class="notif-chat">{{ $message->sender ?
                                                    $message->sender->name : 'User' }}</strong>
                                                                                        <span style="font-size: 12px; color: #6c757d; font-weight: 400;">{{
                                                    \Illuminate\Support\Str::limit($message->message, 40) }}</span>
                                                                                        <br>
                                                                                        <small style="font-size: 10px; color: #adb5bd; font-weight: 400;">{{
                                                    \Carbon\Carbon::parse($message->created_at)->diffForHumans()
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }}</small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                @endforeach
                                            </div>

                                            <div class="notification-footer text-center p-1"
                                                style="background-color: white; border-top: 1px solid #eee;">
                                                <a href="{{ env('BASE_URL') . '/chats' }}" class="view-all-link"
                                                    style="font-size: 13px; font-weight: 600;">
                                                    View all Chats
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" id="notificationLink" data-bs-toggle="dropdown">
                                        Notifications @if($unread_notifications_count > 0) <span
                                            class="badge-premium-green notification-badge-count">{{ $unread_notifications_count
                                        }}</span> @endif
                                    </a>

                                    <div class="dropdown-menu notifications"
                                        style="width: 400px; max-height: 350px; margin-left: -220px;">

                                        @if (session()->has('User') && isset($notifications) && count($notifications) > 0)
                                            <!-- Header -->
                                            <div class="d-flex justify-content-between align-items-center p-2"
                                                style="padding-top: 3px !important; padding-bottom: 3px !important;">
                                                <span class="notif-header-text"
                                                    style="font-size: 14px; font-weight: 600 !important;">Notifications</span>
                                                <span class="notif-badge"><span
                                                        class="unread-count">{{ $unread_notifications_count
                                                                                                                                                                                                                                                                        }}</span>
                                                    New</span>
                                            </div>

                                            <hr class="m-0" style="border-top: 1px solid #f0f0f0; opacity: 1;">

                                            <!-- Notifications list -->
                                            @foreach ($notifications as $notification)
                                                            @if($loop->iteration > 3) @break @endif



                                                            <div class="notifications-wrapper"
                                                                style="border-bottom: 1px solid #f0f0f0; {{ $notification->read_at ? '' : 'background-color: aliceblue;' }}"
                                                                data-notification-id="{{ $notification->id }}">
                                                                <div class="notification-item" style="">
                                                                    <div class="d-flex align-items-start">
                                                                        <!-- Avatar -->
                                                                        @php
                                                                            $notifSender = \App\Models\User::find($notification->user_id);
                                                                            $specialties = '';
                                                                            if ($notifSender && $notifSender->categories) {
                                                                                $specialties = ' - ' .
                                                                                    $notifSender->categories->take(3)->pluck('name')->implode(', ');
                                                                            }
                                                                        @endphp
                                                                        <div
                                                                            style="width: 55px; height:53px; margin-top: 3px; border-radius: 2px; overflow: hidden; flex-shrink: 0; margin-right: 12px;">
                                                                            <img src="{{ $notifSender && $notifSender->image_url ? $notifSender->image_url : asset('assets/img/default.png') }}"
                                                                                alt="notification image"
                                                                                style="width: 100%; height: 100%; object-fit: cover;">
                                                                        </div>


                                                                        <!-- Content -->
                                                                        <div style="flex: 1; min-width: 0;">
                                                                            <div class="notif-name notification-subject">
                                                                                {{ $notifSender ?
                                                $notifSender->name . ' ' . $notifSender->last_name : 'Unknown User' }}{{
                                                $specialties }}
                                                                            </div>
                                                                            <div class="notif-desc">{{
                                                \Illuminate\Support\Str::limit($notification->data, 30) }}</div>
                                                                            <div class="notif-time">{{
                                                \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}
                                                                            </div>
                                                                        </div>

                                                                        <!-- Three Dots Menu -->
                                                                        <div class="dropdown three-dots-container ms-2" style="margin-top: 2px;">
                                                                            <button class="btn btn-link p-0 three-dots-btn" type="button"
                                                                                onclick="toggleDropdown(this, event)" style="font-size: 16px;">
                                                                                <i class="fa fa-ellipsis-h"></i>
                                                                            </button>

                                                                            <!-- Custom dropdown menu -->
                                                                            <div class="dropdown-menu-custom"
                                                    style="display: none; position: absolute; top: 100%; right: 0; background: white; border: 1px solid #ddd; border-radius: 4px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); min-width: 100px; z-index: 1000; padding: 4px 0 !important;">
                                                    @if(!$notification->read_at)
                                                        <a href="javascript:void(0)"
                                                            style="font-size: 11px; display: block; padding: 0px 12px; font-weight: 500; color: #007bff; text-decoration: none; background: transparent;"
                                                            onmouseover="this.style.color='#daa520'; this.style.backgroundColor='#fff';"
                                                            onmouseout="this.style.color='#007bff'; this.style.backgroundColor='transparent';"
                                                            onclick="markAsRead(this, {{ $notification->id }})">Mark as Read</a>
                                                    @endif
                                                    <a href="javascript:void(0)"
                                                        style="font-size: 11px; display: block; padding: 0px 12px; font-weight: 500; color: #007bff; white-space: nowrap; text-decoration: none; background: transparent;"
                                                        onmouseover="this.style.color='#daa520'; this.style.backgroundColor='#fff';"
                                                        onmouseout="this.style.color='#007bff'; this.style.backgroundColor='transparent';"
                                                        onclick="removeNotification(this, {{ $notification->id }})">Remove</a>
                                                </div>
                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                            @endforeach

                                            <div class="notification-footer text-center"
                                                style="padding: 4px 0; background-color: white; border-top: 1px solid #f0f0f0;">
                                                <a href="{{ env('BASE_URL') . '/notifications' }}" class="view-all-link"
                                                    style="font-weight: 600; font-size: 13px;">
                                                    View all Notifications
                                                </a>
                                            </div>

                                        @else
                                            <div class=" text-center">
                                                <em>No notifications available</em>
                                            </div>
                                        @endif
                                    </div>
                                </li>



                                <li class="has-submenu">
                                    <a href="#">
                                        <img src="{{ session()->has('User') ? session()->get('User')->influencer_profile_image_main : asset('assets/img/user.png') }}"
                                            alt="img" width="40" height="40" style="border-radius:20px;margin-top:-10px;">
                                    </a>
                                    <ul class="submenu"
                                        style="margin-left: -11px;  margin-top: -4px; font-weight: normal !important;">
                                        <li><a href="{{ env('BASE_URL') . '/influencer/account-setting' }}"
                                                style="font-weight: normal !important; font-size: 13px !important; color: #007bff !important;"
                                                onmouseover="this.style.color='#daa520'" onmouseout="this.style.color='#007bff'">Edit Profile</a>
                                        </li>
                                        <li><a href="javascript:void(0)" class="logout-btn" onclick="logout(this)"
                                                style="font-weight: normal !important; font-size: 13px !important; color: #007bff !important;"
                                                onmouseover="this.style.color='#daa520'" onmouseout="this.style.color='#007bff'">Sign Out</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>


                @endif
            </div>
        </div>
    </nav>
</header>




<script>


    $(document).ready(function () {
        $('#notificationLink, #chatLink').on('click', function (e) {
            if ($(this).attr('data-bs-toggle') === 'dropdown' || $(this).attr('id') === 'notificationLink') {
                $(this).closest('.dropdown').toggleClass('active');
            }
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
    function markAsRead(el, id) {
        $.ajax({
            url: base_url + '/notifications/' + id + '/mark-as-read',
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.success) {
                    const wrapper = $(el).closest('.notifications-wrapper');
                    wrapper.css('background-color', 'white');
                    $(el).remove(); // Remove "Mark as Read" link

                    // Update counts
                    updateNotificationCounts(-1);
                }
            }
        });
    }

    function removeNotification(el, id) {
        $.ajax({
            url: base_url + '/notifications/' + id + '/delete',
            type: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.success) {
                    const wrapper = $(el).closest('.notifications-wrapper');
                    const wasUnread = wrapper.css('background-color') === 'rgb(240, 248, 255)' || wrapper.attr('style').includes('aliceblue');
                    wrapper.remove();

                    if (wasUnread) {
                        updateNotificationCounts(-1);
                    }
                }
            }
        });
    }

    function updateNotificationCounts(change) {
        const badge = $('.notification-badge-count');
        const unreadLabel = $('.unread-count');

        let currentCount = parseInt(unreadLabel.text()) || 0;
        let newCount = currentCount + change;
        if (newCount < 0) newCount = 0;

        unreadLabel.text(newCount);
        if (newCount > 0) {
            badge.text(newCount);
        } else {
            badge.remove();
        }
    }

    // Clicking outside closes only three-dots menus
    document.addEventListener('click', function () {
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

    $(document).ready(function () {
        $('#language_dropdown_nav').select2({
            width: 'resolve',
            templateResult: formatFlagOption,
            templateSelection: formatFlagOption,
            escapeMarkup: function (markup) {
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
            width: '100%',
            language: {
                noResults: function () {
                    return "No Data";
                }
            }
        });

        $('.mySelect').select2({
            placeholder: " ",
            allowClear: true,
            minimumResultsForSearch: Infinity
        });
    });
</script>
<script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>