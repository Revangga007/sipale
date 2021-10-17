@extends('layouts.pengguna.main')

@section('content')
    <section class="inn">
        <div class="container">
            <form action="{{ route('pengguna.biodata.store') }}" method="post">
                <div class="row">
                    <div class="col-6">
                        <h3>Data Pemilik</h3>
                        <hr>
                        @csrf
                        <div class="form-group">
                            <label for="nik">No. KTP</label>
                            <input type="text" class="form-control" id="nik" name="nik"
                                placeholder="Masukkan No.KTP / NIK Lengkap">
                            <div id="hasil"></div>
                        </div>
                        <div class="form-group">
                            <label for="nama_pemilik">Nama Pemilik</label>
                            <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik"
                                placeholder="Masukkan Nama Pemilik">
                        </div>
                        {{-- <div class="row">
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
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        value="{{ \Carbon\Carbon::now()->isoFormat('DD/MM/YYYY') }}">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="no_hp">no hp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                placeholder="Masukkan Nomor Handphone Pemilik">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" cols="15" rows="5"
                                placeholder="Masukkan Alamat Pemilik"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <h3>Data Peliharaan</h3>
                        <hr>
                        <div class="form-group">
                            <label for="nama_peliharaan">Nama Peliharaan</label>
                            <input type="text" class="form-control" id="nama" name="nama_peliharaan"
                                placeholder="Masukkan Nama Peliharaan">
                        </div>
                        <div class="form-group">
                            <label class="pb-2">Jenis kelamin</label>
                            <br>
                            <div class="row pb-1">
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jekel" id="jantan"
                                            value="jantan">
                                        <label class="form-check-label" for="jantan">Jantan</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jekel" id="betina"
                                            value="betina">
                                        <label class="form-check-label" for="betina">Betina</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat Badan</label>
                            <input type="number" class="form-control" id="berat" name="berat"
                                placeholder="Masukkan Berat Badan Peliharaan">
                        </div>
                        <div class="form-group">
                            <label for="suhu">Suhu Badan</label>
                            <input type="number" class="form-control" id="suhu" name="suhu"
                                placeholder="Masukkan Suhu Badan Peliharaan">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('pengguna.dashboard') }}" class="btn btn-danger btn-md">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-md" id="kirim" disabled>Kirim</button>
                </div>
            </form>
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
    {{-- <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js') }}"></script> --}}
@endpush

@push('script')
    <script>
        // $(function() {
        //     $("#tanggal_lahir").datepicker({
        //         autoclose: true,
        //         todayHighlight: true,
        //         format: 'dd/mm/yyyy',
        //         language: 'id'
        //     });
        // });

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
                            enBtn();
                            // $('#tempat_lahir').val(hasil.data.kotakab);
                            // $('#tanggal_lahir').val(hasil.data.lahir);
                        } else {
                            $('#nik').addClass('is-invalid');
                            $('#hasil').addClass('invalid-feedback');
                            $('#hasil').text("Maaf, sistem hanya berlaku untuk masyarakat Batang");
                            disBtn();
                        }
                    } else {
                        $('#nik').addClass('is-invalid');
                        $('#hasil').addClass('invalid-feedback');
                        $('#hasil').text(hasil.pesan);
                        disBtn();
                    }
                });
            });
        });

        function enBtn() {
            document.getElementById('kirim').disabled = false;
        }

        function disBtn() {
            document.getElementById('kirim').disabled = true;
        }
    </script>
@endpush
