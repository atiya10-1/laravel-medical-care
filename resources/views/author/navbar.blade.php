<!-- Header Start -->
<header class="app-header">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top"> <!-- Added fixed-top -->
    <ul class="navbar-nav">
      <li class="nav-item d-block d-xl-none">
        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
    </ul>
    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
        <!-- This div will show only on large devices -->
        <div class="d-none d-sm-block">
          <x-app-layout></x-app-layout>
        </div>
        <li class="nav-item dropdown">
          <!-- Additional dropdown items can be added here -->
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Header End -->
