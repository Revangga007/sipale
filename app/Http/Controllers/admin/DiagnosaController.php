<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\admin\AdminController;
use App\Models\Diagnosa;

class DiagnosaController extends AdminController
{
    public $title = 'Diagnosa';

    public function index()
    {
        $title = $this->title;
        $diagnosas = Diagnosa::latest()->get();
        return view('admin.diagnosa.index', compact('diagnosas', 'title'));
    }

    public function show(Diagnosa $diagnosa)
    {
        $title = $this->title;
        return view('admin.diagnosa.show', compact('diagnosa', 'title'));
    }
}
