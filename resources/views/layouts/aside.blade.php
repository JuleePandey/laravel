<div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand">
        <a href="index.php" class="logo">
            <!-- <span>
                    <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span> -->
            <span>
                <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <div class="sidebar-user-pro media border-end">
        <div class="position-relative mx-auto">
            <img src="assets/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold">Suraj Pandey </h5>
            <p class="opacity-50 mb-0">director@acmeindia.co</p>
        </div>
    </div>
    <div class="border-end">
        <ul class="nav nav-tabs menu-tab nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#Main" role="tab"
                    aria-selected="true">M<span>ain</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Extra" role="tab"
                    aria-selected="false">E<span>xtra</span></a>
            </li>
        </ul>
    </div>
    <!-- Tab panes -->

    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                    <li class="menu-label mt-0 text-primary font-12 fw-semibold">M<span>ain</span><br><span
                            class="font-10 text-secondary fw-normal">Unique Dashboard</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAnalytics">
                            <i class="ti ti-stack menu-icon"></i>
                            <span>Analytics</span>
                        </a>
                        <div class="collapse " id="sidebarAnalytics">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="analytics-index.php">Dashboard</a>
                                </li>
                                <!--end nav-item-->
                                <!-- <li class="nav-item">
                                    <a href="analytics-customers.php" class="nav-link ">Customers</a>
                                </li>
                                <-end nav-item-->
                                 <!-- <li class="nav-item"> 
                                    <a href="analytics-reports.php" class="nav-link ">Reports</a>
                                </li> --> 
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end sidebarAnalytics-->
                    </li>
                    <!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarProjects">
                            <i class="ti ti-brand-asana menu-icon"></i>
                            <span>Projects</span>
                        </a>
                        <div class="collapse " id="sidebarProjects">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">Dashboard</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/clients') }}">Clients</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/teams')}}">Team</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/projects')}}">Project</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/tasks')}}">Task</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/kanban-boards')}}">Kanban Board</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/chats')}}">Chat</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/users')}}">Users</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/creates')}}">Project Create</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/forms')}}">Form</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/projectforms')}}">Project Form</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/registerforms')}}">Register Form</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/list')}}">List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/lists')}}">Lists</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/details')}}">Details</a>
                                </li>
                             
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end sidebarProjects-->
                    </li>
                    <!--end nav-item-->
                </ul>
                <ul class="navbar-nav tab-pane" id="Extra" role="tabpanel">
                    <li>
                        <div class="update-msg text-center position-relative">
                            <button type="button" class="btn-close position-absolute end-0 me-2"
                                aria-label="Close"></button>
                            <img src="assets/images/speaker-light.png" alt="" class="" height="110">
                            <h5 class="mt-0">Mannat Themes</h5>
                            <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                            <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your
                                plan</a>
                        </div>
                    </li>
                </ul>
                <!--end navbar-nav--->
            </div>
            <!--end sidebarCollapse-->
        </div>
    </div>
</div>