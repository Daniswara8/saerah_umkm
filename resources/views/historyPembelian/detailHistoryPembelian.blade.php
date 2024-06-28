@extends('layout.templateDashboard')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Detail Pembayaran</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID Pembayaran: {{ $pembayaran->id }}</h5>
                <p class="card-text">Total Harga: Rp. {{ number_format($pembayaran->total_harga, 0, ',', '.') }}</p>
                <p class="card-text">Status: {{ ucfirst($pembayaran->status) }}</p>
                <p class="card-text">Metode Pembayaran: {{ $pembayaran->metode_pembayaran }}</p>

                @if ($pembayaran->bukti_pembayaran)
                    <p class="card-text">Bukti Pembayaran:</p>
                    <img src="{{ asset('uploads/' . $pembayaran->bukti_pembayaran) }}" alt="Bukti Pembayaran"
                        class="img-fluid">
                @endif

                <h5 class="mt-4">Produk yang Dibeli:</h5>
                @foreach ($histories as $history)
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $history->product->nama_produk }}</h5>
                            <img src="{{ asset('assets/' . $history->product->foto_produk) }}" alt="{{ $history->product->nama_produk }}" class="img-fluid mb-3" style="height: 200px; width: auto;">
                            <p class="card-text">Harga: Rp. {{ number_format($history->harga_produk, 0, ',', '.') }}</p>
                            <p class="card-text">Kuantitas: {{ $history->quantity }}</p>
                            <p class="card-text">Total: Rp. {{ number_format($history->quantity * $history->harga_produk, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
