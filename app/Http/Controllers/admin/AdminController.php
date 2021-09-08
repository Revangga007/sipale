<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    // protected $limit = 10;

    protected function notification($icon, $title, $text)
    {

        return  Session::flash('flash_notification', [
            'icon'   => $icon,
            'title'   => $title,
            'text' => $text
        ]);
    }
}
