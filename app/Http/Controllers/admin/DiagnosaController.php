<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
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
