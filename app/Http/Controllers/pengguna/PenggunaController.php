<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    protected function bcrum($current, $urlSecond = null, $nameSecond = null)
    {
        return [
            'url-first' => route('pengguna.dashboard'),
            'name-first' => 'Sipadri',
            'url-second' => $urlSecond,
            'name-second' => $nameSecond,
            'current' => $current
        ];
    }
}
