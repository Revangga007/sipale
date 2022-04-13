@extends('layouts.pengguna.main')

@section('content')
    <section class="inn">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-4 mb-4">Identitas Pemilik:</h3>
                    <table border="0" class="table">
                        <tr>
                            <td>NIK Pemilik</td>
                            <td>:</td>
                            <td>{{ Str::title(Session('biodata')['nik']) }}</td>
                        </tr>
                        <tr>
                            <td>Nama Pemilik</td>
                            <td>:</td>
                            <td>{{ Str::title(Session('biodata')['nama_pemilik']) }}</td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td>:</td>
                            <td>{{ Session('biodata')['no_hp'] }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ Str::title(Session('biodata')['alamat']) }}</td>
                        </tr>
                    </table>


                </div>
                <div class="col-md-6">
                    <h3 class="mb-4">Identitas Peliharaan:</h3>
                    <table border="0" class="table">
                        <tr>
                            <td>Nama Peliharaan</td>
                            <td>:</td>
                            <td>{{ Str::title(Session('biodata')['nama_peliharaan']) }} -
                                {{ Str::title(Session('biodata')['jekel']) }}
                            </td>
                        </tr>
                        <tr>
                            <td>Berat</td>
                            <td>:</td>
                            <td>{{ Session('biodata')['umur'] != 0 ? Session('biodata')['umur'] . ' Bulan' : 'Tidak diketahui' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Berat</td>
                            <td>:</td>
                            <td>{{ Session('biodata')['berat'] != 0 ? Session('biodata')['berat'] . ' Kg' : 'Tidak diketahui' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Suhu</td>
                            <td>:</td>
                            <td>{!! Session('biodata')['suhu'] != 0 ? Session('biodata')['suhu'] . '<sup>o</sup>C' : 'Tidak diketahui' !!}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class='alert alert-primary alert-dismissible'>
                        <h4><i class="bi bi-exclamation-triangle"></i>&nbsp;Perhatian !</h4>
                        <p>Silahkan pilih gejala sesuai dengan kondisi kucing peliharaan anda</p>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                    </div>
                    <form action="{{ route('pengguna.diagnosa.analisa') }}" method="post">
                        @csrf
                        <table class="table tabled-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gejala yang dialami</th>
                                    <th scope="col">Kondisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gejalas as $gejala)

                                    <tr>
                                        <th scope="row" width="10%">{{ $loop->iteration }}</th>
                                        <td>{{ Str::title($gejala->nama) }}</td>
                                        <td width="25%">
                                            <div class="form-group">
                                                <select name="kondisi[]" id="kondisi" class="form-control">
                                                    <option disabled selected>Pilih</option>
                                                    <option value="{{ $gejala->id }}_1">Pasti</option>
                                                    <option value="{{ $gejala->id }}_2">Hampir pasti</option>
                                                    <option value="{{ $gejala->id }}_3">Mungkin</option>
                                                    <option value="{{ $gejala->id }}_4">Ragu-ragu</option>
                                                    <option value="{{ $gejala->id }}_0">Tidak</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('pengguna.diagnosa.reset') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Analisa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
@endpush

@push('js')
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
@endpush
