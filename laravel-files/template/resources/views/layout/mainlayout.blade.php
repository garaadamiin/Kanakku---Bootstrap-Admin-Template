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
   @if(Route::is(['error-404','error-500']))
   <body class="error-page">
     @endif
    <body>
    @if(!Route::is(['index-five']))   
  <!-- Main Wrapper -->
  <div class="main-wrapper">
    @endif 
    @if(Route::is(['index-five']))
    <div class="main-wrapper container">
      @endif

    @if(Route::is(['index-three']))
      <div class="container">
     @endif   
      @if(!Route::is(['error-404','error-500']))
    @include('layout.partials.header')
    @include('layout.partials.nav')
    @if(!Route::is(['index-four','index-five']))
    <!-- Page Wrapper -->
        <div class="page-wrapper">
          @endif

           @if(Route::is(['index-four']))
            <div class="page-wrapper-three">
              @endif

               @if(Route::is(['index-five']))
              <div class="page-wrapper page-wrapper-four">
                @endif

          <div class="content container-fluid">
            @yield('content')
          </div>
        </div>
      <!-- /Page Wrapper -->
    @endif
    @if(Route::is(['error-404','error-500']))
      @yield('content')
    @endif
  </div>
 <!-- /Main Wrapper -->
@include('layout.partials.footer-scripts')
  </body>
</html>
 