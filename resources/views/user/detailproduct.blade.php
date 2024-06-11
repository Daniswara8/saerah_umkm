@extends('layout/product')
@section('content')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const plus = document.querySelector(".plus");
            const minus = document.querySelector(".minus");
            const num = document.querySelector(".num");
            const maxLimit = {{ $products->jumlah_produk }}; // Jumlah maksimum produk

            let a = 1;

            plus.addEventListener("click", () => {
                if (a < maxLimit) {
                    a++;
                    num.innerText = (a < maxLimit) ? "" + a : a;
                    console.log(a);
                }
            });

            minus.addEventListener("click", () => {
                if (a > 1) {
                    a--;
                    num.innerText = (a < 10) ? "" + a : a;
                    console.log(a);
                }
            });
        });
    </script>

    <div class="div">
        <center>
            <h1>DETAIL<span> PRODUCT</span></h1>
        </center>
        <br>
    </div>

    <body>

        <a href="/user" class="btn btn-outline-secondary btn-md bi bi-arrow-90deg-left"
            style="margin-bottom: 10px; margin-left:12px;"></a>

        <div class="container">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="images col-md-6">
                                    <img src="{{ asset('assets/' . $products->foto_produk) }}" class="detfoto"
                                        style=" margin-top:8px; margin-bottom:8px; width:100%; border-radius:8px; object-fit:cover;">
                                </div>

                                <div class="teks col-md-6" style="text-transform: capitalize;">
                                    <h2>{{ $products->nama_produk }}</h2><br>

                                    <h5><strong>Harga:</strong> Rp. {{ $products->harga_produk }}</h5>

                                    {{-- <div class="form-ukuran">
                                        <label for="" class="font-weight-bold"><strong>Ukuran</strong></label>
                                        <select name="ukuran_produk" id="" class="form-control @error('ukuran_produk') is-invalid @enderror">
                                            <option selected></option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                        </select>
                                        @error('ukuran_produk')
                                        <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                        </div>
                                        @enderror
                                    </div><br>

                                    <h5>Jumlah</h5>
                                    <div class="wrapper">
                                        <span class="minus">-</span>
                                        <span class="num">1</span>
                                        <span class="plus">+</span>
                                    </div><br> --}}

                                    {{-- <div class="quantity-container">
                                        <button class="minus">-</button>
                                        <input type="text" class="num" disabled value="1" style="width: 7%;"></input>
                                        <button class="plus">+</button>
                                    </div><br> --}}

                                    {{-- <p><strong>Jumlah</strong></p>
                                    <input type="number" min = "0" value="0"><br><br> --}}
                                    {{-- <p><strong>Size</strong></p> --}}

                                    {{-- <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> XS</a>
                                    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> S</a>
                                    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> M</a>
                                    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> L</a>
                                    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> XL</a><br><br> --}}



                                    <h5><strong>Deskripsi</strong></h5>
                                    <p>{{ $products->deskripsi_produk }}</p><br>


                                    <form action="{{ route('keranjang.add', $products->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-secondary btn-sm"
                                            style="border-radius: 25px; width:100%;">Tambah ke Keranjang</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>



        {{-- <img src="{{ asset('storage/images/' . $products->foto_produk) }}" class="detfoto" style="margin-bottom: 50px;"> --}}

        {{-- <h1>{{ $products->nama_produk }}</h1>
    <p>{{ $products->deskripsi_produk }}</p>

    <p><strong>Jumlah </strong></p><input type="number" min = "0" value="1"><br><br>

    <p><b>Harga:</b> Rp. {{ $products->harga_produk }}</p>

    <p><strong>Size</strong></p>
    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> XS</a>
    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> S</a>
    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> M</a>
    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> L</a>
    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> XL</a><br><br>

    <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:25%;"> Keranjang</a>
</body> --}}

        {{-- <div class="container flex"> --}}
        {{-- @foreach ($products as $pro)
        <div class="left">
            <img src="{{ asset('storage/images/' . $pro->foto_produk) }}" class="p-2 img-fluid gambar" style="margin-top: 10px; border-radius:100px 0px;">
                <div class="card-body">
                    <p class="card-text" style="margin-bottom: 0;"><b>{{ $pro->nama_produk }}</b></p>
                    <p style="margin-bottom: 0;">{{ $pro->deskripsi_produk }}</p>
                    <p class="text-right"><b>{{ $pro->harga_produk }}</b></p>

                    {{-- <a href="#"><i class="bi bi-cart3"></i></a> rgb(255, 141, 179) --}}
        {{-- <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a> --}}
        {{-- </div> --}}
        {{-- </div> --}}
        {{-- @endforeach
</div> --}}

    </body>
@endsection
