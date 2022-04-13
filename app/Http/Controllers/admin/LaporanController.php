<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\AdminController;
use App\Http\Requests\admin\LaporanRequest;
use App\Models\Diagnosa;
use PDF;

class LaporanController extends AdminController
{
    public function index(LaporanRequest $request){
        $awal = $request->periode_awal;
        $akhir = $request->periode_akhir;
        $diagnosas = Diagnosa::whereBetween('created_at', [$awal.' 00:00:00', $akhir.' 23:59:59'])->get();
        $judul = "Laporan Diagnosa Penyakit Kucing";
        $awalPeriode = date('d-m-Y',strtotime($awal));
        $akhirPeriode = date('d-m-Y',strtotime($akhir));
        $pdf = PDF::loadView('admin.diagnosa.laporan', compact('diagnosas', 'judul', 'awalPeriode', 'akhirPeriode'))->setPaper('a4', 'landscape');
        return $pdf->stream();
        
    }
}
