@extends('layout/product')
@section('content')

<div class="div">
    <br>
    <center><h1>KATALOG<span> SAERAH</span></h1></center>
    <br>
</div>

<body>
    <div class="row rror">
        @foreach ($products as $pro)
        {{-- <a href="{{ route('produk.detail', $pro->id) }}"> --}}
            <div class="col col-3 card me-4">
                <img src="{{ asset('assets/' . $pro->foto_produk) }}" class="p-2 img-fluid gambar" style="margin-top: 10px; border-radius:10px;">
                    <div class="card-body">
                        <p class="card-text" style="margin-bottom: 0; font-size:20px; text-transform: capitalize; "><b>{{ $pro->nama_produk }}</b></p>
                        {{-- <p style="margin-bottom: 0;">{{ $pro->deskripsi_produk }}</p> --}}
                        <span><p class="text-right"><b>{{ $pro->harga_produk }}</b></p></span>
                        {{-- <a href="#"><i class="bi bi-cart3"></i></a> rgb(255, 141, 179) --}}
                        <a href="{{ route('produk.detail', $pro->id) }}" class="btn btn-outline-secondary btn-sm bi bi-arrows-angle-expand" style="border-radius: 25px; width:100%;"> Detail</a>
                        {{-- <a href="{{ route('produk.detail', $pro ->id) }}" class="btn btn-outline-secondary btn-sm"> --}}

                    </div>
            </div>
        @endforeach
    </div>
</body>


{{-- @foreach ($products as $pro)
    <div class="col card me-4">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>{{ $pro->nama_produk }}</b></p>
                <p style="margin-bottom: 0;">{{ $pro->deskripsi_produk }}</p>
                <p class="text-right"><b>{{ $pro->harga_produk }}</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>
@endforeach

@foreach ($products as $pro)
    <div class="col card me-4">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>{{ $pro->nama_produk }}</b></p>
                <p style="margin-bottom: 0;">{{ $pro->deskripsi_produk }}</p>
                <p class="text-right"><b>{{ $pro->harga_produk }}</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>
@endforeach

@foreach ($products as $pro)
    <div class="col card me-4">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px; border-radius:0 100px;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>{{ $pro->nama_produk }}</b></p>
                <p style="margin-bottom: 0;">{{ $pro->deskripsi_produk }}</p>
                <p class="text-right"><b>{{ $pro->harga_produk }}</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>
@endforeach
</div>


<div class="row rror">
    <div class="col card me-4" style="margin-top:20px;">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px; border-radius:100px 0;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>KEBAYA KUTU BARU</b></p>
                <p style="margin-bottom: 0;">Kebaya kombinasi batik terbaru</p>
                <p class="text-right"><b>Rp. 200.000</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>

    <div class="col card me-4" style="margin-top:20px;">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px; border-radius:50px;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>KEBAYA KUTU BARU</b></p>
                <p style="margin-bottom: 0;">Kebaya kombinasi batik terbaru</p>
                <p class="text-right"><b>Rp. 200.000</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>

    <div class="col card me-4" style="margin-top:20px;">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px; border-radius:50px;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>KEBAYA KUTU BARU</b></p>
                <p style="margin-bottom: 0;">Kebaya kombinasi batik terbaru</p>
                <p class="text-right"><b>Rp. 200.000</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>

    <div class="col card me-4" style="margin-top:20px;">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px; border-radius:0 100px;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>KEBAYA KUTU BARU</b></p>
                <p style="margin-bottom: 0;">Kebaya kombinasi batik terbaru</p>
                <p class="text-right"><b>Rp. 200.000</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>
</div>

<div class="row rror">
    <div class="col card me-4" style="margin-top:20px;">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px; border-radius:100px 0;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>KEBAYA KUTU BARU</b></p>
                <p style="margin-bottom: 0;">Kebaya kombinasi batik terbaru</p>
                <p class="text-right"><b>Rp. 200.000</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>

    <div class="col card me-4" style="margin-top:20px;">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>KEBAYA KUTU BARU</b></p>
                <p style="margin-bottom: 0;">Kebaya kombinasi batik terbaru</p>
                <p class="text-right"><b>Rp. 200.000</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>

    <div class="col card me-4" style="margin-top:20px;">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>KEBAYA KUTU BARU</b></p>
                <p style="margin-bottom: 0;">Kebaya kombinasi batik terbaru</p>
                <p class="text-right"><b>Rp. 200.000</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>

    <div class="col card me-4" style="margin-top:20px;">
        <img src="assets/ktgkebaya.jpeg" class="p-2 img-fluid gambar" style="margin-top: 10px; border-radius:0 100px;">
            <div class="card-body">
                <p class="card-text" style="margin-bottom: 0;"><b>KEBAYA KUTU BARU</b></p>
                <p style="margin-bottom: 0;">Kebaya kombinasi batik terbaru</p>
                <p class="text-right"><b>Rp. 200.000</b></p>
                <a href="#" class="btn btn-outline-secondary btn-sm bi bi-cart3" style="border-radius: 25px; width:100%;"> Tambah</a>
            </div>
    </div>
</div> --}}

<br><br>


@endsection
