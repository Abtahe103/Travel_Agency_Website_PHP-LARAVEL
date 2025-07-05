<style>
  /* Sidebar background */
  .sidebar {
    background-color:rgb(255, 255, 255) !important;
  }

  /* Default sidebar link */
  .sidebar .nav-link {
    color: #000 !important; /* black text */
    background-color: transparent !important;
    transition: all 0.3s ease;
  }

  /* Sidebar link hover and active background */
  .sidebar .nav-link:hover,
  .sidebar .nav-link:focus,
  .sidebar .nav-link.active {
    background-color: rgb(255, 145, 0) !important; /* orange background */
    color: #fff !important; /* white text on hover */
  }

  /* Orange vertical bar on active nav-link */
  .sidebar .nav-link.active {
    border-left: 4px solid rgb(255, 145, 0) !important;
    box-shadow: none !important;
  }

  /* Sidebar menu title (text inside link) */
  .sidebar .nav-link .menu-title {
    color: #000 !important; /* default black */
  }

  /* Sidebar menu title color on hover and active */
  .sidebar .nav-link:hover .menu-title,
  .sidebar .nav-link:focus .menu-title,
  .sidebar .nav-link.active .menu-title {
    color: #fff !important; /* white text on hover */
  }

  /* Sidebar icon color */
  .sidebar .nav-link .menu-icon i {
    color: #000 !important; /* default black */
  }

  /* Sidebar icon color on hover and active */
  .sidebar .nav-link:hover .menu-icon i,
  .sidebar .nav-link:focus .menu-icon i,
  .sidebar .nav-link.active .menu-icon i {
    color: #fff !important; /* white icon on hover */
  }

  /* Collapse arrow color */
  .sidebar .menu-arrow {
    color: #000 !important;
  }

  /* Collapse arrow color on hover/active */
  .sidebar .nav-link:hover .menu-arrow,
  .sidebar .nav-link:focus .menu-arrow,
  .sidebar .nav-link.active .menu-arrow {
    color: #fff !important;
  }

  /* Brand name styling */
  .brand-name {
    font-size: 24px;
    font-weight: bold;
    color: white; /* rest of letters white */
  }

  .brand-name::first-letter {
    color: rgb(255, 145, 0); /* orange */
    font-size: 36px;
    font-weight: bold;
  }
</style>


<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <h1 class="brand-name">Expedia</h1>
  </div>

  <ul class="nav">
    <!-- <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li> -->
    <br>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/orders') }}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Bookings</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('/view_template') }}">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Add Template</span>
      </a>
    </li>


    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#all-packages" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">All Packages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="all-packages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/view_all_package') }}">Add Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/show_all_package') }}">Show Packages</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
