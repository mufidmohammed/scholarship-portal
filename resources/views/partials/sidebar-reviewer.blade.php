<div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
        <h1><a href="">Portal</a></h1>
    </div>

    <div class="logo-icon text-center">
        <a href="" title="logo"><img src="{{ asset('assets/images/logo.png') }}" alt="logo-icon">
        </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

        <!-- sidebar nav start -->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="@if(request()->routeIs('review.applicants')) active @endif">
                <a href="{{ route('review.applicants') }}"><i class="fa fa-tachometer"></i><span> Pending</span>
                </a>
            </li>
            {{-- <li><a href="{{ route('admin.create') }}"><i class="fa fa-table"></i> <span>add reviewers</span></a></li> --}}
            <li class="@if(request()->routeIs('review.granted')) active @endif">
                <a href="{{ route('review.granted') }}"><i class="fa fa-th"></i><span>Granted</span></a>
            </li>
            <li class="@if(request()->routeIs('review.dismissed')) active @endif">
                <a href="{{ route('review.dismissed') }}"><i class="fa fa-th"></i> <span>Dismissed</span></a>
            </li>
        </ul>
        <!-- //sidebar nav end -->
        <!-- toggle button start -->
        <a class="toggle-btn">
            <i class="fa fa-angle-double-left menu-collapsed__left"><span></span></i>
            <i class="fa fa-angle-double-right menu-collapsed__right"></i>
        </a>
        <!-- //toggle button end -->
    </div>
</div>
