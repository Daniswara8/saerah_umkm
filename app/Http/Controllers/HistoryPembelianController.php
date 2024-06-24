<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;

class HistoryPembelianController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::where('user_id', Auth::id())->orderByDesc('created_at')->get();
        return view('historyPembelian.historyPembelian', compact('pembayarans'));
    }

    public function show($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('historyPembelian.detailHistoryPembelian', compact('pembayaran'));
    }
}
