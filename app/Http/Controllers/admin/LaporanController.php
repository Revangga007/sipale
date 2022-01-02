<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\AdminController;
use App\Http\Requests\LaporanRequest;
use App\Models\Diagnosa;

class LaporanController extends AdminController
{
    public function index(){

    }

    public function create(LaporanRequest $request){
        $awal = $request->periode_awal;
        $akhir = $request->periode_akhir;
        $diagnosas = Diagnosa::whereBetween('created_at', [$awal, $akhir]);
    }
}
