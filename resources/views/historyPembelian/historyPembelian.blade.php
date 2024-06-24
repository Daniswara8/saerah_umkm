@extends('layout.templateDashboard')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">History Pembelian</h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                @foreach ($pembayarans as $pembayaran)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">ID Pembayaran: {{ $pembayaran->id }}</h5>
                            <p class="card-text">Total Harga: Rp. {{ number_format($pembayaran->total_harga, 0, ',', '.') }}
                            </p>
                            <p class="card-text">Status: {{ ucfirst($pembayaran->status) }}</p>
                            <p class="card-text">Metode Pembayaran: {{ $pembayaran->metode_pembayaran }}</p>
                            <a href="{{ route('history.show', $pembayaran->id) }}" class="btn btn-primary">Detail</a>
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
