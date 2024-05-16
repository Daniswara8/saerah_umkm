<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests; // Tambahkan baris ini

class PelangganController extends Controller
{
    use ValidatesRequests; // Tambahkan baris ini

    public function indexRegister(): View
    {
        $pelanggans = Pelanggan::latest()->first();
        return view('user.register', compact('pelanggans'));
    }

    public function indexLogin(): View
    {
        $pelanggans = Pelanggan::latest()->first();
        return view('user.login', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'kontak' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:pelanggans,email', // Perbaiki aturan validasi
            'password' => 'required|min:8', // Tambahkan panjang minimal untuk password
        ]);

        $slug = Str::slug($request->nama, '-');

        Pelanggan::create([
            'email' => $request->email,
            'password' => bcrypt($request->password), // Praktik yang baik untuk mengenkripsi password
            'nama' => $request->nama,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'slug_link' => $slug,
            'created_at' => now(),
        ]);

        return redirect('/login')->with(['success' => 'Data Berhasil Ditambah!']);
    }
}
