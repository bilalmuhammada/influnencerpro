<header class="header">
    <style>
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 5px !important;
        }
    </style>
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

            $('#chatLink, #chatLinkInfluencer').on('click', function(e) {
                $(this).closest('.dropdown').toggleClass('active');
            });
        });
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header" style="display: flex; align-items: center;">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon"></span>
            </a>
            <a href="{{ env('BASE_URL') }}" class="navbar-brand logo">
                <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid shaking" alt="Logo">
            </a>

            <div class="country">
                <div class="mobile-country desktop-menu-right">
                    <select class="form-control" name="language_dropdown" style="width:155px;" id="language_dropdown_nav" onchange="translateLanguage()">
                        @foreach(getlanguge() as $language)
                        <option value="{{ $language->prefix }}" data-flag-url="{{ asset($language->flag_image_url) }}" {{ $language->prefix == 'en' ? 'selected' : '' }}>
                            {{ $language->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div id="google_translate_element" style="display: none;"></div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="{{ env('BASE_URL') }}" class="menu-logo">
                    <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png') }}" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            @php
            $influencers = getDropdownMenu('influencer');
            $brands = getDropdownMenu('vendor');
            $unread_messages = getUnreadMessages();
            @endphp
            <ul class="main-nav nav">
                @if(session()->has('User') && session()->get('role') == 'vendor')
                {{-- ?<li class="active has-submenu"><a href="{{ env('BASE_URL') }}">Home</a></li> --}}
                <li class="nav-item dropdown {{ request()->is('chats') ? 'active' : '' }}">
                    <a href="#" class="nav-link" id="chatLink" data-bs-toggle="dropdown">
                        Chat @if(isset($unread_messages) && count($unread_messages) > 0) <span class="badge-premium-green">{{ count($unread_messages) }}</span> @endif
                    </a>
                    <div class="dropdown-menu notifications" id="chatDropdown" style="width: 400px; max-height: 350px; margin-left: -220px;">
                        @if (isset($unread_messages) && count($unread_messages) > 0)
                        <div class="row px-2 py-0">
                            <div class="col-6"><strong>Messages</strong></div>
                            <div class="col-6 text-end font-size-12">
                                <a href="{{ env('BASE_URL') . 'chats' }}" style="color: #000"> View all Chats</a>
                            </div>
                        </div>
                        <hr class="mt-0 mb-1">

                        @foreach ($unread_messages as $message)
                        <div class="notifications-wrapper" style="border-bottom: 1px solid #f0f0f0; margin-bottom: 4px;">
                            <a href="{{ env('BASE_URL') . 'chats' }}" style="text-decoration: none; color: inherit;">
                                <div class="notification-item position-relative" style="background: aliceblue; border-radius: 5px; padding: 2px 10px;">
                                    <div class="d-flex align-items-center" style="gap: 12px; flex: 1;">
                                        <div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
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

                        <div class="notification-footer text-center mt-2" style="background-color: white; border-top: 1px solid #f0f0f0;">
                            <a href="{{ env('BASE_URL') . 'chats' }}" style="color: blue; font-weight: bold; text-decoration: none;">
                                View all Chats
                            </a>
                        </div>
                        @else
                        <div class="p-3 text-center">
                            <em>No unread messages</em>
                            <br>
                            <a href="{{ env('BASE_URL') . 'chats' }}" class="btn btn-primary btn-sm mt-2" style="background-color: #0504aa; border: none; color: white;">Go to Chats</a>
                        </div>
                        @endif
                    </div>
                </li>

                @endif

                @if(session()->get('role') == 'influencer')
                <li><a href="{{ env('BASE_URL') . 'influencer/dashboard' }}">Dashboard</a></li>
                <li class="nav-item dropdown {{ request()->is('chats') ? 'active' : '' }}">
                    <a href="#" class="nav-link" id="chatLinkInfluencer" data-bs-toggle="dropdown">
                        Chat @if(isset($unread_messages) && count($unread_messages) > 0) <span class="badge-premium-green">{{ count($unread_messages) }}</span> @endif
                    </a>
                    <div class="dropdown-menu notifications" id="chatDropdownInfluencer" style="width: 400px; max-height: 350px; margin-left: -220px;">
                        @if (isset($unread_messages) && count($unread_messages) > 0)
                        <div class="row px-2 py-0">
                            <div class="col-6"><strong>Messages</strong></div>
                            <div class="col-6 text-end font-size-12">
                                <a href="{{ env('BASE_URL') . 'chats' }}" style="color: #000"> View all Chats</a>
                            </div>
                        </div>
                        <hr class="mt-0 mb-1">

                        @foreach ($unread_messages as $message)
                        <div class="notifications-wrapper" style="border-bottom: 1px solid #f0f0f0; margin-bottom: 4px;">
                            <a href="{{ env('BASE_URL') . 'chats' }}" style="text-decoration: none; color: inherit;">
                                <div class="notification-item position-relative" style="background: aliceblue; border-radius: 5px; padding: 2px 10px;">
                                    <div class="d-flex align-items-center" style="gap: 12px; flex: 1;">
                                        <div style="width: 50px; height: 50px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
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

                        <div class="notification-footer text-center mt-2" style="background-color: white; border-top: 1px solid #f0f0f0;">
                            <a href="{{ env('BASE_URL') . 'chats' }}" style="color: blue; font-weight: bold; text-decoration: none;">
                                View all Chats
                            </a>
                        </div>
                        @else
                        <div class="p-3 text-center">
                            <em>No unread messages</em>
                            <br>
                            <a href="{{ env('BASE_URL') . 'chats' }}" class="btn btn-primary btn-sm mt-2" style="background-color: #0504aa; border: none; color: white;">Go to Chats</a>
                        </div>
                        @endif
                    </div>
                </li>
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
                    <li><a href="{{ env('BASE_URL') . '/register?role=influencer' }}">As Influencer</a></li>
                    <li><a href="{{ env('BASE_URL') . '/register?role=brand' }}">As Brand</a></li>
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