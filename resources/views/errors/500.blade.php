
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>500 &mdash; {{config('app.name')}}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/components.css')}}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>500</h1>
            <div class="page-description">
              Whoopps, something went wrong.
            </div>
          </div>
        </div>
        <div class="simple-footer mt-5">
          Copyright &copy; {{config('app.name')}}
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/popper/popper.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/vendor/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/vendor/moment/moment.min.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{asset('assets/admin/js/stisla.js')}}"></script>
  <script src="{{asset('assets/admin/js/scripts.js')}}"></script>
  <script src="{{asset('assets/admin/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
