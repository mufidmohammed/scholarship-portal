<div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
        <h1><a href="index.html">Scholarship Portal</a></h1>
    </div>

    <div class="logo-icon text-center">
        <a href="" title="logo"><img src="{{ asset('assets/images/logo.png') }}" alt="logo-icon">
        </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

        <!-- sidebar nav start -->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="@if(request()->routeIs('personal')) active @endif">
                <a href="{{ route('personal') }}"><i class="fa fa-tachometer"></i><span>Personal Information</span>
                </a>
            </li>
            {{-- <li><a href="{{ route('admin.create') }}"><i class="fa fa-table"></i> <span>add reviewers</span></a></li> --}}
            <li class="@if(request()->routeIs('guardian')) active @endif">
                <a href="{{ route('guardian') }}"><i class="fa fa-th"></i><span>Guardian Information</span></a>
            </li>
            <li class="@if(request()->routeIs('education')) active @endif">
                <a href="{{ route('education') }}"><i class="fa fa-th"></i> <span>Education</span></a>
            </li>
            <li class="@if(request()->routeIs('result')) active @endif">
                <a href="{{ route('result') }}"><i class="fa fa-th"></i> <span>Result</span></a>
            </li>
            <li class="@if(request()->routeIs('upload')) active @endif">
                <a href="{{ route('upload') }}"><i class="fa fa-th"></i> <span>Uploads</span></a>
            </li>
            <li class="@if(request()->routeIs('summary')) active @endif">
                <a href="{{ route('summary') }}"><i class="fa fa-th"></i> <span>Summary</span></a>
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
