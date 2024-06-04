<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\View\View;

use Illuminate\Support\Str;

class AdminController extends Controller
{

    // tampil view
    public function tambahDataCustomer(): View
    {
        $masters = User::latest()->first();
        return view('admin.dataUser.tambahDataUser', compact('masters'));
    }

    public function tampilDataCustomer(): View
    {
        $pelanggans = User::all()->where('status_aktif', '=', 'aktif');
        return view('admin.dataUser.tampilDataUser', compact('pelanggans'));
    }

    public function editDataCustomer(string $slug_link): View 
    {
        $pelanggans = User::where('slug_link','=', $slug_link)->firstorfail();
        return view('admin.dataUser.editDataUser', compact('pelanggans'));
    }

    public function softDeleteDataCustomer(string $slug_link) {
        $pelanggans = User::where('slug_link','=', $slug_link)->firstorfail();
        return view('admin.dataUser.softDeleteDataUser', compact('pelanggans'));
    }

    public function restoreDataCustomer(string $slug_link) {
        $pelanggans = User::where('slug_link','=', $slug_link)->firstorfail();
        return view('admin.dataUser.restoreDataUser', compact('pelanggans'));
    }

    public function forceDeleteDataCustomer(string $slug_link) {
        $pelanggans = User::where('slug_link','=', $slug_link)->firstorfail();
        return view('admin.dataUser.forceDeleteDataUser', compact('pelanggans'));
    }

    public function historiDataCustomer() {
        $pelanggans = User::where('status_aktif', '=', 'hapus')->get();
        return view('admin.dataUser.historiDataUser', compact('pelanggans'));
    }
    // end





    // untuk proses
    public function store(request $request)
    {
        $this->validate($request,[
        'nama'              =>'required',
        'email'             =>'required|min:8|unique:admins',
        'password'          =>'required',
        'kontak'            =>'required',
        'alamat'            =>'required',
        'konfirmasi_pass'   =>'required',
    ]);

    $slug = str::slug($request->nama, '-');

        User::create ([
        'nama'              =>$request->nama,
        'email'             =>$request->email,
        'password'          =>$request->password,
        'kontak'            =>$request->kontak,
        'alamat'            =>$request->alamat,
        'status_aktif'      =>$request->status_aktif,
        'slug_link'         =>$slug,
        'konfirmasi_pass'   =>$request->konfirmasi_pass, 
        'created_at'        =>NOW()
    ]);
    return redirect()->route('customerAdmin.index')->with(
        ['success'=> 'Data Berhasil Ditambah!'] 
    ); 
    }

    public function update(Request $request, string $slug_link)
    {
    $pelanggans = User::where('slug_link', $slug_link)->firstOrFail();

    $this->validate($request, [
        'email'             => 'required|min:8|unique:admins,email,' . $pelanggans->id,
        'password'          => 'required',
        'nama'              => 'required',
        'kontak'            => 'required',
        'alamat'            => 'required',
        'konfirmasi_pass'   => 'required',
    ]);

    $slug = Str::slug($request->nama, '-');

    $pelanggans->update([
        'email'             => $request->email,
        'password'          => $request->password,
        'nama'              => $request->nama,
        'kontak'            => $request->kontak,
        'alamat'            => $request->alamat,
        'status_aktif'      => $request->status_aktif,
        'slug_link'         => $slug,
        'konfirmasi_pass'   => $request->konfirmasi_pass, 
        'updated_at'    => now()
    ]);
    return redirect()->route('customerAdmin.index')->with('success', 'Data Berhasil Diubah!');
    }



    // public function softdelete(Request $request, $Slug_link) {
    //     $pelanggans = Admin::where('Slug_link', $Slug_link)->firstOrFail();
    //     $pelanggans->delete();

    // return redirect()->route('customerAdmin.index')->with(['success' => 'Data Berhasil Dihapus']);
    // }



    public function softdelete(Request $request, string $slug_link)
    {
    $pelanggans = User::where('slug_link', $slug_link)->firstOrFail();

    $this->validate($request, [
        'email'             => 'required|min:8|unique:admins,email,' . $pelanggans->id,
        'password'          => 'required',
        'nama'              => 'required',
        'kontak'            => 'required',
        'alamat'            => 'required',
        'konfirmasi_pass'   => 'required',
    ]);

    $slug = Str::slug($request->nama, '-');

    $pelanggans->update([
        'email'             => $request->email,
        'password'          => $request->password,
        'nama'              => $request->nama,
        'kontak'            => $request->kontak,
        'alamat'            => $request->alamat,
        'status_aktif'      => $request->status_aktif,
        'slug_link'         => $slug,
        'konfirmasi_pass'   => $request->konfirmasi_pass, 
        'updated_at'    => now()
    ]);
    return redirect()->route('customerAdmin.index')->with('success', 'Data Berhasil Dihapus!');
    }


    public function destroy($slug)
    {
        $pelanggans = User::where('slug_link', $slug)->first();

        if (!$pelanggans) {
            return redirect()->route('customerAdmin.index')->with(['error' => 'Data tidak ditemukan!']);
        }

        $pelanggans->delete();

        return redirect()->route('customerAdmin.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}