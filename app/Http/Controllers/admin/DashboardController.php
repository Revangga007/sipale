<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Pesan;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $gejalas = Gejala::all()->count();
        $penyakits = Penyakit::all()->count();
        $diagnosas = Diagnosa::all()->count();
        $pesans = Pesan::all()->count();
        $title = 'Dashboard';
        return view('admin.dashboard', compact('title', 'gejalas', 'penyakits', 'diagnosas', 'pesans'));
    }
}
