{{-- Navbar --}}
<header id="header" class="fixed-top no-print">
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
                <li class="{{ $title == 'Kontak' ? 'active' : null }}">
                    <a href="{{ route('pengguna.pesan.index') }}">Pesan</a>
                </li>
                @auth
                    <li><a href="{{ route('admin.dashboard') }}" class="appointment-btn scrollto text-white text-center"
                            style="width: 100px">Karyawan</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="appointment-btn scrollto text-white text-center"
                            style="width: 100px">Login</a>
                    </li>
                @endauth

            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header>
