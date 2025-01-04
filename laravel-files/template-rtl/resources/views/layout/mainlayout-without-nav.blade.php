<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kanakku - Bootstrap Admin HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('/assets/img/favicon.png')}}">
    @include('layout.partials.head')
  </head>
    <body>
     <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
      <div class="login-wrapper">
        <div class="container">
           <img class="img-fluid logo-dark mb-4" src="{{ URL::asset('assets/img/logo.png')}}" alt="Logo">
            <div class="loginbox">
              <div class="login-right">
                <div class="login-right-wrap">
                   @yield('content')
                </div>
              </div>
          </div>
        </div>
     </div>
  </div>
 <!-- /Main Wrapper -->
@include('layout.partials.footer-scripts')
  </body>
</html>