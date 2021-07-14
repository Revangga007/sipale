
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') - {{config('app.name')}}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
  <script src="{{asset('assets/vendor/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/vendor/moment/moment.min.js')}}"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> --}}
  
  <!-- JS Libraies -->
  @stack('js')
  
  <!-- Template JS File -->
  <script src="{{asset('assets/admin/js/stisla.js')}}"></script>
  <script src="{{asset('assets/admin/js/scripts.js')}}"></script>
  <script src="{{asset('assets/admin/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  @stack('script')
</body>
</html>
