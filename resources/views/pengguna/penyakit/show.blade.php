@extends('layouts.pengguna.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <strong>Detail Penyakit</strong>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="image text-center">
                        <h4>{{ $penyakit->nama }}</h4>
                        <img src="{{ asset('assets/gambar/' . $penyakit->gambar) }}" alt="{{ $penyakit->nama }}"
                            width="400px">
                    </div>
                    <div class="deskripsi">
                        <strong>Deskripsi</strong>
                        {!! $penyakit->deskripsi !!}
                    </div>
                    <div class="Solusi">
                        <strong>Solusi</strong>
                        {!! $penyakit->solusi !!}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('pengguna.penyakit.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
@endsection
