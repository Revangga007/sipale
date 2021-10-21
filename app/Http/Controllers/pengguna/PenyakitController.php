<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\pengguna\PenggunaController;
use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends PenggunaController
{
    public $title = 'Info Penyakit';
    public function index()
    {
        $title = $this->title;
        $bcrum = $this->bcrum($title);
        $penyakits = Penyakit::latest()->get();
        return view('pengguna.penyakit.index', compact('penyakits', 'title', 'bcrum'));
    }

    public function show(Penyakit $penyakit)
    {
        $title = $this->title;
        $bcrum = $this->bcrum($penyakit->nama, route('pengguna.penyakit.index'), $title);
        return view('pengguna.penyakit.show', compact('penyakit', 'title', 'bcrum'));
    }
}
