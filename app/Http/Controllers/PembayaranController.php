<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Keranjang;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PembayaranController extends Controller
{
    public function create()
    {
        $cartItems = Keranjang::where('user_id', Auth::id())->get();
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->harga_produk;
        });

        return view('pembayaran.pembayaran', compact('cartItems', 'totalPrice'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'metode_pembayaran' => 'required|string',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $cartItems = Keranjang::where('user_id', Auth::id())->get();
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->harga_produk;
        });
    
        $pembayaranData = [
            'user_id' => Auth::id(),
            'total_harga' => $totalPrice,
            'status' => 'pending',
            'metode_pembayaran' => $request->input('metode_pembayaran'),
        ];
    
        if ($request->hasFile('bukti_pembayaran')) {
            $image = $request->file('bukti_pembayaran');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $pembayaranData['bukti_pembayaran'] = $imageName;
        }
    
        $pembayaran = Pembayaran::create($pembayaranData);
    
        // Copy data keranjang ke histori pembelian
        foreach ($cartItems as $item) {
            History::create([
                'pembayaran_id' => $pembayaran->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'harga_produk' => $item->product->harga_produk,
            ]);
        }
    
        // Kosongkan keranjang
        Keranjang::where('user_id', Auth::id())->delete();
    
        Log::info('Pembayaran berhasil dibuat', ['pembayaran' => $pembayaran]);
    
        return redirect()->route('dashboard.indexdashboard')->with('success', 'Pembayaran berhasil dibuat!');
    }
    

}
