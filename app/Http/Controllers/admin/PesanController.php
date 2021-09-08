<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    protected $title = 'Pesan';

    public function index()
    {
        $title = $this->title;
        $pesans = Pesan::latest()->get();
        return view('admin.pesan.index', compact('title', 'pesans'));
    }

    public function show(Pesan $pesan)
    {
        $title = $this->title;
    }
}
