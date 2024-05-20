@extends('layout/product')
@section('content')

<div class="div">
    <center><h1>DETAIL<span> PRODUCT</span></h1></center>
    <br>
</div>

<body>

    <div class="container">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="images col-md-6">
                                <img src="{{ asset('storage/images/' . $products->foto_produk) }}" class="detfoto" style=" margin-top:8px; width:100%;">
                            </div>

                                <div class="teks col-md-6">
                                    <h1>{{ $products->nama_produk }}</h1>
                                    <h5><strong>Harga:</strong> Rp. {{ $products->harga_produk }}</h5>
                                    <p><strong>Jumlah </strong></p><input type="number" min = "0" value="0"><br><br>
                                    <p><strong>Size</strong></p>
                                    
                                    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> XS</a>
                                    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> S</a>
                                    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> M</a>
                                    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> L</a>
                                    <input type="checkbox" class="btn btn-outline-dark btn-sm" style="width:5%;"> XL</a><br><br>

                                    <p>{{ $products->deskripsi_produk }}</p>

                                    <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Keranjang</a>
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
