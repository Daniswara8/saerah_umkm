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
                                    <p class="card-text">Status Pengiriman: {{ ucfirst($pembayaran->status_pengiriman) }}
                                    </p>
                                    <p class="card-text">Metode Pembayaran: {{ $pembayaran->metode_pembayaran }}</p>
                                    <p class="card-text">Alamat Pengiriman: {{ $pembayaran->alamat_pengiriman }}</p>
                                </div>
                            </div>
                            <hr>
                            <h5 class="mt-3 text-center">Produk yang Dibeli:</h5>
                            @foreach ($pembayaran->histories as $history)
                                <div class="card mt-4">
                                    <div class="card-body text-center">
                                        <h5 class="card-text">Nama Produk: {{ $history->product->nama_produk }}</h5>
                                        <h5 class="card-text">Foto Produk: </h5>
                                        <img src="{{ asset('assets/cache/' . $history->product->foto_produk) }}"
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
                            <div class="d-flex justify-content-start mt-3">

                                <a href="{{ route('history.show', $pembayaran->id) }}"
                                    class="btn btn-primary mx-2">Detail</a>

                                @if ($pembayaran->status_pengiriman === 'tiba')
                                    <form id="ubahStatusPengirimanTiba{{ $pembayaran->id }}"
                                        action="{{ route('updateStatus.diterima', $pembayaran->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status_pengiriman" value="diterima">
                                        <button type="button" class="btn btn-success mx-2"
                                            onclick="confirmTiba({{ $pembayaran->id }})">
                                            Konfirmasi Barang Telah Diterima
                                        </button>
                                    </form>
                                @else 
                                    <button type="button" class="btn btn-success mx-2" disabled>
                                        Konfirmasi Barang Telah Diterima
                                    </button>
                                @endif

                                @if ($pembayaran->status_pengiriman === 'pending')
                                    <form id="ubahStatusPengirimanBatal{{ $pembayaran->id }}"
                                        action="{{ route('updateStatus.dibatalkan', $pembayaran->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="status_pengiriman" value="dibatalkan">
                                        <button type="button" class="btn btn-danger mx-2"
                                            onclick="confirmBatal({{ $pembayaran->id }})">
                                            Batalkan Pesanan
                                        </button>
                                    </form>
                                @else
                                    <button type="button" class="btn btn-danger mx-2" disabled>
                                        Batalkan Pesanan
                                    </button>
                                @endif
                            </div>
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

    <script>
        function confirmTiba(id) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Apakah anda yakin pesanan barang sudah tiba?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Sudah!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: 'Terima Kasih Telah Berbelanja Di Toko Kami!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        document.getElementById('ubahStatusPengirimanTiba' + id).submit();
                    });
                }
            });
        }

        function confirmBatal(id) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Apakah anda yakin ingin membatalkan pesanan ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Batalkan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Dibatalkan!',
                        text: 'Pesanan telah dibatalkan.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        document.getElementById('ubahStatusPengirimanBatal' + id).submit();
                    });
                }
            });
        }
    </script>
@endsection
