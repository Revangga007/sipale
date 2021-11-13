<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\pengguna\PenggunaController;
use App\Models\BasisPengetahuan;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;

use function PHPSTORM_META\map;

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
        // DB::table('basis_pengetahuan')->select('penyakit.nama')
        // ->join('gejala', 'basis_pengetahuan.gejala_id', '=', 'gejala.id')
        // ->join('penyakit', 'basis_pengetahuan.penyakit_id', '=', 'penyakit.id')
        // ->whereIn('basis_pengetahuan.gejala_id', )
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
        // dd(count($kepastian));
        $dbg = [];
        foreach ($penyakits as $penyakit) {
            foreach ($penyakit->basis_pengetahuans as $bp) {
                for ($i = 1; $i <= count($kepastian); $i++) {
                    if ($bp->gejala_id == array_keys($kepastian)) {
                        $cfkombine[$i] = $bp->cf;
                    }
                }

                // $cfCombine = $bp->cf * $kepastian
            }
        }
        dd($cfkombine);
        // $penyakits->map(function ($item, $key) use ($arbobot, $kepastian) {

        // });

        // return $penyakits;
        // dd($penyakits);

        // return $penyakits;
        // return $penyakits;
        // dd($argejala);

        //Perhitungan CF

        // $penyakits = Penyakit::get();
        // $arpenyakit = [];
        // foreach ($penyakits as $penyakit) {
        //     $cftotal_temp = 0;
        //     $cf = 0;
        //     $cflama = 0;
        //     $bps = BasisPengetahuan::where('id_penyakit', '=', $penyakit->id);
        //     foreach ($bps as $bp) {
        //         $arkondisi = explode("_", $request->kondisi[0]);
        //         $gejala = $arkondisi[0];
        //         for ($i = 0; $i < count($request->kondisi); $i++) {
        //             $arkondisi = explode("_", $request->kondisi[$i]);
        //             $gejala = $arkondisi[0];
        //             if ($bp->gejala_id == $gejala) {
        //                 $cf = $bp->cf * $arbobot[$arkondisi[1]];
        //                 if (($cf >= 0) && ($cf * $cflama >= 0)) {
        //                     $cflama = $cflama + ($cf * (1 - $cflama));
        //                 }
        //                 if ($cf * $cflama < 0) {
        //                     $cflama = ($cflama + $cf) / (1 - Math . Min(Math . abs($cflama), Math . abs($cf)));
        //                 }
        //                 if (($cf < 0) && ($cf * $cflama >= 0)) {
        //                     $cflama = $cflama + ($cf * (1 + $cflama));
        //                 }
        //             }
        //         }
        //     }
        //     if ($cflama > 0) {
        //         $arpenyakit += array($penyakit->id => number_format($cflama, 4));
        //     }
        // }
        // arsort($arpenyakit);

        // $inpgejala = serialize($argejala);
        // $inppenyakit = serialize($arpenyakit);

        // $np1 = 0;
        // foreach ($arpenyakit as $key1 => $value1) {
        //     $np1++;
        //     $idpkt1[$np1] = $key1;
        //     $vlpkt1[$np1] = $value1;
        // }

        // echo "$inptanggal".'$inpgejala',
        //         '$inppenyakit',
        //         '$idpkt1[1]',
        //         '$vlpkt1[1]'"
        // // return $argejala;
    }

    public function reset(Request $request)
    {
        $request->session('biodata')->flush();
        return redirect()->route('pengguna.biodata.index');
    }
}
