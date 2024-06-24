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
            </div>
        </div>
    </div>
@endsection
