@extends('layout.layoutKeranjang')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Detail Pembayaran</h1>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Ringkasan Pembayaran</h4>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">ID Pembayaran</th>
                                <th>Total Harga</th>
                                <th>Status</th>
                                <th>Metode Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pembayaran->id }}</td>
                                <td>Rp. {{ number_format($pembayaran->total_harga, 0, ',', '.') }}</td>
                                <td>{{ $pembayaran->status }}</td>
                                <td>{{ $pembayaran->metode_pembayaran }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <a href="{{ route('pembayaran.index') }}" class="btn btn-secondary">Kembali ke Daftar Pembayaran</a>
                </div>
            </div>
        </div>
    </div>
@endsection
