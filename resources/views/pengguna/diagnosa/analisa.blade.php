@extends('layouts.pengguna.main')

@section('content')
    <section class="inn">
        <div class="container">
            @foreach ($penyakits as $penyakit)
                @if ($penyakit->id == array_key_first($cfHasil))
                    <div class="row bg-light rounded-sm">
                        <div class="col-md-6 p-3">
                            <h3 style="font-size: 25px" class="mb-4">Hasil Diagnosa</h3>
                            <p>Penyakit yang diderita kucing peliharaan anda :</p>
                                <h4 style="font-size: 22px" class="mb-3 text-success">{{ $penyakit->nama }}</h4>
                                <p style="font-size: 20px" class="text-success">Presentase : {{$cfHasil[array_key_first($cfHasil)] * 100}}%</p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center p-3">
                            <img src="{{asset('assets/gambar/' . $penyakit->gambar)}}" alt="{{$penyakit->nama}}" width="400px" class="rounded-lg">
                        </div>
                    </div>
                    <div class="my-4"></div>
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            Deskripsi penyakit
                        </div>
                        <div class="card-body">
                            {!!$penyakit->deskripsi!!}
                        </div>
                    </div>
                    <div class="my-4"></div>
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            Solusi penyakit
                        </div>
                        <div class="card-body">
                            {!!$penyakit->solusi!!}
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="my-4"></div>
            <div class="pilihan" class="mt-4">
                <h3 style="font-size: 25px" class="mb-4">Pilihan Pengguna</h3>
                <table class="table table-boredered">
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
                                        @elseif($kp == 0.75)
                                        Hampir pasti
                                        @elseif($kp == 0.5)
                                        Mungkin
                                        @elseif($kp == 0.25)
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
            <div id="kemungkinan" class="mt-4">
                <div class="card">
                    <div class="card-header bg-warning">
                        Kemungkinan penyakit lain
                    </div>
                    <div class="card-body">
                        <ul id="penyakitLain">
                            @foreach ($penyakits as $penyakit)
                                @foreach ($cfHasil as $key => $cf)
                                    @if($penyakit->id == $key)
                                        <li>{{$penyakit->nama}}</li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
