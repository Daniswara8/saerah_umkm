@extends('layout.templateDashboard')

@section('content')
    <div class="container mt-2">
        <h1 class="mb-3 text-center">History Pembelian</h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                @foreach ($pembayarans as $pembayaran)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">ID Pembayaran: {{ $pembayaran->id }}</h5>
                                    <p class="card-text">Total Harga: Rp.
                                        {{ number_format($pembayaran->total_harga, 0, ',', '.') }}</p>
                                    <p class="card-text">Status: {{ ucfirst($pembayaran->status) }}</p>
                                    <p class="card-text">Metode Pembayaran: {{ $pembayaran->metode_pembayaran }}</p>
                                </div>
                            </div>
                            <hr>
                            <h5 class="mt-3 text-center">Produk yang Dibeli:</h5>
                            @foreach ($pembayaran->histories as $history)
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $history->product->nama_produk }}</h5>
                                        <img src="{{ asset('assets/' . $history->product->foto_produk) }}"
                                            alt="{{ $history->product->nama_produk }}" class="img-fluid mb-3"
                                            style="height: 200px; width: auto;">
                                        <p class="card-text">Harga: Rp.
                                            {{ number_format($history->harga_produk, 0, ',', '.') }}</p>
                                        <p class="card-text">Kuantitas: {{ $history->quantity }}</p>
                                        <p class="card-text">Total: Rp.
                                            {{ number_format($history->quantity * $history->harga_produk, 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                            <a href="{{ route('history.show', $pembayaran->id) }}" class="btn btn-primary mt-3">Detail</a>
                        </div>
                    </div>
                @endforeach

                @if ($pembayarans->isEmpty())
                    <div class="alert alert-info">
                        Belum ada riwayat pembelian.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
