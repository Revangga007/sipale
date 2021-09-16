<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\pengguna\DashboardController;
use App\Models\Pesan;
use App\Http\Requests\pengguna\PesanRequest;

class PesanController extends PenggunaController
{
    public $title = 'Kontak';
    public function index()
    {
        $title = $this->title;
        $bcrum = $this->bcrum('Kontak');
        return view('pengguna.pesan.create', compact('title', 'bcrum'));
    }

    public function store(PesanRequest $request)
    {
        $data = $request->all();
        Pesan::create($data);
        $this->notification('success', 'Berhasil', 'Pesan Berhasil Terkirim');
        return redirect(route('pengguna.pesan.index'));
    }
}
