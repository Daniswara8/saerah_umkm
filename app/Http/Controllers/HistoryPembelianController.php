<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\History;
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
        $histories = History::where('pembayaran_id', $id)->with('product')->get();
        return view('historyPembelian.detailHistoryPembelian', compact('pembayaran', 'histories'));
    }

    public function PesananBaru()
    {
        // Mengambil semua data pembayaran dengan status selain 'dikemas'
        $pembayarans = Pembayaran::with('user', 'histories.product')
            ->where('status_pengiriman', '!=', 'dikemas')
            ->orderByDesc('created_at')
            ->get();

        return view('admin.dataOrder.pesananBaru', compact('pembayarans'));
    }   

    public function PesananDikemas()
    {
        $pembayarans = Pembayaran::with('user', 'histories.product')
            ->where('status_pengiriman', 'dikemas')
            ->orderByDesc('created_at')
            ->get();
        return view('admin.dataOrder.pesananDikemas', compact('pembayarans'));
    }

    public function updateStatusPembelian(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->status_pengiriman = $request->status;
        $pembayaran->save();

        return redirect()->route('adminOrder.dikemas')->with('status', 'Status pengiriman diperbarui!');
    }
    
}
