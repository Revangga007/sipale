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
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                        </div>
                        {{-- </div> --}}
                        <div class="form-group">
                            <label for="subjek">Subjek</label>
                            <input type="text" class="form-control" id="subjek" name="subjek"
                                placeholder="Masukkan Subjek">
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
