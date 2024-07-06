<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <title>InfluencersPro</title>

        <link rel="shortcut icon" href="{{ asset('assets/img/logo/Influencers Pro-01-01.png')}}" type="image/x-icon">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/feather.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css')}}">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css')}}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css')}}">

        <link rel="stylesheet" href="{{ asset('assets/plugins/c3-chart/c3.min.css')}}">

    </head>
    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 26px;
  height: 10px;
  
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  top:-3px;
  /* left: 4px; */
  /* bottom: 1px; */
  background-color: #0504aa;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(16px);
  -ms-transform: translateX(16px);
  transform: translateX(16px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.influencerdetail{
        /* display: none;
        opacity:0.9;
        width:200px;
        position: absolute; */
        /* height: 270px; */
    }
    .avatar-one:hover  .influencerdetail{
        top: 0;
    opacity: 1;
    visibility: visible;
    height: 100%
    }
    .avatar-one .influencerdetail{
        position: absolute;
    /* left: 0; */
    /* top: 0; */
    /* padding: 5px;  */
    /* padding-left:3px; */
    /* padding-right:3px; */
    z-index: 1;
    height: 200px;
    /* display: flex; */
    justify-content: center;
    align-items: center;
    transition: all 0.35s ease-in-out;
    width: 100%;
    visibility: hidden;
    opacity: 0
    }
    .avatar-one .influencerdetail::after {
    position: absolute;
    left: 0;
    top: 0;
    content: "";
    height: 200px;
    width: 100%;
    background: #000;
    z-index: -1;
    /* border-radius: 15px; */
    opacity: 0.8
    ;
    -webkit-transition: all 0.35s ease-in-out;
    transition: all 0.35s ease-in-out
}
.filled{
        color:#997045 !important;
    }
    .middle-search:focus{
         border: none !important; 
         outline: none !important; 
         }
         tr th{
            padding:10px;
         }
         tr td{
            padding:10px;
         }
         .select-group {
	background: #FFFFFF;
	box-shadow: 0px 2px 24px rgba(196, 196, 196, 0.25);
	border-radius: 5px;
	padding: 15px;
	margin: 15px 0px 19px;
}
.select-group .form-select {
	background-color: #FBFBFB;
	border: 0;
	height: 45px;
}
.select-group .form-select:focus {
	box-shadow: none;
}

.down-load {
    margin-left: auto;
}
.down-load .btn-primary {
    min-width: 118px;
    background: #1B2559;
    border-radius: 5px;
    color: #fff;
    border: 0;
    padding: 10px 15px;
}

ul li {
    list-style: none;
}
.subscribe-employe ul li {
    padding-bottom: 10px;
    position: relative;
}
.subscribe-employe ul {
    padding: 0;
    margin: 0;
    display: flex;
}
.subscribe-employe ul .active a {
    color: #0d6efd;
}
.subscribe-employe ul li a {
    padding: 0px 20px;
    font-size: 18px;
    color: #131523;
    font-weight: 600;
    
}
</style>
    <body>

        <div class="main-wrapper">


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
<a href="index.php" class="navbar-brand logo">
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
                           <li class="has-submenu">
                    <a href="#">Find Influencers<i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <li><a href="{{ env('BASE_URL') . 'vendor-dashboard' }}">Find Influencer</a></li>
                            <li><a href="{{ env('BASE_URL') . 'dashboard-saved-influencers' }}">Saved Influencers</a></li>
     </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">My contracts<i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <li><a href="{{ env('BASE_URL') . 'dashboard-contracts' }}">My contracts</a></li>
     </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Reports<i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <li><a href="{{ env('BASE_URL') . 'dashboard-my-reports' }}">My Reports</a></li>
                            <li><a href="{{ env('BASE_URL') . 'dashboard-transaction-history' }}">Transaction History</a></li>
     </ul>
                </li>
                    <li><a href="{{ env('BASE_URL') . 'dashboard-messages' }}">Messages</a></li>
                    <li>
                    <div class="input-box text-center mx-auto"  style="border:none;height:35px;width:250px;border:1px solid #999;border-radius:30px;text-align:center;margin-top:20px;">
                            <input type="text" class="middle-search" placeholder=" Search..."  style="border:none;height:30px;width:200px;"><i class="fa fa-search"></i>
                    </div>
                    </li>
                    <li>
                    <!-- <li><a href="#"><i class="fa fa-bell" style="font-size:20px;"></i></a></li> -->
                    <li class="nav-item dropdown">
<a href="#" class=" nav-link" data-bs-toggle="dropdown">
<i class="fa fa-bell" style="font-size:25px;"></i> <span class="badge badge-pill">5</span>
</a>
<div class="dropdown-menu notifications" style="width:400px; margin-left:-240px;">
<div class="topnav-dropdown-header">
<span class="notification-title p-2">Notifications</span>
<a href="javascript:void(0)" class="clear-noti p-2"> Clear All</a>
</div>
<div class="noti-content p-2" >
<ul class="notification-list">
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt src="{{ asset('assets/img/user/avatar-2.jpg')}}">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt src="{{ asset('assets/img/user/avatar-1.jpg')}}">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<div class="avatar avatar-sm flex-shrink-0">
<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
</div>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">New user registered</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt src="{{ asset('assets/img/user/avatar-1.jpg')}}">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<div class="avatar avatar-sm flex-shrink-0">
<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
</div>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li>

                <li class="has-submenu">
                    <a href="{{ env('BASE_URL') . '#' }}"><img
                            src="{{ session()->has('User') ? session()->get('User')->image_url : asset('assets/img/user.png')}}" alt="img" width="40" height="40"
                            style="border-radius:20px;margin-top:-10px;"></a>
                    <ul class="submenu">
                        <li><a href="{{env('BASE_URL'). 'dashboard-vendor-profile'}}">Profile</a></li>
                        <li><a href="{{env('BASE_URL'). 'vendor-dashboard-settings'}}">Settings</a></li>
                        <li><a href="javascript:void(0)" class="logout-btn" onclick="logout(this)">Logout</a></li>
                    </ul>
                </li>
                <li><a href="#">&nbsp;</a></li>

        </ul>
</div>
</nav>
            </header>
    <section style="border-top:2px solid #eee;">
<h2 class="text-center"><b>Account Setting</b></h2>
<div class="inner-fields text-center">
    <div class="col-md-6 mx-auto">
        <label for=""></label>
        <input type="text" name="" placeholder="Old Password.." class="form-control">
        <label for=""></label>
        <input type="text" name="" placeholder="New Password.." class="form-control">
        <label for=""></label>
        <input type="text" name="" placeholder="Confirm Password.." class="form-control">
        <div>&nbsp;</div>
        <button class="btn btn-primary" style="padding:10px 50px;">Submit</button>
        <div>&nbsp;</div>
    </div>
</div>
    </section>
    @include('layout.footer')
</div>
</body>
</html>
