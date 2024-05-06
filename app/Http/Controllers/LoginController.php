<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
        $admins = Admin::where('status_aktif','=','aktif')->get();
        return view('admin/content',compact('admins'));
    }

    public function histori():View{
        $admins = Admin::where('status_aktif','=','hapus')->get();
        return view('admin/admin/histori_data',compact('admins'));
    }

    // akun
    public function createakun():View{
        return view('admin/admin/tambah_data_akun');
    }

    public function save(Request $request){
        $request->validate([
            'email' => 'required|unique:data',
            'nama_user' => 'required',
            'password' => 'required|unique:data',
            'status_publish' => 'required',

        ]);

        $eml = Str::of($request->email)
            ->rtrim() //buang spasi berlebih
            ->stripTags() //menghilangkan kode html
            ->title(); //semua awalan huruf jadi kapital

            Admin::create([
            'email' => $eml,
            'nama_user' => $request->nama_pemesan,
            'password' => $request->password,
            'status_aktif' => $request->status_aktif,
            'status_publish' => $request->status_publish,
            'created_by' => $request->created_by,
            'created_at' => NOW()
        ]);

        return redirect()->route('admin.index')->with(
            ['success'=>'Data Berhasil Ditambah!']
        );
    }
    // end akun


    // pemesanan
    public function pemesanan(){
        $admins = Admin::get();
        return view('admin/admin/pemesanan_data',compact('admins'));
    }
}
