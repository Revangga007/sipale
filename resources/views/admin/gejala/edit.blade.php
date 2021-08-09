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
                <h4>Edit {{$title}}</h4>
            </div>
            <form action="{{route('admin.gejala.update', $gejala->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="id">Id Gejala</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ $gejala->id }}" readonly>
                        @error('id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Gejala</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" id="nama" name="nama" value="{{ $gejala->nama }}"  placeholder="Masukkan Nama Gejala">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
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