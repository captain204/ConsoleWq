<div>
    <div class="app-sidebar-menu">
        <div class="h-100" data-simplebar>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <div class="logo-box">
                    <a href="#" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="24">
                        </span>
                    </a>
                    <a href="#" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul id="side-menu">

                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i data-feather="home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>





                    <li>
                        <a href="#sidebarExpages" data-bs-toggle="collapse">
                            <i data-feather="file-text"></i>
                            <span> Quiz Management</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarExpages">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('quiz.list-category') }}" class="tp-link">Quiz List</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">Create New Quiz</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">Edit Quiz</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">Quiz Categories</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">New Question</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">Question Bank</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarBaseui" data-bs-toggle="collapse">
                            <i data-feather="package"></i>
                            <span> Content Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarBaseui">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#" class="tp-link">Categories & Tags</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">Media Library</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarAdvancedUI" data-bs-toggle="collapse">
                            <i data-feather="cpu"></i>
                            <span>Notifications & Alerts</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarAdvancedUI">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#" class="tp-link">Manage Notifications</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">Alert History</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarIcons" data-bs-toggle="collapse">
                            <i data-feather="settings"></i>
                            <span> Settings </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#" class="tp-link">General Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">Quiz Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">User Settings</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarCharts" data-bs-toggle="collapse">
                            <i data-feather="pie-chart"></i>
                            <span> Reports & Analytics </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="nav-second-level">
                                <li>
                                    <a href='#'>User Statistics</a>
                                </li>
                                <li>
                                    <a href='#'>Quiz Performance</a>
                                </li>
                                <li>
                                    <a href='#'>Engagement Metrics</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarAuth" data-bs-toggle="collapse">
                            <i data-feather="users"></i>
                            <span> User Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarAuth">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#" class="tp-link">User List</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">User Profiles</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">Roles & Permissions</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">Activity Logs</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarForms" data-bs-toggle="collapse">
                            <i data-feather="briefcase"></i>
                            <span> System Management </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#" class="tp-link">Backup & Restore</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">System Logs</a>
                                </li>
                                <li>
                                    <a href="#" class="tp-link">Integration Settings</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
    </div>
</div>