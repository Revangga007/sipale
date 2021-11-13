@extends('layouts.pengguna.main')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($penyakits as $penyakit)
                <div class="col mb-4">
                    <div class="card h-100">
                        <div class="position-absolute bg-dark px-3 py-2 text-white">Penyakit</div>
                        <img src="{{ asset('assets/gambar/' . $penyakit->gambar) }}" class="card-img-top"
                            alt="{{ $penyakit->nama }}">
                        <div class="card-body">
                            <a href="{{ route('pengguna.penyakit.show', $penyakit->slug) }}">
                                <h5 class="card-title"><strong>{{ Str::title($penyakit->nama) }}</strong></h5>
                            </a>
                            <small class="text-muted">{{ $penyakit->created_at->diffForHumans() }}</small>
                            <p class="card-text">{!! Str::limit($penyakit->deskripsi, 100) !!}</p>
                            <hr>
                            <div class="detail text-right">
                                <a href="{{ route('pengguna.penyakit.show', $penyakit->slug) }}"
                                    class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
