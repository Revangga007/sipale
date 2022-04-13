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
                    <h4>Tambah {{ $title }}</h4>
                </div>
                <form action="{{ route('admin.akun.update', $akun->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" name="name"
                                placeholder="Masukkan Nama Lengkap" value="{{ $akun->name }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                                name="username" placeholder="Masukkan username" value="{{ $akun->username }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Masukkan Email" value="{{ $akun->email }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{ route('admin.akun.index') }}" class="btn btn-danger">
                                <i class="fas fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
