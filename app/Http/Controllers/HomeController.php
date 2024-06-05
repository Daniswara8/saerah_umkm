<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Support\Str;

class HomeController extends Controller
{

        public function index(): View {
            $products = Product::all(); // Mengambil semua produk
            return view('user.home', compact('products')); // Mengirimkan data products ke view
        }

        public function show($id): View {
            $products = Product::find($id); // Ambil produk berdasarkan ID
            return view('user.product', compact('products')); // Mengirimkan data pro ke view
        }

}
