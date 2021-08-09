<?php

namespace App\Http\Controllers\admin;

use App\Models\Penyakit;
use App\Http\Requests\PenyakitRequest;
use App\Http\Controllers\admin\AdminController;

class PenyakitController extends AdminController
{
    protected $title = 'Penyakit';

    public function index()
    {
        $title = $this->title;
        $penyakits = Penyakit::all();
        return view('admin.penyakit.index', compact('title', 'penyakits'));
    }

    public function create()
    {
        $title = $this->title;
        $generate = Penyakit::all()->count();
        if ($generate > 0) {
            $generateId = sprintf("P%03s", ++$generate);
        } else if ($generate == 0) {
            $generateId = "P001";
        }
        return view('admin.penyakit.create', compact('title', 'generateId'));
    }

    public function store(PenyakitRequest $request)
    {
        $data = $request->all();
        Penyakit::create($data);
        $this->notification('success', 'Berhasil', 'Data Penyakit Berhasil Ditambah');
        return redirect(route('admin.penyakit.index'));
    }


    public function show(Penyakit $penyakit)
    {
        $title = $this->title;
        return view('admin.penyakit.show', compact('title', 'penyakit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyakit $penyakit)
    {
        $title = $this->title;
        return view('admin.penyakit.edit', compact('title', 'penyakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update(PenyakitRequest $request, Penyakit $penyakit)
    {
        $data = $request->all();
        $penyakit->update($data);
        $this->notification('success', 'Berhasil', 'Data Penyakit Berhasil Diupdate');
        return redirect(route('admin.penyakit.show', $penyakit->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyakit $penyakit)
    {
        $penyakit->delete();
        $this->notification('success', 'Berhasil', 'Data Penyakit Berhasil Dihapus');
        return redirect(route('admin.penyakit.index'));
    }
}
