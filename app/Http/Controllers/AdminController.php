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
        $pelanggans = Admin::all();
        return view('admin.tampilDataUser', compact('pelanggans'));
    }

    public function editDataCustomer(string $slug_link): View 
    {
        $customers = Admin::where('slug_link','=', $slug_link)->firstorfail();
        return view('admin.editDataUser', compact('customers'));
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
        'slug_link'     => $slug,
        'updated_at'    => now()
    ]);

    return redirect()->route('customerAdmin.index')->with('success', 'Data Berhasil Diubah!');
    }

    
}