@extends('layouts.admin.main')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <section class="section">
        {{-- Header --}}
        <div class="section-header">
            <h1>{{ $title }}</h1>
        </div>
        {{-- Body --}}
        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Daftar {{ $title }}</h4>
                    <div class="card-header-action">
                        {{-- <a href="{{ route('admin.penyakit.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a> --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-striped" id="tabel">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pengirim</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pesans as $pesan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pesan->nama }}</td>
                                            <td>{{ $pesan->email }}</td>
                                            <td>
                                                {{-- <a class="btn btn-icon btn-primary btn-sm" href="{{route('admin.penyakit.show', $penyakit->id)}}"><i class="fas fa-bars"></i></a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
@endpush

@push('js')
    <script src="{{ asset('assets/vendor/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
@endpush

@push('script')
    <script>
        // Datatables
        $(document).ready(() => {
            $('#tabel').DataTable();
        });
    </script>
@endpush
