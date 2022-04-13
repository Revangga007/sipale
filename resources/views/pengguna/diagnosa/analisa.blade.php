@extends('layouts.pengguna.main')

@section('content')
    <section class="inn">
        <div class="container">
            <div class="no-print">
                <button type="button" class="btn btn-primary" style="float: right" onclick="window.print()">Cetak Hasil Diagnosa</button>
            </div>
            <h2 class="text-center mb-2 fw-bold">Hasil Diagnosa</h2>
            <hr class="mb-4">
            <div class="pilihan" class="mt-4">
                <h3 style="font-size: 25px" class="mb-2">Pilihan Pengguna</h3>
                <table class="table table-bordered table-hovered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gejala</th>
                            <th>Kondisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gejalas as $gejala)
                            @foreach ($kepastian as $key => $kp)
                                @if ($gejala->id == $key)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{$gejala->nama}}</td>
                                    <td>
                                        @if($kp == 1)
                                        Pasti
                                        @elseif($kp == 2)
                                        Hampir pasti
                                        @elseif($kp == 3)
                                        Mungkin
                                        @elseif($kp == 4)
                                        Ragu-ragu
                                        @else
                                        Tidak
                                        @endif
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="my-4"></div>
            @foreach ($penyakits as $penyakit)
                @if ($penyakit->id == array_key_first($cfHasil))
                    <div class="row bg-light rounded-sm mt-4">
                        <div class="col-md-6 p-3">
                            <h3 style="font-size: 25px" class="mb-4">Hasil Diagnosa</h3>
                            <p>Berdasarkan daftar gejala yang dipilih, Penyakit yang diderita kucing peliharaan anda :</p>
                                <h4 style="font-size: 22px" class="mb-3 text-success">{{ $penyakit->nama }}</h4>
                                <p style="font-size: 20px" class="text-success">Presentase : {{$cfHasil[array_key_first($cfHasil)] * 100}}%</p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center p-3">
                            <img src="{{asset('assets/gambar/' . $penyakit->gambar)}}" alt="{{$penyakit->nama}}" width="400px" class="rounded-lg">
                        </div>
                    </div>
                    <div class="my-4"></div>
                    <div class="card">
                        <div class="card-body">
                            <h3 style="font-size: 25px" class="mb-2">Deskripsi penyakit</h3>
                            <br>
                            {!!$penyakit->deskripsi!!}
                        </div>
                    </div>
                    <div class="my-4"></div>
                    <div class="card">
                        <div class="card-body">
                            <h3 style="font-size: 25px" class="mb-2">Solusi penyakit</h3>
                            <br>
                            {!!$penyakit->solusi!!}
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="my-4"></div>
            <div id="kemungkinan" class="mt-4 no-print">
                <div class="card">
                    <div class="card-body">
                        <h3 style="font-size: 25px" class="mb-2">Kemungkinan penyakit lain</h3>
                        <br>
                        <table class="table table-bordered table-hovered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kemungkinan Penyakit Lain</th>
                                    <th>Presentase</th>
                                </tr>
                            </thead>
                            <tbody id="plain">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($cfHasil as $key => $cf)
                                    @foreach ($penyakits as $penyakit)
                                        @if ($key == $penyakit->id)
                                        @if($i <= 3)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$penyakit->nama}}</td>
                                            <td>{{$cf * 100}}%</td>
                                        </tr>
                                        @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="just-print">
                <p>*) Hasil diagnosa dapat ditunjukan ke Puskeswan Batang</p></p>
            </div>
        </div>
    </section>
@endSection

@push('script')
    <script>
        $('#plain tr:first').hide();
    </script>
@endpush
