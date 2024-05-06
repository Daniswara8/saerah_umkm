<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $data = Admin::all();
        return view('admin.v_data', compact('data'));
    }

    // untuk menambahkan data
    public function tambahdata() {
        return view('admin.v_tambahdata');
    }

    public function insertdata(Request  $request) {
        // dd($request->all());
        Admin::create($request->all());
        return redirect()->route('admin')->with('success', 'Data Berhasil Ditambahkan ');
    }
    // end

    // untuk update data 
    public function tampilkandata($id) {
        $data = Admin::find($id);
        return view('admin.v_editdata', compact('data'));
    }

    public function updatedata(Request $request, $id) {
        $data = Admin::find($id);
        $data->update($request->all());
        return redirect()->route('admin')->with('success', 'Data Berhasil Di Update ');
    }
}
