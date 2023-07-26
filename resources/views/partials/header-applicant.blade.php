<div class="header sticky-header">

    <!-- notification menu start -->
    <div class="menu-right">
        <div class="navbar user-panel-top">
            <div class="user-dropdown-details d-flex">
                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="profile_img">
                                    <form onclick="return confirm('Are you sure you want to logout?') && event.stopImmediatePropagation();" action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-lg btn-block text-left">
                                            <i class="fa fa-power-off"></i>
                                        </button>
                                    </form>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
