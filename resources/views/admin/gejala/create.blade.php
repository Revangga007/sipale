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
                <h4>Tambah Gejala</h4>
            </div>
            <form action="{{route('admin.gejala.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode">Kode Gejala</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{old('kode')}}" required>
                        @error('kode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Gejala</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}" required>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{route('admin.gejala.index')}}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection