@extends('layout/product')
@section('content')

    <div class="div">
        <br>
        <center>
            <h1>KATALOG<span> SAERAH</span></h1>
        </center>
        <br>
    </div>

    <body>
        <div class="row rror">
            @if ($products && $products->count() > 0)
                @foreach ($products as $pro)
                    <div class="col col-3 card me-4">
                        <img src="{{ asset('assets/cache/' . $pro->foto_produk) }}" class="p-2 img-fluid gambar"
                            style="margin-top: 10px; border-radius:10px;">
                        <div class="card-body">
                            <p class="card-text" style="margin-bottom: 0; font-size:20px; text-transform: capitalize; ">
                                <b>{{ $pro->nama_produk }}</b></p>
                            <span>
                                <p class="text-right"><b>{{ $pro->harga_produk }}</b></p>
                            </span>
                            <a href="{{ route('produk.detail', $pro->id) }}"
                                class="btn btn-outline-secondary btn-sm bi bi-arrows-angle-expand"
                                style="border-radius: 25px; width:100%;"> Detail</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No products available</p>
            @endif
        </div>
    </body>

@endsection
