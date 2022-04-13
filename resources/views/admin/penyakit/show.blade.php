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
                    <h4>Detail {{ $title }} {{ $penyakit->nama }}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col text-center mb-4">
                            <img src="{{ asset('assets/gambar/' . $penyakit->gambar) }}" alt="{{ $penyakit->nama }}"
                                width="300px">
                        </div>
                        <div class="col-9">
                            <p><strong>Nama Penyakit :</strong></p>
                            <p>{{ $penyakit->nama }}</p>
                        </div>
                        <div class="col-3">
                            <p><strong>Id Penyakit :</strong></p>
                            <p>{{ $penyakit->id }}</p>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Deskripsi Penyakit :</strong></p>
                            <p>{!! $penyakit->deskripsi !!}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Solusi Penyakit :</strong></p>
                            <p>{!! $penyakit->solusi !!}</p>
                        </div>
                    </div>


                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('admin.penyakit.index') }}" class="btn btn-secondary"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('admin.penyakit.edit', $penyakit->id) }}" class="btn btn-warning"><i
                                    class="fa fa-edit"></i> Edit</a>
                            <form action="{{ route('admin.penyakit.destroy', $penyakit->id) }}"
                                id="delete_{{ $penyakit->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $penyakit->id }}">
                                <button type="button" class="btn btn-danger btn-hapus" value="{{ $penyakit->id }}"><i
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
