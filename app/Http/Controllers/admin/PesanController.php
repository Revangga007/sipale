<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\AdminController;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends AdminController
{
    protected $title = 'Pesan';

    public function index()
    {
        $title = $this->title;
        $pesans = Pesan::latest()->get();
        return view('admin.pesan.index', compact('title', 'pesans'));
    }

    public function show(Pesan $pesan)
    {
        $title = $this->title;
        return view('admin.pesan.show', compact('title', 'pesan'));
    }

    public function destroy(Pesan $pesan)
    {
        // try {
        $hapus = $pesan->delete();
        $this->notification('success', 'Berhasil', 'Data Pesan Berhasil Dihapus');
        return redirect(route('admin.pesan.index'));
    }
}
