<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{route('admin.dashboard')}}"><ion-icon name="shield-half-outline"></ion-icon> {{config('app.name')}}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="{{route('admin.dashboard')}}">SP</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="{{ $title == 'Dashboard' ? 'active' : ''}}">
      <a href="{{route('admin.dashboard')}}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
    </li>
    <li class="menu-header">Diagnosis</li>
    <li class="{{ $title == 'Gejala' ? 'active' : ''}}">
      <a href="{{route('admin.gejala.index')}}" class="nav-link"><i class="fas fa-plus-square"></i><span>Gejala</span></a>
    </li>
    <li class="{{ $title == 'Penyakit' ? 'active' : ''}}">
      <a href="{{route('admin.penyakit.index')}}" class="nav-link"><i class="fas fa-medkit"></i> <span>Penyakit</span></a>
    </li>
    <li class="{{ $title == 'Basis Pengetahuan' ? 'active' : ''}}">
      <a href="{{route('admin.bp.index')}}" class="nav-link"><i class="fas fa-book"></i><span>Basis Pengetahuan</span></a>
    </li>
    <li class="{{ $title == 'Pasien' ? 'active' : ''}}">
      <a href="" class="nav-link"><i class="fas fa-users"></i><span>Pasien</span></a>
    </li>

    <li class="menu-header">Support</li>
    <li class="{{ $title == 'Akun' ? 'active' : ''}}">
      <a href="{{route('admin.berita.index')}}" class="nav-link"><i class="fas fa-user"></i><span>Akun</span></a>
    </li>
  </ul>
</aside>