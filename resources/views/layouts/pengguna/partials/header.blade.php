{{-- Topbar --}}
{{-- <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
            <i class="icofont-phone"></i> +1 5589 55488 55
            <i class="icofont-google-map"></i> A108 Adam Street, NY
        </div>
        <div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
    </div>
</div> --}}

{{-- Navbar --}}
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="{{route('pengguna.dashboard')}}">{{Str::upper(config('app.name'))}}</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
    <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="{{$title == 'Dashboard' ? 'active' : null}}"><a href="{{route('pengguna.dashboard')}}">Dashboard</a></li>
        <li class="{{$title == 'Diagnosis' ? 'active' : null}}"><a href="#">Diagnosis</a></li>
        <li class="{{$title == 'About' ? 'active' : null}}"><a href="#services">Tentang</a></li>
        <li><a href="#departments">Kontak</a></li>
        {{-- <li><a href="#doctors">Doctors</a></li> --}}
        {{-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
            </ul>
        </li> --}}
        {{-- <li><a href="#contact">Contact</a></li> --}}

        </ul>
    </nav><!-- .nav-menu -->
    @auth
    <a href="{{route('admin.dashboard')}}" class="appointment-btn scrollto">Admin</a>
    @else
    <a href="{{route('login')}}" class="appointment-btn scrollto">Login</a>
    @endauth

    </div>
</header>