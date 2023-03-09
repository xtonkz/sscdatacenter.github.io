<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{$title}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- End plugin css for this page -->
    <!-- dataTables:css -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader.css">
    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    
    <!-- icon -->
    <link rel="shortcut icon" href="assets/images/logo_tunas.png" />
  </head>
  <body>

    
    <div class="container-scroller">
        <!-- partial:partials/sidebar -->
        @include('partials.sidebar')
        <!------------------------------>
        <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/navbar -->
                @include('partials.navbar')
                <!------------------------------>
                <div class="main-panel">
                    <div class="content-wrapper">
                      <!------------content------------>
                        @include('sweetalert::alert')
                        @yield('content')
                      <!------------------------------>
                    </div>
                </div> <!-- main-panel ends -->           
        </div> <!-- page-body-wrapper ends -->     
    </div> <!-- container-scroller -->

    {{-- <footer class="text-center">
      <div class="row w-100">
        <div class="col">
          <div class="align-middle text-muted ml-1 p-3 float-left">
            © 2023 Copyright Logistic
          </div>
        </div>
        <div class="col">
        <div class="align-middle text-muted mr-5 p-3 float-right">
          Powered by :
          <img src="assets/images/laravel_logo.png" class="img-responsive" alt="laravel_logo" />
          <img src="assets/images/jquery_logo.png" class="img-responsive" alt="jquery_logo" />
          <img src="assets/images/html5_logo.png" class="img-responsive" alt="html5_logo" />
          <img src="assets/images/mysql_logo.png" class="img-responsive" alt="mysql_logo" />
          <img src="assets/images/bootstrap5.png" class="img-responsive" alt="bootstrap_logo" />
        </div>
      </div>
    </div>
    </footer> --}}

  
    @include('partials.script')
    @include('partials.scriptProses')
    @include('partials.showdash')
    @include('partials.delvStnkModal')
    @stack('scripts')
  
    <input type="hidden" id="getChart" url="{{route('getChart')}}" />
    <!-- plugins:js -->
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script> 
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <script src="assets/js/get-table.js"></script> --}}
    <!-- End custom js for this page -->
  </body>
</html>