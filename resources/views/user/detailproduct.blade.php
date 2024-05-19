@extends('layout/product')
@section('content')

<div class="div">
    <br>
    <center><h1>DETAIL<span> PRODUCT</span></h1></center>
    <br>
</div>

<body>
    <img src="{{ asset('storage/images/' . $products->foto_produk) }}" class="detfoto" style="margin-bottom: 50px;">
    <h1>{{ $products->nama_produk }}</h1>
    <p>{{ $products->deskripsi_produk }}</p>

    {{-- <div class="form-group">
                    <label for="" class="font-weight-bold"><strong>Motif</strong></label>
                    <select name="ukuran_produk" id="" class="form-control @error('ukuran_produk') is-invalid @enderror" style="width: 190px;">
                      <option selected></option>
                      <option>Mega mendung</option>
                      <option>Parang</option>
                      <option>Jawa</option>
                      <option>Sunda</option>
                      <option>Minang</option>
                      <option>Betawi</option>
                    </select>
                    @error('ukuran_produk')
                    <div class="alert alert-danger mt-2">
                    {{ $message }}
                    </div>
                    @enderror
    </div> --}}

    <p><strong>Jumlah </strong></p><input type="number" min = "0" value="1"><br><br>

    <p><b>Harga:</b> Rp. {{ $products->harga_produk }}</p>

    <p><strong>Size</strong></p>
    <a href="#" class="btn btn-outline-dark btn-sm" style="width:5%;"> XS</a>
    <a href="#" class="btn btn-outline-dark btn-sm" style="width:5%;"> S</a>
    <a href="#" class="btn btn-outline-dark btn-sm" style="width:5%;"> M</a>
    <a href="#" class="btn btn-outline-dark btn-sm" style="width:5%;"> L</a>
    <a href="#" class="btn btn-outline-dark btn-sm" style="width:5%;"> XL</a><br><br>

    <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:25%;"> Keranjang</a>
</body>

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

@endsection
