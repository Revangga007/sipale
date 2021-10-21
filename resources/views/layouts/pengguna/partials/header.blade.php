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

        <h1 class="logo mr-auto">
            <a href="{{ route('pengguna.dashboard') }}">{{ Str::upper(config('app.name')) }}</a>
        </h1>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="{{ route('pengguna.dashboard') }}">Dashboard</a></li>
                <li class="{{ $title == 'Diagnosis' ? 'active' : null }}">
                    <a href="{{ route('pengguna.diagnosa.index') }}">Diagnosa</a>
                </li>
                <li><a href="{{ route('pengguna.penyakit.index') }}">Info penyakit</a></li>
                <li><a href="{{ route('pengguna.dashboard') }}#tentang">Tentang</a></li>
                <li class="{{ $title == 'Kontak' ? 'active' : null }}">
                    <a href="{{ route('pengguna.pesan.index') }}">Kontak</a>
                </li>
                @auth
                    <li><a href="{{ route('admin.dashboard') }}" class="appointment-btn scrollto text-white text-center"
                            style="width: 100px">Admin</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="appointment-btn scrollto text-white text-center"
                            style="width: 100px">Login</a>
                    </li>
                @endauth

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header>
