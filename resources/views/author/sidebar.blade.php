<style>
  /* Sidebar Item and Hover Styles */
.sidebar-item a {
    color: black !important; /* Default text color */
}

.sidebar-item a.active,
.sidebar-item a:hover {
    background-color: #555 !important; /* Dark grey background for active and hover */
    color: #fff !important; /* White text for contrast */
}

/* Sidebar Dropdown Styles */
.sidebar-item .dropdown-menu {
    background-color: #333 !important; /* Dark dropdown background */
    border: none; /* Remove border */
}

.sidebar-item .dropdown-menu a {
    color: #fff !important; /* White text in dropdown */
}

.sidebar-item .dropdown-menu a:hover {
    background-color: #555 !important; /* Dark grey hover background in dropdown */
    color: #fff !important;
}

/* Sidebar Scroll and Padding */
.sidebar-nav {
    max-height: 100vh; /* Full height of viewport */
    overflow-y: auto; /* Enable scroll */
    padding-bottom: 2rem; /* Add padding at the bottom */
}

/* Add bottom spacing to the last sidebar item */
#sidebarnav li:last-child {
    margin-bottom: 5rem;
}

/* Small Device Menu Adjustment */
.sidebar-small-device-menu {
    position: relative;
    margin-top: 1rem;
    display: flex;
    justify-content: center;
}

/* Adjust dropdown to open upward */
.sidebar-small-device-menu .dropdown-menu {
    position: absolute;
    bottom: 100%;
    left: 0;
    right: 0;
    background-color: #333;
    border-radius: 0.25rem;
}

.sidebar-small-device-menu .dropdown-menu a {
    color: #fff !important;
}

</style>

<!-- Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  
  <!-- Sidebar Start -->
  <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('usertheme/assets/img/logo/logo1.PNG') }}" alt="Logo" class="img-fluid" style="max-width: 120px; height: 100px;">
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>

      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu"><b>Doctor</b></span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu"><b>Actions</b></span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/Patients_req" aria-expanded="false">
              <span>
                <i class="bi-person-plus-fill"></i>
              </span>
              <span class="hide-menu">Patients request</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/Patients_aprov" aria-expanded="false">
              <span>
                <i class="bi-person-fill"></i>
              </span>
              <span class="hide-menu">Patients Approved</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="/Patients_cancel" aria-expanded="false">
              <span>
                <i class="bi-person-fill"></i>
              </span>
              <span class="hide-menu">Patients Cancelled</span>
            </a>
          </li>
        </ul>

        <!-- This div will only show on small devices -->
        <div class="d-block d-sm-none">
          <x-app-layout></x-app-layout>
        </div>

        <div class="d-flex"></div>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
  <!-- Sidebar End -->
</div>

<style>
  @media (min-width: 576px) {
    .d-block.d-sm-none {
      display: none; /* Hide on devices larger than small */
    }
  }

  
</style>
