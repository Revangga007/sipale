<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\UbahPasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UbahPasswordController extends AdminController
{
    protected $title = 'Password';
    public function edit(User $user)
    {
        $title = $this->title;
        return view('admin.akun.change', compact('title', 'user'));
    }

    public function update(UbahPasswordRequest $request, User $user)
    {
        if (Hash::check($request->password_lama, $user->password)) {
            if ($request->password_baru == $request->konfirmasi_password) {
                $user->update([
                    'password' => $request->password_baru
                ]);
                $this->notification('success', 'Berhasil', 'Password berhasil diubah');
                return redirect()->route('admin.dashboard');
            }
        }
    }
}
