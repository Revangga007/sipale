<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan - Sistem pakar diagnosa kucing</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        table, td, th {  
        border: 1px solid #333;
        text-align: left;
        }

        table {
        border-collapse: collapse;
        width: 100%;
        }

        th, td {
        padding: 15px;
        }
        .text-center {
            text-align: center;
        }

        .mt-n-2 {
            margin-top: -20px;
        }

        .mt-n-3 {
            margin-top: -30px;
        }

        .mb-n-1 {
            margin-bottom: -10px;
        }

        .mb-n-2 {
            margin-bottom: -20px;
        }

    </style>
</head>
<body>
    <div class="container" id="laporan">
        <h1 class="text-center mb-n-2 mt-n-3">{{ $judul }}</h1>
        <h2 class="text-center mb-n-1">Dinas Kelautan Perikanan dan Peternakan</h2>
        <p class="text-center">Jl. R.A Kartini Nomor 12 Kabupaten Batang</p>
        <hr>
        <h3 class="text-center">Periode :
            {{$awalPeriode}} s/d 
            {{$akhirPeriode}}
        </h3>
        <table class="table table-bordered">
            <tr style="font-weight: bold" class="text-center">
                <td>No</td>
                <td>Tanggal</td>
                <td>Nama Pemilik</td>
                <td>Nama Peliharaan</td>
                <td>Nama Penyakit</td>
                <td>Presentase</td>
            </tr>
            @foreach($diagnosas as $diagnosa)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ date_format($diagnosa->created_at,'d-m-Y') }}</td>
                <td>{{ Str::title($diagnosa->nama_pemilik) }}</td>
                <td>{{ Str::title($diagnosa->nama_peliharaan) }}</td>
                <td>{{ Str::title($diagnosa->penyakit->nama) }}</td>
                <td>{{ $diagnosa->presentase * 100 }}%</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>