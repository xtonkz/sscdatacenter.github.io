<nav class="sidebar sidebar-offcanvas" id="sidebar">

  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="/dashboard"><img src="assets/images/logo_sidebar.png" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="#"><img src="assets/images/logo_mini.png" alt="logo" /></a>
  </div>

  <ul class="nav">

    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle" src="assets/images/profile_icon.png" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name ml-3">
            <p class="mb-0 font-weight-normal">{{ auth()->user()->name }}</p>
            <span>{{ auth()->user()->branch }}</span>
          </div>
        </div>
      </div>
    </li>
    <!-- profile.sidebar -->
    <li class="nav-item nav-category">
      <span class="nav-link">Proses STNK</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/ajustnk">
        <span class="menu-icon">
          <i class="mdi mdi-book-open-page-variant"></i>
        </span>
        <span class="menu-title">Aju STNK</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="#">
        <span class="menu-icon">
          <i class="mdi mdi-book-open-page-variant"></i>
        </span>
        <span class="menu-title">Verifikasi STNK</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="#">
        <span class="menu-icon">
          <i class="mdi mdi-book-open-page-variant"></i>
        </span>
        <span class="menu-title">UI Birojasa</span>
      </a>
    </li>

    <li class="nav-item nav-category">
      <span class="nav-link">Logistic</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/pdd">
        <span class="menu-icon">
          <i class="mdi mdi-car-connected"></i>
        </span>
        <span class="menu-title">Planning Delivery</span>
      </a>
    </li>

    <li class="nav-item nav-category">
      <span class="nav-link">SSC</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/dashboard">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/data_do">
        <span class="menu-icon">
          <i class="mdi mdi-car"></i>
        </span>
        <span class="menu-title">DO Customer</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/afi">
        <span class="menu-icon">
          <i class="mdi mdi-clipboard"></i>
        </span>
        <span class="menu-title">Data Afi</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#os_stnk" aria-expanded="false" aria-controls="os_stnk">
        <span class="menu-icon">
          <i class="mdi mdi-certificate"></i>
        </span>
        <span class="menu-title">OS STNK</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="os_stnk">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/mstnk"> Mohon STNK </a></li>
          <li class="nav-item"> <a class="nav-link" href="/pstnk"> Pending STNK </a></li>
          <li class="nav-item"> <a class="nav-link" href="/stnkjadi"> STNK Jadi </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/invoice">
        <span class="menu-icon">
          <i class="mdi mdi-currency-usd"></i>
        </span>
        <span class="menu-title">Invoice</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/hs">
        <span class="menu-icon">
          <i class="mdi mdi-database"></i>
        </span>
        <span class="menu-title">History Stock</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/delvstnk">
        <span class="menu-icon">
          <i class="mdi mdi-car-connected"></i>
        </span>
        <span class="menu-title">Delivery STNK</span>
      </a>
    </li>
    @if(auth()->user()->role == 'Administrator')
    <li class="nav-item nav-category">
      <span class="nav-link">Admin Menu</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="#">
        <span class="menu-icon">
          <i class="mdi mdi-database"></i>
        </span>
        <span class="menu-title">Manage User</span>
      </a>
    </li>
    @endif
    {{-- <li class="nav-item menu-items">
      <a class="nav-link" data-toggle="collapse" href="#stock" aria-expanded="false" aria-controls="stock">
        <span class="menu-icon">
          <i class="mdi mdi-database"></i>
        </span>
        <span class="menu-title">History Stock</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="stock">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/hs_stnk"> STNK </a></li>
          <li class="nav-item"> <a class="nav-link" href="/hs_bpkb"> BPKB </a></li>
        </ul>
      </div>
    </li> --}}

    <!-- navigation bar -->

  </ul>

</nav>