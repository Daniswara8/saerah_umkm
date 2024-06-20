@extends('layout.layoutKeranjang')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Halaman Pembayaran</h1>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Ringkasan Harga</h4>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Gambar Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/' . $item->product->foto_produk) }}"
                                            alt="{{ $item->product->nama_produk }}" class="product-image">
                                    </td>
                                    <td>{{ $item->product->nama_produk }}</td>
                                    <td>Rp. {{ number_format($item->product->harga_produk, 0, ',', '.') }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>Rp. {{ number_format($item->quantity * $item->product->harga_produk, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <th colspan="4">Total Harga Yang Harus Dibayar</th>
                                <th>Rp. {{ number_format($totalPrice, 0, ',', '.') }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form action="{{ route('checkout') }}" method="GET">
                    @csrf
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">Lanjutkan Ke Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        td {
            vertical-align: middle;
            text-align: center;
        }

        th {
            text-align: center;
        }

        @media (max-width: 425px) {
            .table-responsive {
                overflow-x: auto;
            }

            table {
                width: 100%;
                font-size: 12px;
            }

            .product-image {
                width: 50px;
                height: 50px;
            }

            th,
            td {
                padding: 8px;
                text-align: center;
            }
        }
    </style>
@endsection
