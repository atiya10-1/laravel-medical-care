<style>
    /* Sidebar Item and Dropdown Styles */
    .sidebar-item a {
        color: black !important; /* Default text color for menu items */
    }

    .sidebar-item a.active,
    .sidebar-item a:hover {
        background-color: #555 !important; /* Dark grey background on hover and active */
        color: #fff !important; /* White text */
    }

    /* Sidebar Dropdown Styles */
    .sidebar-item .dropdown-menu {
        background-color: #333 !important; /* Dark background for dropdown */
        border: none; /* Remove border */
    }

    .sidebar-item .dropdown-menu a {
        color: #fff !important; /* White text for dropdown items */
    }

    .sidebar-item .dropdown-menu a:hover {
        background-color: #555 !important; /* Darker background on hover */
        color: #fff !important;
    }

    /* Sidebar Scrollable and Padding for Bottom Spacing */
    .sidebar-nav {
        max-height: 100vh; /* Full viewport height */
        overflow-y: auto; /* Enable vertical scrolling */
        padding-bottom: 2rem; /* Padding for bottom spacing */
    }

    /* Adding bottom margin to the last sidebar item */
    #sidebarnav li:last-child {
        margin-bottom: 5rem; /* Space below the last menu item */
    }

    /* Sidebar Small Device Menu */
    .sidebar-small-device-menu {
        position: relative;
        margin-top: 1rem; /* Place below last menu item */
        display: flex;
        justify-content: center;
    }

    /* Dropdown Style to Open Upward */
    .sidebar-small-device-menu .dropdown-menu {
        position: absolute;
        bottom: 100%; /* Opens dropdown upwards */
        left: 0;
        right: 0;
        background-color: #333;
        border-radius: 0.25rem;
    }

    .sidebar-small-device-menu .dropdown-menu a {
        color: #fff !important;
    }
</style>

<!-- Sidebar Code -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('usertheme/assets/img/logo/logo1.PNG') }}" alt="Logo" class="img-fluid" style="max-width: 180px; height: auto;">
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>

            <!-- Sidebar Navigation -->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu"><b>Home</b></span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                            <span><i class="ti ti-layout-dashboard"></i></span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu"><b>Actions</b></span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/add_doctor" aria-expanded="false">
                            <span><i class="bi-plus-circle"></i></span>
                            <span class="hide-menu">Add Doctor</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/doctor" aria-expanded="false">
                            <span><i class="bi-person-lines-fill"></i></span>
                            <span class="hide-menu">All Doctors</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/Add_Speciality" aria-expanded="false">
                            <span><i class="bi-person-fill"></i></span>
                            <span class="hide-menu">Add Speciality</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/All_Speciality" aria-expanded="false">
                            <span><i class="bi-person-fill"></i></span>
                            <span class="hide-menu">All Specialities</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/users" aria-expanded="false">
                            <span><i class="bi-person-fill"></i></span>
                            <span class="hide-menu">All Users</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu"><b>Appointments</b></span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/pending_appointments" aria-expanded="false">
                            <span><i class="bi-hourglass-split"></i></span>
                            <span class="hide-menu">Pending Appointments</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/cancelled_appointments" aria-expanded="false">
                            <span><i class="bi-x-circle"></i></span>
                            <span class="hide-menu">Cancelled Appointments</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/approved_appointments" aria-expanded="false">
                            <span><i class="bi-check-circle"></i></span>
                            <span class="hide-menu">Approved Appointments</span>
                        </a>
                    </li>
                </ul>

                <!-- Small Device - x-app-layout Menu -->
                <div class="sidebar-small-device-menu d-none d-sm-block"> <!-- Show only on small devices -->
                    <x-app-layout></x-app-layout>
                </div>
            </nav>
        </div>
    </aside>
    <!-- Sidebar End -->
</div>
