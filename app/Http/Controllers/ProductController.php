<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\View\View;
    use Carbon\Carbon;
    use Illuminate\Support\Str;
    use App\Models\product;
    use Illuminate\Http\RedirectResponse;



    class ProductController extends Controller
    {
        public function index() {
            $products = product::all();
            return view('user/product', compact('products'));
        }


        public function admin() {
            $products = product::all();
            return view('admin/product', compact('products'));
        }

        public function create() {
            return view('admin/plusproduk');
        }

        public function store(Request $request) {
            // validate form
            $request->validate([
                'foto_produk' => 'image|mimes:jpeg,png,jpg',
                'harga_produk' => 'numeric',
                'Slug_link' => 'unique:products,Slug_link',
            ]);

            if ($request->hasFile('foto_produk')) {
                $imageName = time() . '.' . $request->foto_produk->extension();
                $request->foto_produk->move(public_path('assets/'), $imageName);

                $slug = Str::slug($request->nama_produk, '_');

                product::create([
                    'foto_produk' => $imageName,
                    'nama_produk' => $request->nama_produk,
                    'deskripsi_produk' => $request->deskripsi_produk,
                    'harga_produk' => $request->harga_produk,
                    // 'ukuran_produk' => $request->ukuran_produk,
                    // 'motif_produk' => $request->motif_produk,
                    'jumlah_produk' => $request->jumlah_produk,
                    'Slug_link' => $slug
                ]);

                // redirect to index
                return redirect()->route('product.admin')->with(['success' => 'Berhasil menambahkan produk !'])->with('image', $imageName);
            } else {

                // Handle case when no file uploaded
                return redirect()->back()->with('error', 'Tidak ada file yang diunggah.');
            }
        }

            public function edit(string $Slug_link) {
                $products = product::where('Slug_link', '=', $Slug_link)->firstOrFail();
                return view('admin/editprd', compact('products'));
            }

            public function update(Request $request, string $Slug_link) {
                $request->validate([
                    'foto_produk' => 'image|mimes:jpeg,png,jpg',
                    'harga_produk' => 'numeric',
                    'jumlah_produk' => 'integer',
                    'Slug_link' => 'unique:products,Slug_link,' . $Slug_link,
                ]);

                $products = product::where('Slug_link', $Slug_link)->firstOrFail();

                $data = [
                    'nama_produk' => $request->nama_produk,
                    'deskripsi_produk' => $request->deskripsi_produk,
                    'harga_produk' => $request->harga_produk,
                    'jumlah_produk' => $request->jumlah_produk,
                    'Slug_link' => Str::slug($request->nama_produk, '_'),
                ];

                if ($request->hasFile('foto_produk')) {
                    $imageName = time() . '.' . $request->foto_produk->extension();
                    $request->foto_produk->move(public_path('assets/'), $imageName);
                    $data['foto_produk'] = $imageName;
                }

                $products->update($data);

                return redirect()->route('product.admin')->with(['success' => 'Berhasil memperbarui produk !']);
            }

                // SOFT DELETE
                public function hapus(string $Slug_link) {
                    $products = product::where('Slug_link', '=', $Slug_link)->withTrashed()->firstOrFail();
                    return view('admin.hapusprd', compact('products'));
                }

                public function softdelete(Request $request, $Slug_link) {
                    $products = product::where('Slug_link', $Slug_link)->withTrashed()->firstOrFail();
                    $products->delete();

                return redirect()->route('product.admin')->with(['success' => 'Berhasil menghapus produk !']);
                }

                public function restore(Request $request, $Slug_link) {
                    // Temukan produk yang telah dihapus
                    $products = product::onlyTrashed()->where('Slug_link', $Slug_link)->firstOrFail();

                    // Memulihkan produk
                    $products->restore();

                    // Redirect ke halaman history dengan pesan sukses
                    return redirect()->route('product.admin')->with(['success' => 'Berhasil memulihkan produk !']);
                }

                public function history() {
                    $products = product::onlyTrashed()->get();
                    return view('admin.history', compact('products'));
                }

                public function deletePermanent($id) : RedirectResponse {
                    $products = product::withTrashed()->findOrFail($id);
                    $products->forceDelete();

                    return redirect()->route('product.history')->with(['success' => 'Berhasil menghapus produk secara permanen!']);
                }

                // public function detail(product $products)
                // {
                //     $products = product::findOrFail($id);
                //     return view('user.detailproduct', compact('products'));
                // }

                public function detail($id)
                {
                    // Mengambil produk berdasarkan ID
                    $products = product::findOrFail($id);

                    // Mengirimkan data produk ke view
                    return view('user.detailproduct', compact('products'));
                }

                public function search(Request $request) {
                    $query = $request->input('query');
                    $products = product::where('nama_produk', 'LIKE', "%{$query}%")
                                ->orWhere('deskripsi_produk', 'LIKE', "%{$query}%")
                                ->get();

                    return view('user/product', compact('products'));
                }

                // Metode untuk mengembalikan stok terbaru
                // public function stock(product $products)
                // {
                //     return response()->json(['stock' => $products->jumlah_produk]);
                // }
    }
