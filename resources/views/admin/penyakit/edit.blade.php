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
                    <h4>Edit {{ $title }}</h4>
                </div>
                <form action="{{ route('admin.penyakit.update', $penyakit->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id">Id penyakit</label>
                            <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id"
                                value="{{ $penyakit->id }}" readonly>
                            @error('id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama penyakit</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"" id=" nama"
                                name="nama" value="{{ $penyakit->nama }}" placeholder="Masukkan Nama Penyakit">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi penyakit</label>
                            <textarea name="deskripsi" id="deskripsi"
                                class="form-control">{!! $penyakit->deskripsi !!}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="solusi">Solusi penyakit</label>
                            <textarea name="solusi" id="solusi" class="form-control">{!! $penyakit->solusi !!}</textarea>
                            @error('solusi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar penyakit</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <br>
                            <img src='{{ asset("assets/gambar/$penyakit->gambar") }}' alt="{{ $penyakit->nama }}"
                                width="200px">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('admin.penyakit.show', $penyakit->id) }}" class="btn btn-danger"><i
                                class="fas fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>
@endpush

@push('script')
    <script>
        $(document).ready(() => {
            CKEDITOR.replace('deskripsi');
            CKEDITOR.replace('solusi');
        });
    </script>
@endpush
