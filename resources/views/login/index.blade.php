<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    {{-- <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">     --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/logo_tunas.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        @include('sweetalert::alert')
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-4 mx-auto">
              
              <div class="card-body px-4 py-4">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form action="/" method="POST">
                    @csrf
                  <div class="form-group">
                    <label>Username</label>
                    <div class="input-wrapper">
                      <i class="mdi mdi-account"></i>
                      <input type="text" class="form-control" id="username" name="username" placeholder="username" autocomplete="off" value="{{ old('username') }}" autofocus required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <div class="input-wrapper">
                    <i class="mdi mdi-key-variant"></i>  
                    <input type="password" class="form-control" id="password" name="password" placeholder="password" autocomplete="off" required>
                    </div>
                  </div>
                  {{-- <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div> --}}
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">{{ __('Login') }}</button>
                  </div>
                  <p class="sign-up">Don't have an Account? Contact your administrator</p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  </body>
</html>