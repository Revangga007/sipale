@extends('layouts.admin.main')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
        </div>
        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Ubah {{ $title }}</h4>
                </div>
                <form action="{{ route('admin.pw.update') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="password_lama">Password Lama</label>
                            <input type="password" class="form-control @error('password_lama') is-invalid @enderror"
                                id="password_lama" name="password_lama" placeholder="Masukkan Password Lama">
                            @error('password_lama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_baru">Password Baru</label>
                            <input type="password" class="form-control @error('password_baru') is-invalid @enderror"
                                id="password_baru" name="password_baru" placeholder="Masukkan Password Baru">
                            @error('password_baru')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="konfirmasi_password">Konfirmasi Password</label>
                            <input type="password" class="form-control @error('konfirmasi_password') is-invalid @enderror"
                                id="konfirmasi_password" name="konfirmasi_password"
                                placeholder="Masukkan Konfirmasi Password">
                            @error('konfirmasi_password_baru')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">
                                <i class="fas fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
                        </div>
                </form>
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