<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Keranjang;
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
        $cartItems = Keranjang::where('user_id', Auth::id())->get();
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->harga_produk;
        });

        $pembayaran = Pembayaran::create([
            'user_id' => Auth::id(),
            'total_harga' => $totalPrice,
            'status' => 'pending',
            'metode_pembayaran' => $request->input('metode_pembayaran'),
        ]);

        // Kosongkan keranjang
        Keranjang::where('user_id', Auth::id())->delete();

        Log::info('Pembayaran berhasil dibuat', ['pembayaran' => $pembayaran]);

        return redirect()->route('pembayaran.show', $pembayaran->id)->with('success', 'Pembayaran berhasil dibuat!');
    }

    public function show($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('pembayaran.detailPembayaran', compact('pembayaran'));
    }

    public function checkout()
{
    // Anda dapat mengirim data yang diperlukan ke view checkout di sini
    return view('pembayaran.checkout');
}
}