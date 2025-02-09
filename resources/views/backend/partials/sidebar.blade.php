<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i
                            class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span
                            class="align-middle">Online</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <a class="dropdown-item" href="pages-profile.html"><i
                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="apps-chat.html"><i
                    class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Messages</span></a>
            <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                    class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Taskboard</span></a>
            <a class="dropdown-item" href="pages-faqs.html"><i
                    class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Help</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pages-profile.html"><i
                    class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance :
                    <b>$5971.67</b></span></a>
            <a class="dropdown-item" href="pages-profile-settings.html"><span
                    class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                    class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Settings</span></a>
            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                    class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock
                    screen</span></a>
            <a class="dropdown-item" href="auth-logout-basic.html"><i
                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle"
                    data-key="t-logout">Logout</span></a>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a href="{{ route('admin.personal.info.create') }}"
                        class="nav-link {{ request()->routeIs('admin.personal.info.create') ? 'active' : '' }}"
                        data-key="t-personal-info" id="sidebar-personal-info">
                        <i class="ri-user-2-line"></i> <span data-key="t-personal-info">Personal Information</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.working.experience.index') }}"
                        class="nav-link {{ request()->routeIs('admin.working.experience.index') ? 'active' : '' }}"
                        data-key="t-working-experience" id="sidebar-working-experience">
                        <i class="ri-briefcase-2-line"></i> <span data-key="t-working-experience">Working
                            Experience</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.educational.qualification.index') }}"
                        class="nav-link {{ request()->routeIs('admin.educational.qualification.index') ? 'active' : '' }}"
                        data-key="t-educational-qualifications" id="sidebar-educational-qualifications">
                        <i class="ri-book-2-line"></i> <span data-key="t-educational-qualifications">Educational
                            Qualifications</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.my.skill.index') }}"
                        class="nav-link {{ request()->routeIs('admin.my.skill.index') ? 'active' : '' }}"
                        data-key="t-my-skills" id="sidebar-my-skills">
                        <i class="ri-skull-2-line"></i> <span data-key="t-my-skills">My Skills</span>
                    </a>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('admin.project.index') ? 'active' : '' }}"
                        href="{{ route('admin.project.index') }}">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Projects</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
