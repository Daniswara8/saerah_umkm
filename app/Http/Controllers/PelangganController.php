<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Validation\ValidatesRequests; 

class PelangganController extends Controller
{
    use ValidatesRequests; 

    // Register
    public function indexRegister(): View
    {
        $pelanggans = User::latest()->first();
        return view('user.register', compact('pelanggans'));
    }

    public function indexLogin(): View
    {
        return view('user.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'kontak' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|min:8', 
        ]);

        $slug = Str::slug($request->nama, '-');

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'nama' => $request->nama,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'slug_link' => $slug,
            'created_at' => now(),
        ]);

        return redirect('/login')->with(['success' => 'Data Berhasil Ditambah!']);
    }


    // Login
    public function proses (Request $request)
    {
        Session::flash('email', $request->email);
    
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ],[
            'email.required'    => "Email Wajib Diisi!",
            'email.email'       => "Format Email tidak valid!",
            'password.required' => "Password Wajib Diisi!",
        ]);
    
        $infologin = [
            'email'    => $request->email,
            'password' => $request->password,
        ];
    
        if (Auth::attempt($infologin)) {
            return redirect('product')->with('success', 'Berhasil Login');
        } else {
            return redirect('login')->withErrors('Email atau Password tidak valid!');
        }
    
    }
}
