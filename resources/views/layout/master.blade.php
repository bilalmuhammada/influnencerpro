<!DOCTYPE html>
<html lang="en">
@include('layout.header')
@include('modal.privacy-policy')
@include('modal.terms')

@include('modal.report_user')
@include('modal.about-us')

<body class="home-page bg-one">

    <div class="main-wrapper">
        @if(request()->is('/') || request()->is('login') || request()->is('register*') || request()->is('forgot-password') || request()->is('termcondition') || request()->is('privacy-policy'))
        @include('layout.topbar')
        @else
        @include('layout.admin-panel-topbar')
        @endif

        @yield('content')
        @include('layout.footer')
    </div>
</body>

</html>