<?php

namespace App\Http\Controllers\admin;

use App\Models\Gejala;
use App\Http\Requests\admin\GejalaRequest;
use App\Http\Controllers\admin\AdminController;


class GejalaController extends AdminController
{
    public $title = 'Gejala';

    public function index()
    {
        $title = $this->title;
        $gejalas = Gejala::orderByDesc('id')->get();
        return view('admin.gejala.index', compact('title', 'gejalas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        $generate = Gejala::all()->count();
        if ($generate > 0) {
            $generateId = sprintf("G%03s", ++$generate);
        } else if ($generate == 0) {
            $generateId = "G001";
        }
        return view('admin.gejala.create', compact('title', 'generateId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GejalaRequest $request)
    {
        $data = $request->all();
        Gejala::create($data);
        $this->notification('success', 'Berhasil', 'Data Gejala Berhasil Ditambah');
        return redirect(route('admin.gejala.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $gejala)
    {
        $title = $this->title;
        return view('admin.gejala.edit', compact('gejala', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(GejalaRequest $request, Gejala $gejala)
    {
        // dd($gejala);
        $data = $request->all();
        $gejala->update($data);
        $this->notification('success', 'Berhasil', 'Data Gejala Berhasil Diupdate');
        return redirect(route('admin.gejala.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)
    {
        // try {
        $hapus = $gejala->delete();
        $this->notification('success', 'Berhasil', 'Data Gejala Berhasil Dihapus');
        return redirect(route('admin.gejala.index'));
    }
}
