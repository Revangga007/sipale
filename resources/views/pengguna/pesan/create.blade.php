@extends('layouts.pengguna.main')

@section('content')
    <section class="inn">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <form action="{{ route('pengguna.pesan.store') }}" method="post">
                        @csrf
                        {{-- <div class="row"> --}}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                                placeholder="Masukkan Nama Lengkap">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Masukkan Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- </div> --}}
                        <div class="form-group">
                            <label for="subjek">Subjek</label>
                            <input type="text" class="form-control @error('subjek') is-invalid @enderror" id="subjek"
                                name="subjek" placeholder="Masukkan Subjek">
                            @error('subjek')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" cols="15" rows="5"
                                placeholder="Masukkan Pesan"></textarea>
                        </div>
                        <div>
                            <a href="{{ route('pengguna.dashboard') }}" class="btn btn-danger btn-md">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-md">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </section>

@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
@endpush

@push('js')
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
@endpush
