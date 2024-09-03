<!DOCTYPE html>
<html lang="en">
 @include('layout.header')
@include('modal.privacy-policy')
@include('modal.terms')
@include('modal.about-us')
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
    @if( session()->get('User')!=null)
    @include('layout.admin-panel-topbar')
    @endif

    @yield('content')
    @include('layout.web.footer')
</div>
</body>
</html>
