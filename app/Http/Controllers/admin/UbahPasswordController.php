<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\UbahPasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UbahPasswordController extends AdminController
{
    protected $title = 'Password';
    public function edit()
    {
        $title = $this->title;
        return view('admin.akun.change', compact('title'));
    }

    public function update(UbahPasswordRequest $request)
    {
        $user = Auth::user();
        if (Hash::check($request->password_lama, $user->password)) {
            if ($request->password_baru == $request->konfirmasi_password) {
                $user->password = bcrypt($request->password_baru);
                $user->save();
                $this->notification('success', 'Berhasil', 'Password berhasil diubah');
                return redirect()->route('admin.dashboard');
            } else {
                $this->notification('error', 'Gagal', 'Konfirmasi password tidak sesuai');
                return redirect(route('admin.pw.edit'));
            }
        } else {
            $this->notification('error', 'Gagal', 'Password lama tidak sesuai');
            return redirect(route('admin.pw.edit'));
        }
    }
}
