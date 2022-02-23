<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\pengguna\PenggunaController;
use App\Models\Diagnosa;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;

class DiagnosaController extends PenggunaController
{
    public $title = "Diagnosa";

    public function index()
    {
        $title = $this->title;
        $bcrum = $this->bcrum('Diagnosa');
        $gejalas = Gejala::all();
        return view('pengguna.diagnosa.index', compact('title', 'bcrum', 'gejalas'));
    }

    public function analisa(Request $request)
    {
        if(empty($request->kondisi) || count($request->kondisi) < 2){
            $this->notification('success', 'Sehat', 'Kucing sehat tanpa gejala');
            return redirect(route('pengguna.diagnosa.index'));
        }
        $arbobot = [0, 1, 0.75, 0.5, 0.25];
        $argejala = [];
        $arrCfKombine = [];
        for ($i = 0; $i < count($request->kondisi); $i++) {
            $arkondisi = explode("_", $request->kondisi[$i]);
            $kondisi[] = ['gejala_id' => $arkondisi[0]];
            $kepastian[$arkondisi[0]] = $arkondisi[1];
            if (strlen($request->kondisi[$i]) > 1) {
                $argejala += [$arkondisi[0] => $arkondisi[1]];
                $penyakits = Penyakit::with(['basis_pengetahuans' => function ($result) use ($kepastian) {
                    $result->with('gejala')->whereIn('gejala_id', array_keys($kepastian));
                }])->groupBy('id')->orderBy('id')->get();
            }
        }
        // dd(array_keys($kepastian));
        foreach($penyakits as $penyakit) {
            foreach($penyakit->basis_pengetahuans as $bp) {
                $arrCfKombine[$penyakit->id][] = $bp->cf * $arbobot[$kepastian[$bp->gejala_id]];
            }
            foreach($arrCfKombine as $key => $cfKombine){
                $cfBaru = 0;
                $jumlahCf = count($cfKombine);
                foreach($cfKombine as $key2 => $cf){
                    if(++$key2 == $jumlahCf){
                        $cfLama = $cfBaru;
                        $cfBaru = $cfLama + $cf * (1 - $cfLama);
                        $cfTotal = $cfBaru;
                    }elseif($key2 >= 1){
                        $cfLama = $cfBaru;
                        $cfBaru = $cfLama + $cf * (1 - $cfLama);
                    }else{
                        $cfBaru = $cf[0];
                    }
                }
                $cfHasil[$key] = $cfTotal;
            }
        }
        arsort(($cfHasil));
        Diagnosa::create([
            'nik' => session('biodata')['nik'],
            'nama_pemilik' => session('biodata')['nama_pemilik'],
            'no_hp' => session('biodata')['no_hp'],
            'alamat' => session('biodata')['alamat'],
            'nama_peliharaan' => session('biodata')['nama_peliharaan'],
            'jekel' => session('biodata')['jekel'],
            'umur' => (session('biodata')['umur']) > 0 ? (session('biodata')['umur']) : null,
            'berat' => (session('biodata')['berat']) > 0 ? (session('biodata')['berat']) : null,
            'suhu' => (session('biodata')['suhu']) > 0 ? (session('biodata')['suhu']) : null,
            'penyakit_id' => array_key_first($cfHasil),
            'presentase' => $cfHasil[array_key_first($cfHasil)]
        ]);
        $title = $this->title;
        $bcrum = $this->bcrum('Hasil', route('pengguna.diagnosa.index'), $title);
        $gejalas = Gejala::all();
        return view('pengguna.diagnosa.analisa', compact('cfHasil', 'penyakits', 'kepastian', 'gejalas', 'title', 'bcrum'));
    }

    public function reset(Request $request)
    {
        $request->session('biodata')->flush();
        return redirect()->route('pengguna.biodata.index');
    }
}
