<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PelangganController extends Controller
{
    use ValidatesRequests;

    // Register
    public function indexRegister(): View
    {
        return view('user.register');
    }

    public function indexLogin(): View
    {
        return view('user.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'kontak' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $slug = Str::slug($request->nama, '-');

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'konfirmasi_pass' => $request->password_confirmation,
            'nama' => $request->nama,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'slug_link' => $slug,
            'created_at' => now(),
        ]);

        return redirect('/login')->with(['success' => 'Data Berhasil Ditambah!']);
    }

    // Login
    public function proses(Request $request)
    {
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required' => "Email Wajib Diisi!",
            'email.email' => "Format Email tidak valid!",
            'password.required' => "Password Wajib Diisi!",
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('dashboard')->with('success', 'Berhasil Login');
        } else {
            return redirect('login')->withErrors('Email atau Password tidak valid!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('index')->with('success', 'Berhasil Logout');
    }

    public function editProfile()
    {
        return view('profile.edit');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'kontak' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Check if data is unchanged
        if (
            $user->nama == $request->nama &&
            $user->kontak == $request->kontak &&
            $user->alamat == $request->alamat &&
            $user->email == $request->email
        ) {
            return redirect()->back()->with('info', 'Data tidak terubah!');
        } else {

            // Update data profil
            $user->nama = $request->input('nama');
            $user->kontak = $request->input('kontak');
            $user->alamat = $request->input('alamat');
            $user->email = $request->input('email');

            $user->save();

            return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
        }
    }

    public function editPass()
    {
        return view('password.edit');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Jika ada password baru, update password
        if ($request->filled('new_password')) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = Hash::make($request->input('new_password')); // Hash kata sandi baru
                $user->konfirmasi_pass = $request->input('new_password_confirmation'); // Simpan konfirmasi kata sandi sebagai teks biasa
            } else {
                return back()->withErrors(['current_password' => 'Password saat ini tidak cocok.'])->withInput();
            }
        }

        $user->save();

        return redirect()->back()->with('success', 'Kata sandi berhasil diperbarui!');
    }

}
