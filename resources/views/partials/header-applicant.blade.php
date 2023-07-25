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
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-lg btn-block text-left">
                                            <i class="fa fa-power-off"></i>
                                        </button>
                                    </form>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                                <li class="user-info">
                                    <h5 class="user-name">{{ auth()->user()->username }}</h5>
                                    <span class="status ml-2">{{ auth()->user()->type }}</span>
                                </li>
                                <li> <a href="{{ route('profile.edit') }}"><i class="lnr lnr-user"></i>My Profile</a>
                                </li>
                                <li class="logout">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-lg btn-block text-left">
                                            <i class="fa fa-power-off"></i>
                                            <span class="pl-2">logout</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
