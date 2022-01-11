<?php

namespace App\Http\Controllers\admin;

use App\Models\Penyakit;
use App\Http\Requests\admin\PenyakitRequest;
use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PenyakitController extends AdminController
{
    protected $title = 'Penyakit';

    public function index()
    {
        $title = $this->title;
        $penyakits = Penyakit::latest()->get();
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
        $file = $request->file('gambar');
        $nama_gambar = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'assets/gambar';
        $file->move($tujuan_upload, $nama_gambar);
        Penyakit::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'deskripsi' => $request->deskripsi,
            'solusi' => $request->solusi,
            'gambar' => $nama_gambar
        ]);
        $this->notification('success', 'Berhasil', 'Data Penyakit Berhasil Ditambah');
        return redirect(route('admin.penyakit.index'));
    }

    public function show(Penyakit $penyakit)
    {
        $title = $this->title;
        return view('admin.penyakit.show', compact('title', 'penyakit'));
    }

    public function edit(Penyakit $penyakit)
    {
        $title = $this->title;
        return view('admin.penyakit.edit', compact('title', 'penyakit'));
    }

    public function update(PenyakitRequest $request, Penyakit $penyakit)
    {
        $penyakit->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'deskripsi' => $request->deskripsi,
            'solusi' => $request->solusi
        ]);
        if ($request->file('gambar')) {
            File::delete('assets/gambar/' . $penyakit->gambar);
            $gambar = time() . "_" . $request->file('gambar')->getClientOriginalName();
            $directory = 'assets/gambar';
            $request->file('gambar')->move($directory, $gambar);
            $penyakit->update([
                'gambar' => $gambar
            ]);
        }
        $this->notification('success', 'Berhasil', 'Data Penyakit Berhasil Diupdate');
        return redirect(route('admin.penyakit.show', $penyakit->id));
    }

    public function destroy(Penyakit $penyakit)
    {
        File::delete('assets/gambar/' . $penyakit->gambar);
        $penyakit->delete();
        $this->notification('success', 'Berhasil', 'Data Penyakit Berhasil Dihapus');
        return redirect(route('admin.penyakit.index'));
    }
}
