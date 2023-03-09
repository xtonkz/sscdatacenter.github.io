<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="assets/images/logo_mini.png" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
        </button>
        <div class="navbar-nav navbar-left">
            <h3 style="padding-left:10px;padding-top:4px">{{ $title }}</h3>
        </div>
        <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown">
            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
            <div class="navbar-profile">
                <img class="img-xs rounded-circle" src="assets/images/profile_icon.png" alt="">
                <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ auth()->user()->name }}</p>
                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list justify-content-center" aria-labelledby="profileDropdown">
                {{-- <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div> --}}
                {{-- <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings"></i>
                    </div>
                    </div>
                    <div class="preview-item-content">
                        <button class="btn btn-success xs"><i class="mdi mdi-settings"></i>Settings</button>
                    </div>
                </a>
                <div class="dropdown-divider"></div> --}}
                <a class="dropdown-item preview-item">
                    <div class="preview-item-content">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn btn-icon-append btn-danger xs"><i class="mdi mdi-logout"></i>Logout</button>
                        </form>
                    </div>
                </a>
            </div>
        </li>
        </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
            </button>                       
    </div>
</nav>