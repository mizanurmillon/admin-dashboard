<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"> <img class="img-fluid for-light"
                    src="{{ asset('backend/assets/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark"
                    src="{{ asset('backend/assets/images/logo/logo_dark.png') }}" alt=""></a>
            <div class="toggle-sidebar">
                <svg class="sidebar-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 4h6v6h-6z" />
                        <path d="M4 14h6v6h-6z" />
                        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M7 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    </svg>

                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                    src="{{ asset('backend/assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                                src="{{ asset('backend/assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                            href="{{ route('admin.dashboard') }}">
                            <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>

                            <svg class="fill-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />

                            </svg><span>Dashboard </span></a>
                    </li>
                    
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-8">Applications</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                            href="#">


                            <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 8v4" />
                                <path d="M12 16h.01" />
                            </svg>

                            <svg class="fill-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 8v4" />
                                <path d="M12 16h.01" />
                            </svg>
                            <span>Project </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="projects.html">Project List</a></li>
                            <li><a href="projectcreate.html">Create new</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="file-manager.html">

                            <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" width="32"
                                height="32" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                <path d="M9 17h6" />
                                <path d="M9 13h6" />
                            </svg>

                            <svg class="fill-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                <path d="M9 17h6" />
                                <path d="M9 13h6" />
                            </svg>

                            <span>File manager</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
