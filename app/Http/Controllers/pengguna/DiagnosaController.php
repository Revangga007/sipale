<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\pengguna\PenggunaController;
use App\Models\BasisPengetahuan;
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
        $arbobot = [0, 1, 0.75, 0.5, 0.25];
        $argejala = [];

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
        // $dbg = [];
        foreach($penyakits as $penyakit) {
            foreach($penyakit->basis_pengetahuans as $bp) {
                $mbPenyakits[$penyakit->id][] = $bp->mb * $arbobot[$kepastian[$bp->gejala_id]];
                $mdPenyakits[$penyakit->id][] = $bp->md * $arbobot[$kepastian[$bp->gejala_id]];
            }
            // MB
            foreach($mbPenyakits as $i => $mbPenyakit){
                $mbHasil = 0;
                $mbJumlah = count($mbPenyakit);
                foreach($mbPenyakit as $key => $mb){
                    if(++$key == $mbJumlah){
                        $mbLama = $mbHasil;
                        $mbHasil = $mbLama + $mb * (1 - $mbLama);
                        $mbTotal = $mbHasil;
                    }elseif($key >= 1){
                        $mbLama = $mbHasil;
                        $mbHasil = $mbLama + $mb * (1 - $mbLama);
                    }else{
                        $mbHasil = $mb[0];
                    }
                }
                $mbTotalPerPenyakit[$i] = $mbTotal;

            }
            // MD
            foreach($mdPenyakits as $i => $mdPenyakit){
                $mdHasil = 0;
                $mdJumlah = count($mdPenyakit);
                foreach($mdPenyakit as $key => $md){
                    if(++$key == $mdJumlah){
                        $mdLama = $mdHasil;
                        $mdHasil = $mdLama + $md * (1 - $mdLama);
                        $mdTotal = $mdHasil;
                    }elseif($key >= 1){
                        $mdLama = $mdHasil;
                        $mdHasil = $mdLama + $md * (1 - $mdLama);
                    }else{
                        $mdHasil = $md[0];
                    }
                }
                $mdTotalPerPenyakit[$i] = $mdTotal;
            }
        }

        // Combine mb dan md
        $combineResult = array_merge_recursive($mbTotalPerPenyakit,$mdTotalPerPenyakit);
        // Menghitung cf
        foreach($combineResult as $index => $result){
            $cf[$index] = round(($result[0] - $result[1]) * 100); 
        }

        // Mengurutkan hasil dari presentase terbesar
        arsort($cf);
        foreach($cf as $index => $result){
            $hasilAnalisa[$index] = $result;
        }

        Diagnosa::create([
            'nik' => session('biodata')['nik'],
            'nama_pemilik' => session('biodata')['nama_pemilik'],
            'no_hp' => session('biodata')['no_hp'],
            'alamat' => session('biodata')['alamat'],
            'nama_peliharaan' => session('biodata')['nama_peliharaan'],
            'jekel' => session('biodata')['jekel'],
            'umur' => session('biodata')['umur'] > 0 ?? null,
            'berat' => session('biodata')['berat'] > 0 ?? null,
            'suhu' => session('biodata')['suhu'] > 0 ?? null,
            'penyakit_id' => array_key_first($hasilAnalisa),
            'presentase' => $hasilAnalisa[array_key_first($hasilAnalisa)]
        ]);
        $title = $this->title;
        $bcrum = $this->bcrum('Hasil', route('pengguna.diagnosa.index'), $title);
        return view('pengguna.diagnosa.show', compact('hasilAnalisa', 'penyakits', 'kepastian', 'title', 'bcrum'));
    }

    public function reset(Request $request)
    {
        $request->session('biodata')->flush();
        return redirect()->route('pengguna.biodata.index');
    }
}
