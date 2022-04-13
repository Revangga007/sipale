<?php

namespace App\Http\Controllers\admin;

use App\Models\Akun;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Hash;

class AkunController extends AdminController
{
    public $title = 'Akun';

    public function index()
    {
        $title = $this->title;
        $akuns = User::latest()->get();
        return view('admin.akun.index', compact('title', 'akuns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title;
        return view('admin.akun.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->password == $request->password1) {
            Akun::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' =>  Hash::make($request->password),
            ]);
            $this->notification('success', 'Berhasil', 'Data Akun Berhasil Ditambah');
            return redirect(route('admin.akun.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit(User $akun)
    {
        $title = $this->title;
        return view('admin.akun.edit', compact('akun', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email
        ]);
        $this->notification('success', 'Berhasil', 'Data Akun Berhasil Diubah');
        return redirect(route('admin.akun.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        $this->notification('success', 'Berhasil', 'Data Akun Berhasil Dihapus');
        return redirect(route('admin.akun.index'));
    }
}
