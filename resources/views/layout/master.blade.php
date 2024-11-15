<!DOCTYPE html>
<html lang="en">
 @include('layout.header')
@include('modal.privacy-policy')
@include('modal.terms')

@include('modal.report_user')
@include('modal.about-us')
<body class="home-page bg-one">

<div class="main-wrapper">
    @if( session()->get('User')!=null)
    @include('layout.admin-panel-topbar')
    @endif

    @yield('content')
    @include('layout.footer')
</div>
</body>
</html>
