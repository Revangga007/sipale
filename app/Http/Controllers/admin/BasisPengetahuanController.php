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
        $bps = BasisPengetahuan::all()->sortDesc();
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

    public function show($id)
    {
        $title = $this->title;
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

    public function lg(Request $request)
    {
        if ($request->has('q')) {
            $search = $request->q;
            $data = Gejala::select("id", "nama")->where('nama', 'LIKE', "%$search%")->get();
            return response()->json($data);
        }
    }
    public function lp(Request $request)
    {
        if ($request->has('q')) {
            $search = $request->q;
            $data = Penyakit::select("id", "nama")->where('nama', 'LIKE', "%$search%")->get();
            return response()->json($data);
        }
    }
}
