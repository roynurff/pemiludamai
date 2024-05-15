<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemilih;
use Illuminate\Support\Facades\Auth;

class PemilihController extends Controller
{
    public function register(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nik' => 'required|unique:pemilih',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'password' => 'required|min:6',
        ]);

        // Simpan data pemilih ke database
        $pemilih = new Pemilih();
        $pemilih->nik = $request->nik;
        $pemilih->nama = $request->nama;
        $pemilih->tempat_lahir = $request->tempat_lahir;
        $pemilih->tanggal_lahir = $request->tanggal_lahir;
        $pemilih->alamat = $request->alamat;
        $pemilih->jenis_kelamin = $request->jenis_kelamin;
        $pemilih->agama = $request->agama;
        $pemilih->password = bcrypt($request->password);
        $pemilih->save();

        return redirect('/login')->with('success', 'Pendaftaran Akun Berhasil');
    }

    public function login(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ]);

        // Coba autentikasi user
        if (Auth::guard('pemilih')->attempt(['nik' => $request->nik, 'password' => $request->password])) {
            // Jika autentikasi berhasil, redirect ke halaman yang sesuai
            return redirect('/pemilihan/home');
        } else {
            // Jika autentikasi gagal, kembalikan dengan pesan error
            return back()->with('error', 'NIK atau password salah');
        }
    }

    public function logout()
    {
        Auth::guard('pemilih')::logout();

        return redirect()->route('/pemilihan/login');
    }
}
