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
        $data = $request->all();
    }
}
