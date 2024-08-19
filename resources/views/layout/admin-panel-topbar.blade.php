

<style>
    .noti-details{
        margin-bottom: 0px !important;

    }
    .dropdown-menu.show {
            display: block;
        }
        .main-nav li a.show {
    color: #0504aa !important;
}
</style>
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
                    <li class="has-submenu {{ request()->is('vendor/dashboard') || request()->is('vendor/influencers-filter') ? 'active' : '' }}">
                        <a href="{{ env('BASE_URL') . '/vendor/dashboard' }}">Influencers</a>
                    </li>
                    <li class="has-submenu {{ request()->is('vendor/favourite-influencers') ? 'active' : '' }}">
                        <a href="{{ env('BASE_URL') . '/vendor/favourite-influencers' }}">Favourite Influencers</a>
                    </li>
                    <li class="has-submenu {{ request()->is('chats/invited-influencers') ? 'active' : '' }}">
                        <a href="{{ env('BASE_URL') . '/chats/invited-influencers' }}">Invited Influencers</a>
                    </li>
            @else
        @php
        // dd( session()->get('User'));
        @endphp
                <li><a href="{{ env('BASE_URL') . '/influencer/dashboard' }}">Dashbaord</a></li>
                    <li class="has-submenu {{ request()->is('influencers/' . session()->get('User')['id'] . '/public-profile') ? 'active' : '' }}">
                        <a href="{{ env('BASE_URL') . '/influencers'}}/{{session()->has('User') ? session()->get('User')['id'] : '' }}/public-profile">Public
                            Profile</a></li>
                    <li class="has-submenu {{ request()->is('influencer/complete-profile') ? 'active' : '' }}"><a href="{{ env('BASE_URL') }}/influencer/complete-profile">Edit Profile</a>
                    </li>
            @endif
            <!-- <li class="has-submenu">
                    <a href="#">My contracts<i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                        <li><a href="{{ env('BASE_URL') . 'contracts' }}">My contracts</a></li>
                    </ul>
                </li> -->


                <li class="has-submenu {{ request()->is('subscriptions') || request()->is('reports/transaction-history') ? 'active' : '' }}">
                    <a href="#">Subscription<i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            @if(session()->get('role') == 'influencer')
                            <li><a href="{{ env('BASE_URL') . '/influncersubscriptions' }}">Subscriptions</a></li>
                            @else
                            <li><a href="{{ env('BASE_URL') . '/subscriptions' }}">Subscriptions</a></li>
                            @endif
                       
                       
                    <!-- <li><a href="{{ env('BASE_URL') . '/reports/my-reports' }}">Bank/card Details for Renewal</a>
                        </li> -->
                        <li><a href="{{ env('BASE_URL') . '/reports/transaction-history' }}">Transaction
                                History</a></li>
                    <!-- <li><a href="{{ env('BASE_URL') . '/reports/my-reports' }}">Download invoices</a></li> -->
                    </ul>
                </li>
                <li class="has-submenu {{ request()->is('chats') ? 'active' : '' }}"><a href="{{ env('BASE_URL') . '/chats' }}">Chats</a></li>
                <!-- <li>
                    <div class="input-box text-center mx-auto"
                         style="border:none;height:35px;width:250px;border:1px solid #999;border-radius:30px;text-align:center;margin-top:20px;">
                        <input type="text" class="middle-search" placeholder=" Search..."
                               style="border:none;height:30px;width:200px;outline:none !important;"><i class="fa fa-search"></i>
                    </div>
                </li> -->
                <!-- <li> -->
                <!-- <li><a href="#"><i class="fa fa-bell" style="font-size:20px;"></i></a></li> -->
                @php
                       
                @endphp 
                
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">
                        <!-- <i class="fa fa-bell" style="font-size:25px;"></i> <span class="badge badge-pill">5</span> -->
                        Notifications
                    </a>
     <div class="dropdown-menu notifications"
     style="width: 450px; margin-left: -240px; height: auto; overflow: auto;">
    <div class="topnav-dropdown-header" style="white-space: nowrap; gap: 171px; display: flex;">
        <span class="notification-title p-2">Notifications</span>
        <a href="javascript:void(0)" class="clear-noti p-2 read-all-notification" onclick="markAllAsRead()">Mark all as Read</a>
    </div>
    <div class="noti-content p-2" onclick="event.stopPropagation()">
        <ul class="notification-list">
            @forelse (getUnreadMessages() as $message)
            <li class="notification-message" style="margin-bottom: 5px; position: relative;">
                <div style="display: contents;">
                    <div class="media d-flex" style="background-color: whitesmoke; position: relative;">
                        <span class="avatar avatar-sm flex-shrink-0" style="margin: 12px;">
                            <img class="avatar-img rounded-circle" alt src="{{ $message->receiver->image_url ?? asset('assets/img/user/avatar-2.jpg')}}">
                        </span>
                       
                        <div class="media-body flex-grow-1" style="padding: 9px 0px 0px 11px; font-size: 12px;">
                            <p class="noti-details" style="font-weight:bolder ">
                                <span class="noti-title">{{$message->receiver->name ?? '' }}</span>
                            </p>
                            <p class="noti-details">
                                <span class="noti-title" style="font-weight: normal;">{{ $message->message }}</span>
                            </p>
                            <p class="noti-time" style="margin-top: 2px;">
                                <span class="notification-time" style="font-weight: normal;">{{ $message->message_recieved_time_diff }}</span>
                            </p>
                        </div>
                        <div class="notification-options" style="position: absolute; top: 0px; right: 12px;">
                            <button class="btn btn-link" onclick="toggleOptionsMenu(event)">
                                <i class="fa fa-ellipsis-h"></i>
                            </button>
                            <div class="options-menu" style="display: none; position: absolute; top: 30px; right: 0; background: white; border: 1px solid #ddd; border-radius: 4px; box-shadow: 0 2px 5px rgba(0,0,0,0.15); z-index: 1000;">
                                <a href="javascript:void(0)" class="dropdown-item" style="font-weight:200;" onclick="markAsRead('{{ $message->id }}')">Mark as Read</a>
                                <a href="javascript:void(0)" class="dropdown-item" style="font-weight:200;" onclick="removeNotification('{{ $message->id }}')">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @empty
            <li class="notification-message">
                <a href="#">
                    <div class="media d-flex">
                        <div class="media-body flex-grow-1">
                            <p class="noti-details text-center"><span class="noti-title" style="font-weight:300; ">No Messages</span></p>
                        </div>
                    </div>
                </a>
            </li>
            @endforelse
        </ul>
    </div>
    <div class="topnav-dropdown-footer" style="text-align: center;">
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
                       
                        <!-- <li><a href="{{ env('BASE_URL') . '/influencer/account-setting' }}">Settings</a></li> -->
                        @if(session()->get('role') == 'vendor')
                        <li><a href="{{ env('BASE_URL') . '/influencer/account-setting' }}">Edit Profile</a></li>
                        @endif
                        @if(session()->get('role') == 'influencer')
                         <li><a href="{{ env('BASE_URL') . '/influencer/account-setting' }}">Edit Profile</a></li>
                            <!-- <li>
                                <a href="{{ env('BASE_URL') . 'influencer/complete-profile' }}" class="logout-btn">
                                    Profile
                                </a>
                            </li> -->
                        @endif

                        {{-- <li><a href="{{ env('BASE_URL') . 'influencer/change-old-password  ' }}">Change Password</a> --}}
                        </li>
                        <li><a href="javascript:void(0)" class="logout-btn" onclick="logout(this)">Logout</a></li>
                    </ul>
                </li>
                <li><a href="#">&nbsp;</a></li>

            </ul>
        </div>
    </nav>
</header>

<script>
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
</script>
