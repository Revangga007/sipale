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
                    <h4>Detail Pesan</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <p><strong>Nama Pengirim :</strong></p>
                            <p>{{ $pesan->nama }}</p>
                        </div>
                        <div class="col-3">
                            <p><strong>Email Pengirim :</strong></p>
                            <p>{{ $pesan->email }}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-9">
                            <p><strong>Subjek Pesan :</strong></p>
                            <p>{{ $pesan->subjek }}</p>
                        </div>
                        <div class="col-3">
                            <p><strong>Tanggal Kirim :</strong></p>
                            <p>{{ Carbon\carbon::parse($pesan->created_at)->isoFormat('D MMMM Y') }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p><strong>Isi Pesan :</strong></p>
                            <p>{{ $pesan->pesan }}</p>
                        </div>
                    </div>


                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('admin.pesan.index') }}" class="btn btn-secondary"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="mailto:{{$pesan->email}}?subject={{$pesan->subjek}}" class="btn btn-primary"><i class="fas fa-reply"></i>&nbsp;Balas</a>
                            <form action="{{ route('admin.pesan.destroy', $pesan->id) }}" id="delete_{{ $pesan->id }}"
                                method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $pesan->id }}">
                                <button type="button" class="btn btn-danger btn-hapus" value="{{ $pesan->id }}"><i
                                        class="fa fa-trash"></i> Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
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

@push('script')
    <script>
        $('.btn-hapus').click(function() {
            let id = $(this).val();
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
                    $(`#delete_${id}`).submit();
                }
            })
        })
    </script>
@endpush
