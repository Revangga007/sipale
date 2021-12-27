<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title ?? '' }} - {{ config('app.name') }}</title>
    <meta content="{{ config('app.name') }}" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    @stack('css')

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/pengguna/css/style.css') }}" rel="stylesheet">
    @stack('style')

</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts.pengguna.partials.header')
    <!-- End Header -->
    @if ($title != 'Dashboard')
        <main id="main">
    @endif

    <!-- ======= Breadcrumbs / Hero Section ======= -->
    @if ($title == 'Dashboard')
        @include('layouts.pengguna.partials.hero')
    @else
        @include('layouts.pengguna.partials.bcrum')
    @endif
    <!-- End Breadcrumbs / Hero Section -->

    @if ($title == 'Dashboard')
        <main id="main">
    @endif

    @if ($title != 'Dashboard')
    <section class="inner-page">
        @yield('content')
    </section>
    @endif

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('layouts.pengguna.partials.footer')
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    @stack('js')

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/pengguna/js/main.js') }}"></script>
    @stack('script')

    @include('layouts.pengguna.partials.flash')

</body>

</html>
