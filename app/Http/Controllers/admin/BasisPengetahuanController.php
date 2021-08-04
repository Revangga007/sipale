<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\BasisPengetahuan;
use App\Http\Controllers\admin\AdminController;

class BasisPengetahuanController extends AdminController
{
    protected $title = 'Basis Pengetahuan';

    public function index()
    {
        $title = $this->title;
        $bps = BasisPengetahuan::all();
        return view('admin.bp.index', compact('title', 'bps'));
    }

    public function create()
    {
        $title = $this->title;
        $gejalas = Gejala::select('id', 'nama')->get();
        $penyakits = Penyakit::select('id', 'nama')->get();
        return view('admin.bp.create', compact('title', 'gejalas', 'penyakits'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        BasisPengetahuan::create($data);
        $this->notification('success', 'Berhasil', 'Data Basis Pengetahuan Berhasil Ditambah');
        return redirect(route('admin.bp.index'));
    }

    public function show(BasisPengetahuan $bp)
    {
        $title = $this->title;
        return view('admin.bp.show', compact('title', 'bp'));
    }

    public function edit($id)
    {
        $title = $this->title;
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
