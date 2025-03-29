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
        top: -3px;
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

    .influencerdetail {
        /* display: none;
        opacity:0.9;
        width:200px;
        position: absolute; */
        /* height: 270px; */
    }

    .avatar-one:hover .influencerdetail {
        top: 0;
        opacity: 1;
        visibility: visible;
        height: 100%
    }

    .avatar-one .influencerdetail {
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
        border-radius: 0.4rem;
        width: 100%;
        background: #000;
        z-index: -1;
        /* border-radius: 15px; */
        opacity: 0.8;
        -webkit-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out
    }

    .filled {
        color: #997045 !important;
    }

    .middle-search:focus {
        border: none !important;
        outline: none !important;
    }

    tr th {
        padding: 10px;
    }

    tr td {
        padding: 10px;
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

    .profile-cover-avatar {
        display: -ms-flexbox;
        display: flex;
        margin: -6.3rem auto 0.5rem auto;
        border: 3px solid #fff;
        border-radius: 50%;
    }

    .profile-cover {
        position: relative;
        padding: 1.75rem 2rem;
        border-radius: .75rem;
        height: 10rem;
    }

    .profile-cover-wrap {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        height: 10rem;
        background-color: #e7eaf3;
        border-radius: .75rem;
    }

    .profile-cover-img {
        width: 100%;
        height: 30rem;
        -o-object-fit: cover;
        object-fit: cover;
        vertical-align: top;
        border-radius: .75rem;
    }

    .profile-cover-avatar {
        display: -ms-flexbox;
        display: flex;
        margin: -6.3rem auto .5rem auto;
        border: 3px solid #fff;
        border-radius: 50%;
    }

    .profile-cover-avatar input[type="file"] {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: -1;
        opacity: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(19, 33, 68, .25);
        border-radius: 50%;
        transition: .2s;
    }

    .profile-cover-wrap {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        height: 10rem;
        background-color: #e7eaf3;
        border-radius: .75rem;
    }

    .profile-cover-img {
        width: 100%;
        height: 10rem;
        -o-object-fit: cover;
        object-fit: cover;
        vertical-align: top;
        border-radius: .75rem;
    }

    .cover-content {
        position: relative;
        z-index: 1;
        padding: 1rem 2rem;
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .custom-file-btn {
        position: relative;
        overflow: hidden;

    }

    .custom-file-btn-input {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    .profile-cover-avatar .avatar-img {
        display: block;
        max-width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        pointer-events: none;
        border-radius: 50%;
    }

    /* .avatar-xxl {
        width: 5.125rem;
        height: 5.125rem;
    }
    .avatar-xxl .border {
        border-width: 6px !important;
    }
    .avatar-xxl .rounded {
        border-radius: 8px !important;
    }
    .avatar-xxl .avatar-title {
        font-size: 30px;
    }
    .avatar-xxl.avatar-away:before,
    .avatar-xxl.avatar-offline:before,
    .avatar-xxl.avatar-online:before {
        border-width: 4px;
    } */

    .profile-cover-avatar {
        display: -ms-flexbox;
        display: flex;
        margin: -6.3rem auto .5rem auto;
        border: 3px solid #fff;
        border-radius: 50%;
    }

    .profile-cover-avatar input[type="file"] {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: -1;
        opacity: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(19, 33, 68, .25);
        border-radius: 50%;
        transition: .2s;
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
                            <li><a href="{{ env('BASE_URL') . 'dashboard-saved-influencers' }}">Saved Influencers</a>
                            </li>
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
                            <li><a href="{{ env('BASE_URL') . 'dashboard-transaction-history' }}">Transaction
                                    History</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ env('BASE_URL') . 'dashboard-messages' }}">Messages</a></li>
                    <li>
                        <div class="input-box text-center mx-auto"
                             style="border:none;height:35px;width:250px;border:1px solid #999;border-radius:30px;text-align:center;margin-top:20px;">
                            <input type="text" class="middle-search" placeholder=" Search..."
                                   style="border:none;height:30px;width:200px;"><i class="fa fa-search"></i>
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
                            <div class="noti-content p-2">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt src="{{ asset('assets/img/user/avatar-2.jpg')}}">
</span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span
                                                            class="noti-title">Brian Johnson</span> paid the invoice
                                                        <span class="noti-title">#DF65485</span></p>
                                                    <p class="noti-time"><span
                                                            class="notification-time">4 mins ago</span></p>
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
                                                    <p class="noti-details"><span
                                                            class="noti-title">Marie Canales</span> has accepted your
                                                        estimate <span class="noti-title">#GTR458789</span></p>
                                                    <p class="noti-time"><span
                                                            class="notification-time">6 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm flex-shrink-0">
                                                    <span class="avatar-title rounded-circle bg-primary-light"><i
                                                            class="far fa-user"></i></span>
                                                </div>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span
                                                            class="noti-title">New user registered</span></p>
                                                    <p class="noti-time"><span
                                                            class="notification-time">8 mins ago</span></p>
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
                                                    <p class="noti-details"><span
                                                            class="noti-title">Barbara Moore</span> declined the invoice
                                                        <span class="noti-title">#RDW026896</span></p>
                                                    <p class="noti-time"><span
                                                            class="notification-time">12 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media d-flex">
                                                <div class="avatar avatar-sm flex-shrink-0">
                                                    <span class="avatar-title rounded-circle bg-info-light"><i
                                                            class="far fa-comment"></i></span>
                                                </div>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">You have received a new message</span>
                                                    </p>
                                                    <p class="noti-time"><span
                                                            class="notification-time">2 days ago</span></p>
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
                                src="{{ session()->has('User') ? session()->get('User')->image_url : asset('assets/img/user.png')}}"
                                alt="img" width="40" height="40"
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
    <div class="container">
        <section style="border-top:2px solid #eee;">
            <div class="page-wrapper">
                <div class="content container">

                    <div class="profile-cover">
                        <div class="profile-cover-wrap">
                            <img class="profile-cover-img" src="assets/img/profiles/avatar-07.jpg" alt="Profile Cover">

                            <div class="cover-content">
                                <div class="custom-file-btn">
                                    <input type="file" class="custom-file-btn-input" id="cover_upload">
                                    <label class="custom-file-btn-label btn btn-sm btn-white" for="cover_upload">
                                        <i class="fas fa-camera"></i>
                                        <span class="d-none d-sm-inline-block ms-1">Update Cover</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="text-center mb-5">
                        <label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
                            <img class="avatar-img" src="assets/img/profiles/avatar-07.jpg" alt="Profile Image">
                            <input type="file" id="avatar_upload">
                            <span class="avatar-edit">
<i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>
</span>
                        </label>
                        <h2>Damon Cohn <i class="fas fa-certificate text-primary small" data-bs-toggle="tooltip"
                                          data-placement="top" title data-original-title="Verified"></i></h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="far fa-building"></i> <span>Versatile Workforce</span>
                            </li>
                            <li class="list-inline-item">
                                <i class="fas fa-map-marker-alt"></i> 359 Plains, PA 18705
                            </li>
                            <li class="list-inline-item">
                                <i class="far fa-calendar-alt"></i> <span>Joined March 2022</span>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- <div class="card">
                            <div class="card-body pt-0">
                            <div class="card-header mb-4">
                            <h5 class="card-title">Complete your profile</h5>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="progress progress-md flex-grow-1">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="ms-4">60%</span>
                            </div>
                            </div>
                            </div> -->
                            <div class="card">
                                <div class="card-body pt-0">
                                    <div class="card-header mb-4">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Profile</span>
                                            <a class="btn btn-sm btn-white" href="#" data-bs-toggle="modal"
                                               data-bs-target="#edit-profile">Edit</a>
                                        </h5>
                                    </div>

                                    <!------------->
                                    <div class="modal fade custom-modal" id="edit-profile">
                                        <div class="modal-dialog modal-dialog-centered" style="margin-top:-2px;">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Details</h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control"
                                                                   placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Contact Number</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Contact Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>About us</label>
                                                            <textarea type="text" class="form-control"
                                                                      placeholder="About us">
</textarea>
                                                        </div>
                                                        <div class="mt-4">
                                                            <button type="submit" class="btn btn-primary btn-block">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------->

                                    <ul class="list-unstyled mb-0">
                                        <li class="py-0">
                                            <small class="text-dark">About</small>
                                        </li>
                                        <li>
                                            Damon Cohn
                                        </li>
                                        <li>
                                            Versatile Workforce
                                        </li>
                                        <li class="pt-2 pb-0">
                                            <small class="text-dark">Contacts</small>
                                        </li>
                                        <li>
                                            <a href="https://kofejob.dreamguystech.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="ee8a8f8381808d818680ae8b968f839e828bc08d8183">[email&#160;protected]</a>
                                        </li>
                                        <li>
                                            570-613-6563
                                        </li>
                                        <li class="pt-2 pb-0">
                                            <small class="text-dark">Address</small>
                                        </li>
                                        <li>
                                            359 Coal Road<br>
                                            Plains, PA 18705
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex">
                            <div class="card w-100">
                                <div class="card-body pt-0">
                                    <div class="card-header mb-4">
                                        <h5 class="card-title">Activity</h5>
                                    </div>
                                    <ul class="activity-feed">
                                        <li class="feed-item">
                                            <div class="feed-date">Nov 16</div>
                                            <span class="feed-text"><a href="profile.html">Brian Johnson</a> has paid the invoice <a
                                                    href="view-invoice.html">"#CD41544"</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Nov 7</div>
                                            <span class="feed-text"><a href="profile.html">Marie Canales</a> has accepted your estimate <a
                                                    href="view-estimate.html">#GTR14544</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Jan 05</div>
                                            <span class="feed-text"><a href="profile.html">Brian Johnson</a> has paid the invoice <a
                                                    href="view-invoice.html">"#CD42565"</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Feb 10</div>
                                            <span class="feed-text"><a href="profile.html">Marie Canales</a> has accepted your estimate <a
                                                    href="view-estimate.html">#GTR422385</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Mar 25</div>
                                            <span class="feed-text"><a href="profile.html">Brian Johnson</a> has paid the invoice <a
                                                    href="view-invoice.html">"#CD6988"</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Mar 5</div>
                                            <span class="feed-text"><a href="profile.html">Marie Canales</a> has accepted your estimate <a
                                                    href="view-estimate.html">#GTR569231</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('layout.footer')
</div>
</body>
</html>
