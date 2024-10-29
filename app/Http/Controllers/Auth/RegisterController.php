<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\tbl_user;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|integer|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'fakultas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'jumlah_tes' => 'required|string|max:255',
            'nama_lembaga' => 'required|string|max:255',
            'jenjang_pendidikan' => 'required|string|max:255',
            
            
        ]);

        tbl_user::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fakultas' => $request->fakultas,
            'jurusan' => $request->jurusan,
            'prodi' => $request->prodi,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_hp' => $request->no_hp,
            'jumlah_tes' => $request->jumlah_tes,
            'nama_lembaga' => $request->nama_lembaga,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
        ]);

        return redirect()->route('login')->with('success', 'Pendaftaran berhasil!');
    }
}
