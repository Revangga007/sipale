<?php

namespace App\Http\Controllers\pengguna;

use Illuminate\Http\Request;

class DashboardController extends PenggunaController
{
    public $title = 'Dashboard';
    public function __invoke(Request $request)
    {
        $title = $this->title;
        // $bcrum = $this->bcrum('Dashboard');
        return view('pengguna.dashboard', compact('title'));
    }
}
