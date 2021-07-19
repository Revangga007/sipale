
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') - {{config('app.name')}}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.min.css')}}">
{{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> --}}
  <!-- CSS Libraries -->
    @stack('css')

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/components.css')}}">

  <!-- Page Specific JS File -->
  @stack('style')

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
        <!-- Navbar -->
        @include('layouts.admin.partials.navbar')
        <!-- /Navbar -->  
      <div class="main-sidebar">
        <!-- Sidebar -->
        @include('layouts.admin.partials.sidebar')
        <!-- /Sidebar -->
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <!--Content-->
        @yield('content')
        <!--/Content-->
      </div>
      <!-- /Main Content -->
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://nauval.in/">Huriken</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/popper/popper.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/vendor/fontawesome/js/all.min.js')}}"></script>
  <script src="{{asset('assets/vendor/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/vendor/moment/moment.min.js')}}"></script>

  
  <!-- JS Libraies -->
  @stack('js')
  
  <!-- Template JS File -->
  <script src="{{asset('assets/admin/js/stisla.js')}}"></script>
  <script src="{{asset('assets/admin/js/scripts.js')}}"></script>
  <script src="{{asset('assets/admin/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  @stack('script')
  @include('layouts.admin.partials.flash')
</body>
</html>
