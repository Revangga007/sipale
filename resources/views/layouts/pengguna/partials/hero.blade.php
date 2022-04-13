  <section id="hero" class="d-flex align-items-center">
      <div class="container">
          <h1>{{ str::upper(config('app.name')) }}</h1>
          <h2>Sistem pakar diagnosa penyakit pada kucing</h2>
          <a href="{{ route('pengguna.biodata.index') }}" class="btn-get-started">Mulai Diagnosa</a>
      </div>
  </section>
