<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenggunaController extends Controller
{
    protected function notification($icon, $title, $text)
    {

        return  Session::flash('flash_notification', [
            'icon'   => $icon,
            'title'   => $title,
            'text' => $text
        ]);
    }

    protected function bcrum($current, $urlSecond = null, $nameSecond = null)
    {
        return [
            'url-first' => route('pengguna.dashboard'),
            'name-first' => config('app.name'),
            'url-second' => $urlSecond,
            'name-second' => $nameSecond,
            'current' => $current
        ];
    }
}
