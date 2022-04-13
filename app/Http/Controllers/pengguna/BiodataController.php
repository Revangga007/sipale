<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\pengguna\PenggunaController;
use Illuminate\Http\Request;


class BiodataController extends PenggunaController
{
    protected $title = "Biodata";

    public function index()
    {
        $title = $this->title;
        $bcrum = $this->bcrum('Biodata');
        return view('pengguna.biodata.index', compact('title', 'bcrum'));
    }

    public function store(Request $request)
    {
        Session([
            'biodata' => [
                'nik' => $request->nik,
                'nama_pemilik' => $request->nama_pemilik,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'nama_peliharaan' => $request->nama_peliharaan,
                'jekel' => $request->jekel,
                'umur' => $request->umur,
                'berat' => $request->berat,
                'suhu' => $request->suhu
            ]
        ]);
        return redirect()->route('pengguna.diagnosa.index');
    }
}
