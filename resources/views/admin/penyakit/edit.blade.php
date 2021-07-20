@extends('layouts.admin.main')

@section('title')
    {{$title}}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>{{$title}}</h1>
    </div>

    <div class="section-body">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Tambah {{$title}}</h4>
            </div>
            <form action="{{route('admin.penyakit.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode">Kode penyakit</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{$penyakit->kode}}" required>
                        @error('kode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama penyakit</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$penyakit->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi penyakit</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control">{!! $penyakit->deskripsi !!}</textarea>
                        @error('kode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{route('admin.penyakit.index')}}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('js')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
@endpush

@push('script')
    <script>
        $(document).ready(()=>{
            CKEDITOR.replace('deskripsi');
        });
    </script>
@endpush