<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\pengguna\PenggunaController;
use Illuminate\Http\Request;

class DiagnosaController extends PenggunaController
{
    public $title = "Diagnosa";

    public function create()
    {
        $title = $this->title;
        $bcrum = $this->bcrum('Diagnosa');
        return view('pengguna.diagnosa.index', compact('title', 'bcrum'));
    }
}
