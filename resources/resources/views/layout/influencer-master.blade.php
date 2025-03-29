<!DOCTYPE html>
<html lang="en">
@include('layout.influencer-header')
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
        width: 100%;
        background: #000;
        border-radius: 0.4rem;
        z-index: -1;
        /* border-radius: 15px; */
        opacity: 0.8;
        -webkit-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out
    }

</style>
<body class="home-page bg-one">
<!-- <div id="global-loader">
    <div class="wrapper">
        <div class="circle circle-1"></div>
        <div class="circle circle-1a"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
    </div>
    <h1 class="heads">Loading&hellip;</h1>
</div> -->
<div class="main-wrapper">
    <header class="header">
        @include('layout.topbar')
    </header>
    @yield('content')
    @include('layout.footer')
</div>
</body>
</html>
