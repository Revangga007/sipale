<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use App\Models\Penyakit;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $gejalas = Gejala::all()->count();
        $penyakits = Penyakit::all()->count();
        $title = 'Dashboard';
        return view('admin.dashboard', compact('title', 'gejalas', 'penyakits'));
    }
}
