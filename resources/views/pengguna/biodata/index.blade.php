@extends('layouts.pengguna.main')

@section('content')
    <section class="inn">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <form action="{{ route('pengguna.pesan.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nik">No. KTP</label>
                            <input type="text" class="form-control" id="nik" name="nik"
                                placeholder="Masukkan No.KTP / NIK Lengkap">
                            <div id="hasil"></div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                        placeholder="Masukkan Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    {{-- <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"> --}}
                                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        value="{{ \Carbon\Carbon::now()->isoFormat('DD/MM/YYYY') }}">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}
                        <div class="form-group">
                            <label for="subjek">Subjek</label>
                            <input type="text" class="form-control" id="subjek" name="subjek"
                                placeholder="Masukkan Subjek">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" cols="15" rows="5"
                                placeholder="Masukkan Pesan"></textarea>
                        </div>
                        <div>
                            <a href="{{ route('pengguna.dashboard') }}" class="btn btn-danger btn-md">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-md">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="col-2">
                </div>
            </div>
        </div>
    </section>

@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endpush

@push('js')
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/pengguna/js/nik_parse.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js') }}"></script>
@endpush

@push('script')
    <script>
        $(function() {
            $("#tanggal_lahir").datepicker({
                autoclose: true,
                todayHighlight: true,
                format: 'dd/mm/yyyy',
                language: 'id'
            });
        });

        $(document).ready(() => {
            $('#nik').change(() => {
                let nik = $('#nik').val();
                console.log(nik);
                nikParse(nik, function(hasil) {
                    console.log(hasil); // object
                    // console.log(hasil.data.kotakab); // object
                    if (hasil.status == 'success') {
                        if (hasil.data.kotakab == "KAB. BATANG") {
                            $('#nik').addClass('is-valid');
                            $('#hasil').addClass('valid-feedback');
                            $('#hasil').text(hasil.pesan);
                            $('#tempat_lahir').val(hasil.data.kotakab);
                            $('#tanggal_lahir').val(hasil.data.lahir);
                        } else {
                            $('#nik').addClass('is-invalid');
                            $('#hasil').addClass('invalid-feedback');
                            $('#hasil').text("Maaf, sistem hanya berlaku untuk masyarakat Batang");
                        }
                    } else {
                        $('#nik').addClass('is-invalid');
                        $('#hasil').addClass('invalid-feedback');
                        $('#hasil').text(hasil.pesan);
                    }
                });
            });
        });
    </script>
@endpush
