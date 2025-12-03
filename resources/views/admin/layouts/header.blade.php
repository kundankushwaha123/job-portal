<!-- Header -->
<div class="header">

    <!-- Logo -->
    <div class="header-left active">
        <a href="{{ route('dashboard') }}" class="logo logo-normal">
            <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
            <img src="{{ asset('assets/img/white-logo.svg') }}" class="white-logo" alt="Logo">
        </a>
        <a href="index-2.html" class="logo-small">
            <img src="{{ asset('assets/img/logo-small.svg') }}" alt="Logo">
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
            <i class="ti ti-arrow-bar-to-left"></i>
        </a>
    </div>
    <!-- /Logo -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <div class="header-user">
        <ul class="nav user-menu">

            <!-- Search -->
            <li class="nav-item nav-search-inputs me-auto">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="#" class="dropdown">
                        <div class="searchinputs" id="dropdownMenuClickable">
                            <input type="text" placeholder="Search">
                            <div class="search-addon">
                                <button type="submit"><i class="ti ti-command"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <!-- /Search -->


            <!-- /Horizontal Single -->

            <!-- Nav List -->
            <li class="nav-item nav-list">
                <ul class="nav">
                    <li>
                        <div>
                            <a href="#" class="btn btn-icon border btn-menubar btnFullscreen">
                                <i class="ti ti-maximize"></i>
                            </a>
                        </div>
                    </li>
                    <li class="dark-mode-list">
                        <a href="javascript:void(0);" id="dark-mode-toggle" class="dark-mode-toggle">
                            <i class="ti ti-sun light-mode active"></i>
                            <i class="ti ti-moon dark-mode"></i>
                        </a>
                    </li>

                </ul>
            </li>


            <!-- Notifications -->
            <li class="nav-item dropdown nav-item-box">
                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="dropdown">
                    <i class="ti ti-bell"></i>
                    <span class="badge rounded-pill">13</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end notification-dropdown">
                    <div class="topnav-dropdown-header">
                        <h4 class="notification-title">Notifications</h4>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="assets/img/profiles/avatar-02.jpg" alt="Profile">
                                            <span class="badge badge-info rounded-pill"></span>
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details">Ray Arnold left 6 comments on Isla Nublar
                                                SOC2 compliance report</p>
                                            <p class="noti-time">Last Wednesday at 9:42 am</p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="activities.html" class="view-link">View all</a>
                        <a href="javascript:void(0);" class="clear-link">Clear all</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <!-- Profile Dropdown -->
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="nav-link userset" data-bs-toggle="dropdown">
                    <span class="user-info">
                        <span class="user-letter">
                            <img src="https://thumbs.dreamstime.com/b/job-vacancy-worker-icon-white-background-can-be-used-web-logo-mobile-app-ui-ux-134618748.jpg"
                                alt="Profile">
                        </span>
                        <span class="badge badge-success rounded-pill"></span>
                    </span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilename">
                        <a class="dropdown-item" href="index-2.html">
                            <i class="ti ti-layout-2"></i> Dashboard
                        </a>
                        <a class="dropdown-item" href="profile.html">
                            <i class="ti ti-user-pin"></i> My Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="ti ti-lock"></i> Logout
                        </a>
                    </div>
                </div>
            </li>
            <!-- /Profile Dropdown -->

        </ul>
    </div>

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="index-2.html">
                <i class="ti ti-layout-2"></i> Dashboard
            </a>
            <a class="dropdown-item" href="profile.html">
                <i class="ti ti-user-pin"></i> My Profile
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}">
                <i class="ti ti-lock"></i> Logout
            </a>
        </div>
    </div>
    <!-- /Mobile Menu -->

</div>
<!-- /Header -->

{{-- <!-- Sidebar --> start here  --}}
<div class="sidebar" id="sidebar">
    <div class="modern-profile p-3 pb-0">

        <div class="sidebar-nav mb-3">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-header p-3 pb-0 pt-2">

        <div class="d-flex align-items-center justify-content-between menu-item mb-3">
            <div class="me-3">
                <a href="calendar.html" class="btn btn-icon border btn-menubar">
                    <i class="ti ti-layout-grid-remove"></i>
                </a>
            </div>
            <div class="me-3">
                <a href="chat.html" class="btn btn-icon border btn-menubar position-relative">
                    <i class="ti ti-brand-hipchat"></i>
                </a>
            </div>
            <div class="me-3 notification-item">
                <a href="activities.html" class="btn btn-icon border btn-menubar position-relative me-1">
                    <i class="ti ti-bell"></i>
                    <span class="notification-status-dot"></span>
                </a>
            </div>
            <div class="me-0">
                <a href="email.html" class="btn btn-icon border btn-menubar">
                    <i class="ti ti-message"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="clinicdropdown">
                    <a href="profile.html">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/046/593/914/small/creative-logo-design-for-real-estate-company-vector.jpg"
                            class="img-fluid" alt="Profile">
                        <div class="user-names">
                            <h5>{{ Auth::user()->name }}</h5>
                            <p>Job-Portal</p>
                        </div>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <h6 class="submenu-hdr">Main Menu</h6>
                    <ul>

                        @php
                            $userrole = Auth::User()->role;
                        @endphp
                        @if ($userrole == 'user')
                            <li class="submenu">
                                <a href="#" class="active subdrop">
                                    <i class="ti ti-user-star"></i><span>Company</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="" class="active">Job</a></li>
                                    <li><a href="">Database/CV</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="submenu">
                                <a href="#" class=" subdrop">
                                    <i class="ti ti-user-star"></i><span>Company</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{ route('job-category') }}" class="active">Job Catagory</a></li>
                                    <li><a href="{{ route('job-role-category') }}">Job Role</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="{{route('dashboard')}}" class="subdrop">
                                    <i class="ti ti-user-star"></i><span>Jobs</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="" class="active">Job</a></li>
                                    <li><a href="">Database/CV</a></li>
                                </ul>
                            </li>
                        @endif


                    </ul>
                </li>
                <ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
