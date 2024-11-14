<!DOCTYPE html>
<html lang="en">
@include('layout.web.header')
@include('modal.privacy-policy')
@include('modal.terms')
@include('modal.about-us')
<body class="home-page bg-one">

<div class="main-wrapper">

    @include('layout.web.topbar')

    @yield('content')
    @include('layout.web.footer')
</div>
</body>
</html>
