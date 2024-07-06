<header class="header header-bg">
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
                <img src="{{ asset('assets/img/logo/Influencers Pro-01-01.png')}}" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="#" class="menu-logo">
                    <img src="{{ asset('assets/img/logo/InfluencersPro-01.png')}}" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav nav">
                @if(session()->get('role') == 'vendor')
                    <li class="has-submenu">
                        <a href="#">Find Influencers<i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="has-submenu">
                            <li><a href="{{ env('BASE_URL') . 'vendor/dashboard' }}">Find Influencer</a></li>
                            <li><a href="{{ env('BASE_URL') . 'vendor/favourite-influencers' }}">Saved Influencers</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ env('BASE_URL') . 'influencer/dashboard' }}">Home</a></li>
                @endif
                <li class="has-submenu">
                    <a href="#">My contracts<i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                        <li><a href="{{ env('BASE_URL') . 'contracts' }}">My contracts</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Reports<i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                        <li><a href="{{ env('BASE_URL') . 'reports/my-reports' }}">My Reports</a></li>
                        <li><a href="{{ env('BASE_URL') . 'reports/transaction-history' }}">Transaction
                                History</a></li>
                    </ul>
                </li>
                <li><a href="{{ env('BASE_URL') . 'chats' }}">Messages</a></li>
                <li>
                    <div class="input-box text-center mx-auto"
                         style="border:none;height:35px;width:250px;border:1px solid #999;border-radius:30px;text-align:center;margin-top:20px;">
                        <input type="text" class="middle-search" placeholder=" Search..."
                               style="border:none;height:30px;width:200px;outline:none !important;"><i class="fa fa-search"></i>
                    </div>
                </li>
                <li>
                    <!-- <li><a href="#"><i class="fa fa-bell" style="font-size:20px;"></i></a></li> -->
                <li class="nav-item dropdown">
                    <a href="#" class=" nav-link" data-bs-toggle="dropdown">
                        <i class="fa fa-bell" style="font-size:25px;"></i> <span class="badge badge-pill">5</span>
                    </a>
                    <div class="dropdown-menu notifications"
                         style="width:400px; margin-left:-240px; height: 400px; overflow: auto">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title p-2">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti p-2 read-all-notification"> Clear All</a>
                        </div>
                        <div class="noti-content p-2">
                            <ul class="notification-list">
                                @forelse (getUnreadMessages() as $message)
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt
     src="{{ $message->user->image_url ?? asset('assets/img/user/avatar-2.jpg')}}">
</span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span
                                                            class="noti-title">{{ $message->message }}</span></p>
                                                    <p class="noti-time"><span
                                                            class="notification-time">{{ $message->message_recieved_time_diff }} ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @empty
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media d-flex">
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details text-center"><span
                                                            class="noti-title">No Message Found</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="has-submenu" style="padding-right:50px !important;">
                    <a href="{{ env('BASE_URL') . '#' }}"><img
                            src="{{ session()->has('User') ? session()->get('User')->image_url : asset('assets/img/user.png')}}"
                            alt="img" width="40" height="40"
                            style="border-radius:20px;margin-top:-10px;"></a>
                    <ul class="submenu" style="padding-left:-60px !important;">
                        {{--                        <li><a href="{{env('BASE_URL'). 'dashboard-vendor-profile'}}">Profile</a></li>--}}
                        {{--                        <li><a href="{{env('BASE_URL'). 'vendor-dashboard-settings'}}">Settings</a></li>--}}
                        <li><a href="{{ env('BASE_URL') . 'influencer/account-setting' }}">Settings</a></li>

                        @if(session()->get('role') == 'influencer')
                            <li>
                                <a href="{{ env('BASE_URL') . 'influencer/complete-profile' }}" class="logout-btn">
                                    Profile
                                </a>
                            </li>
                        @endif

                        <li><a href="{{ env('BASE_URL') . 'influencer/change-old-password  ' }}">Change Password</a></li>
                        <li><a href="javascript:void(0)" class="logout-btn" onclick="logout(this)">Logout</a></li>
                    </ul>
                </li>
                <li><a href="#">&nbsp;</a></li>

            </ul>
        </div>
    </nav>
</header>
