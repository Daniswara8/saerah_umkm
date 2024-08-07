<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function tambahKeranjang(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);

        $cart = Keranjang::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $productId],
            ['quantity' => DB::raw('quantity + 1')]
        );

        return redirect()->route('keranjang.index')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function index()
    {
        $cartItems = Keranjang::where('user_id', Auth::id())->get();
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->harga_produk;
        });
        return view('keranjang.keranjang', compact('cartItems', 'totalPrice'));
    }

    public function hapusKeranjang($cartId)
    {
        $cart = Keranjang::findOrFail($cartId);
        $cart->delete();

        return redirect()->route('keranjang.index')->with('success', 'Produk berhasil dihapus dari keranjang!');
    }

    public function updateQuantity(Request $request, $cartId)
    {
        $cart = Keranjang::findOrFail($cartId);
        $newQuantity = $cart->quantity + $request->input('change');
        if ($newQuantity > 0) {
            $cart->quantity = $newQuantity;
            $cart->save();
        }
        return response()->json(['success' => true]);
    }
}
