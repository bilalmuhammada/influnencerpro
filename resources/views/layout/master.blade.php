<!DOCTYPE html>
<html lang="en">
@include('layout.header')
@include('modal.privacy-policy')
@include('modal.terms')

@include('modal.report_user')
@include('modal.about-us')
<body class="home-page bg-one">

<div class="main-wrapper">
    
    @include('layout.admin-panel-topbar')

    
    @yield('content')
    @include('layout.footer')
</div>
</body>
</html>
