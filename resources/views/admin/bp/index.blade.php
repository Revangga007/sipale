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
          <h4>Daftar Basis Pengetahuan</h4>
          <div class="card-header-action">
            <a href="{{ route('admin.bp.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
          </div>
        </div>
        <div class="card-body">

        </div>
      </div>
    </div>
</section>
@endsection