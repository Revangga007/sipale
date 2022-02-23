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
                <div class="card-header d-flex justify-content-between">
                    <h4>Daftar {{ $title }}</h4>
                    <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#cetakFilter">Cetak</button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="tabel">
                                <thead>
                                    <tr>
                                        <th width='7%'>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Pemilik</th>
                                        <th>Nama Peliharaan</th>
                                        <th>Nama Penyakit</th>
                                        <th>Presentase</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diagnosas as $diagnosa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ date_format($diagnosa->created_at,'d-m-Y') }}</td>
                                            <td>{{ Str::title($diagnosa->nama_pemilik) }}</td>
                                            <td>{{ Str::title($diagnosa->nama_peliharaan) }}</td>
                                            <td>{{ Str::title($diagnosa->penyakit->nama) }}</td>
                                            <td>{{ $diagnosa->presentase * 100 }}%</td>
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

<div class="modal fade" id="cetakFilter" tabindex="-1" aria-labelledby="cetakModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <form action="{{route('admin.laporan.create')}}" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="cetakModalLabel">Filter Tanggal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="periode_awal">Periode Awal</label>
                            <input type="date" class="form-control" name="periode_awal" id="periode_awal"><li class="fas fa-calender"></li>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="periode_akhir">Periode Akhir</label>
                            <input type="date" class="form-control" name="periode_akhir" id="periode_akhir">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Korfirmasi</button>
            </div>
        </form>
    </div>
</div>
</div>
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

        // function hapusData(id) {
        //     let url = $(`#delete_${id}`).attr('action');
        //     let data = $(`#delete_${id}`).serialize();
        //     let method = 'POST';
        //     console.log(url, data, method);
        //     $.ajax({
        //         url: url,
        //         type: method,
        //         data: data,
        //         success: function(response) {
        //             console.log(response);
        //             Swal.fire(
        //                 'Berhasil!',
        //                 'Data Gejala Berhasil Dihapus',
        //                 'success'
        //             )
        //             setTimeout(() => {
        //                 location.reload();
        //             }, 1000);
        //         }
        //     })

        // }
    </script>

@endpush
