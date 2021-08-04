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
            <form action="{{route('admin.bp.store')}}" method="post">
                @csrf
                <div class="card-body">
                    {{-- <div class="form-group">
                        <label for="kode">Kode Basis Pengetahuan</label>
                        <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{old('kode')}}" required placeholder="Masukkan Kode Basis Pengetahuan">
                        @error('kode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="gejala">Nama Gejala</label>
                        <select class="form-control cb @error('gejala_id') is-invalid @enderror" id="gejala" name="gejala_id">
                            <option disabled selected>-- Pilih Gejala --</option>
                            @foreach ($gejalas as $gejala)
                            <option value="{{$gejala->id}}">{{$gejala->nama}}</option>
                            @endforeach
                        </select>
                        @error('gejala_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="penyakit">Nama Penyakit</label>
                        <select class="form-control cb @error('gejala_id') is-invalid @enderror" id="penyakit" name="penyakit_id">
                            <option disabled selected>-- Pilih Penyakit --</option>
                            @foreach ($penyakits as $penyakit)
                            <option value="{{$penyakit->id}}">{{$penyakit->nama}}</option>
                            @endforeach
                        </select>
                        @error('penyakit_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mb">MB</label>
                                <input type="number" step="0.1" value="0.0" min="0" max="1" class="form-control @error('mb') is-invalid @enderror" id="mb" name="mb">
                                @error('mb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="md">MD</label>
                                <input type="number" step="0.1" value="0.0" min="0" max="1" class="form-control @error('md') is-invalid @enderror" id="md" name="md">
                                @error('md')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <a href="{{route('admin.bp.index')}}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush

@push('script')
    <script>
        $(document).ready(()=> {
            $(".cb").select2();
        });
    </script>
@endpush

