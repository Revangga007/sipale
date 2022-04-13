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
                        <a href="{{ route('admin.gejala.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                            Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="tabel">
                                <thead>
                                    <tr>
                                        <th width='10%'>No</th>
                                        <th width='10%'>Id Gejala</th>
                                        <th>Nama Gejala</th>
                                        <th width='17%'>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gejalas as $gejala)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $gejala->id }}</td>
                                            <td>{{ Str::title($gejala->nama) }}</td>
                                            <td>
                                                <a class="btn btn-icon btn-warning btn-sm"
                                                    href="{{ route('admin.gejala.edit', $gejala->id) }}"><i
                                                        class="fa fa-edit"></i> Ubah</a>
                                                <form action="{{ route('admin.gejala.destroy', $gejala->id) }}"
                                                    id="delete_{{ $gejala->id }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{ $gejala->id }}">
                                                    <button type="button" class="btn btn-icon btn-danger btn-sm btn-hapus"
                                                        value="{{ $gejala->id }}"><i class="fa fa-trash"></i>
                                                        Hapus</button>
                                                </form>
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

        $('.btn-hapus').click(function() {
            let id = $(this).val();
            console.log(id);
            Swal.fire({
                title: 'Perhatian!',
                text: "Apakah Anda Yakin Untuk Menghapus Data?",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: 'grey',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    hapusData(id);
                }
            })
        })

        function hapusData(id) {
            let url = $(`#delete_${id}`).attr('action');
            let data = $(`#delete_${id}`).serialize();
            let method = 'POST';
            console.log(url, data, method);
            $.ajax({
                url: url,
                type: method,
                data: data,
                success: function(response) {
                    console.log(response);
                    Swal.fire(
                        'Berhasil!',
                        'Data Gejala Berhasil Dihapus',
                        'success'
                    )
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                }
            })

        }
    </script>

@endpush
