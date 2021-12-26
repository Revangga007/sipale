@extends('layouts.admin.main')

@section('title')
    Dashboard
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-plus-square"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Gejala</h4>
                            </div>
                            <div class="card-body">
                                {{ $gejalas }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-medkit"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Penyakit</h4>
                            </div>
                            <div class="card-body">
                                {{ $penyakits }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Diagnosa</h4>
                            </div>
                            <div class="card-body">
                                {{$diagnosas}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Pesan</h4>
                            </div>
                            <div class="card-body">
                                {{ $pesans }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9"></div>
                <div class="col-3"></div>
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