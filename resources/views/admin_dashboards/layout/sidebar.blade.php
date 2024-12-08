<!-- partial:partials/_sidebar -->
<style>
    .sidebar .sidebar-body{
        background-color: #f2e49c !important;
       
    }
    .nav-link{
        color: blue !important;
    }
    .sidebar .sidebar-body .nav .nav-item.active .nav-link{
        background-color: #f2e49c !important;

    }
    .sidebar .sidebar-body .nav .nav-item.active .nav-link span{
        font-weight: 900 !important;

    }
    .sidebar .sidebar-body .nav .nav-item:hover .nav-link {
        background-color: #f2e49c !important;
    }
    .sidebar .sidebar-body .nav .nav-item:hover .nav-link .link-title {
        font-weight: 900 !important;
       
    }
</style>
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
        <img src="{{asset('asset-admin/images/logo/Influencers Pro-01-01.png')}}" alt="logo">
            <!-- Influencers<span>Pro</span> -->
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item @if (isset($menu) && $menu == 'dashboard') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL').'/admins-dashboard/dashboard'}}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
           
            <li class="nav-item @if (isset($menu) && $menu == 'categories') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . '/admins-dashboard/categories'}}" class="nav-link">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title">Categories</span>
                </a>
            </li>
            @php
            //    dd($menu); 
            @endphp
            <li class="nav-item @if (isset($menu) && $menu == 'vendors') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . '/admins-dashboard/vendors'}}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Brands</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'influencers') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL'). '/admins-dashboard/influencers'}}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Influencers</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'admins') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . '/admins-dashboard/admins'}}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Admins</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'vendors/create') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . '/admins-dashboard/vendors/create'}}" class="nav-link">
                    <i class="link-icon" data-feather="plus-circle"></i>
                    <span class="link-title">Add Brands</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'influencers/create') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . '/admins-dashboard/influencers/create'}}" class="nav-link">
                    <i class="link-icon" data-feather="plus-circle"></i>
                    <span class="link-title">Add Influencers</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'admins/create') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . '/admins-dashboard/admins/create'}}" class="nav-link">
                    <i class="link-icon" data-feather="plus-circle"></i>
                    <span class="link-title">Add Admins</span>
                </a>
            </li>
           
           
            
            <li class="nav-item @if (isset($menu) && $menu == 'vendors/reviews') {{ 'active'}} @endif">
                <a href="{{ env('BASE_URL') . '/admins-dashboard/vendors/reviews'}}" class="nav-link">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">Reported Brands</span>
                </a>
            </li>
            <li class="nav-item @if (isset($menu) && $menu == 'influencers/reviews') {{ 'active'}} @endif ">
                <a href="{{ env('BASE_URL') . '/admins-dashboard/influencers/reviews'}}" class="nav-link">
                    <i class="link-icon" data-feather="activity"></i>
                    <span class="link-title">Reported Influencers</span>
                </a>
            </li>
           
           
        </ul>
    </div>
</nav>
