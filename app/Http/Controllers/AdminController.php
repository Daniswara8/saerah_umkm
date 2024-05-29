<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

use Illuminate\View\View;

use Illuminate\Support\Str;

class AdminController extends Controller
{

    // tampil view
    public function tambahDataCustomer(): View
    {
        $masters = Admin::latest()->first();
        return view('admin.tambahDataUser', compact('masters'));
    }

    public function tampilDataCustomer(): View
    {
        $pelanggans = Admin::all()->where('status_aktif', '=', 'aktif');
        return view('admin.tampilDataUser', compact('pelanggans'));
    }

    public function editDataCustomer(string $slug_link): View 
    {
        $customers = Admin::where('slug_link','=', $slug_link)->firstorfail();
        return view('admin.editDataUser', compact('customers'));
    }

    public function hapusDataCustomer(string $slug_link) {
        $pelanggans = Admin::where('slug_link','=', $slug_link)->firstorfail();
        return view('admin.hapusDataUser', compact('pelanggans'));
    }
    // end





    // untuk proses
    public function store(request $request)
    {
        $this->validate($request,[
        'nama'      =>'required',
        'email'     =>'required|min:8|unique:admins',
        'password'  =>'required',
        'notelepon' =>'required',
        'alamat'    =>'required',
    ]);

    $slug = str::slug($request->nama, '-');

        Admin::create ([
        'nama'              =>$request->nama,
        'email'             =>$request->email,
        'password'          =>$request->password,
        'notelepon'         =>$request->notelepon,
        'alamat'            =>$request->alamat,
        'status_aktif'      =>$request->status_aktif,
        'slug_link'         =>$slug,
        'created_at'        =>NOW()
    ]);

    return redirect()->route('customerAdmin.index')->with(
        ['success'=> 'Data Berhasil Ditambah!'] 
    ); 
    }

    public function update(Request $request, string $slug_link)
    {
    $customers = Admin::where('slug_link', $slug_link)->firstOrFail();

    $this->validate($request, [
        'email'     => 'required|min:8|unique:admins,email,' . $customers->id,
        'password'  => 'required',
        'nama'      => 'required',
        'notelepon' => 'required',
        'alamat'    => 'required',
    ]);

    $slug = Str::slug($request->nama, '-');

    $customers->update([
        'email'         => $request->email,
        'password'      => $request->password,
        'nama'          => $request->nama,
        'notelepon'     => $request->notelepon,
        'alamat'        => $request->alamat,
        'status_aktif'  => $request->status_aktif,
        'slug_link'     => $slug,
        'updated_at'    => now()
    ]);

    return redirect()->route('customerAdmin.index')->with('success', 'Data Berhasil Diubah!');
    }

    // public function softdelete(Request $request, $Slug_link) {
    //     $pelanggans = Admin::where('Slug_link', $Slug_link)->firstOrFail();
    //     $pelanggans->delete();

    // return redirect()->route('customerAdmin.index')->with(['success' => 'Berhasil menghapus Dihapus']);
    // }


    public function softdelete(Request $request, string $slug_link)
    {
    $pelanggans = Admin::where('slug_link', $slug_link)->firstOrFail();

    $this->validate($request, [
        'email'     => 'required|min:8|unique:admins,email,' . $pelanggans->id,
        'password'  => 'required',
        'nama'      => 'required',
        'notelepon' => 'required',
        'alamat'    => 'required',
    ]);

    $slug = Str::slug($request->nama, '-');

    $pelanggans->update([
        'email'         => $request->email,
        'password'      => $request->password,
        'nama'          => $request->nama,
        'notelepon'     => $request->notelepon,
        'alamat'        => $request->alamat,
        'status_aktif'  => $request->status_aktif,
        'slug_link'     => $slug,
        'updated_at'    => now()
    ]);
    return redirect()->route('customerAdmin.index')->with('success', 'Data Berhasil Dihapus!');
    }
}