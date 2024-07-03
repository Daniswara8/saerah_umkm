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
                                    <img src="{{ asset('assets/cache/' . $products->foto_produk) }}" class="detfoto"
                                        style=" margin-top:8px; margin-bottom:8px; width:100%; border-radius:8px; object-fit:cover;">
                                </div>

                                <div class="teks col-md-6" style="text-transform: capitalize;">
                                    <h2>{{ $products->nama_produk }}</h2><br>

                                    <h5><strong>Harga:</strong> Rp. {{ $products->harga_produk }}</h5>
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
    </body>
@endsection
