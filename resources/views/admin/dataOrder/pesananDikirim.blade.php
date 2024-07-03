@extends('layout.admin')

@section('content')
    <style>
        .table-custom {
            background-color: #f8f9fa;
        }

        .table-custom thead th,
        .table-custom tfoot th {
            background-color: #e9ecef;
        }

        .table-custom tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }
    </style>

    <div class="content-wrapper">
        <div class="">

            <div class="col-12 mt-3">
                <h1 class="ms-3">Data Pesanan Yang Sedang Telah Tiba</h1>
            </div>

            <div class="col-12 mt-5">
                <table id="example" class="table table-striped table-custom" style="width: 100%; color:white;">
                    <thead>
                        <tr>
                            <th data-priority="1">No</th>
                            <th data-priority="1">Foto Produk</th>
                            <th data-priority="1">Nama Pemesan</th>
                            <th data-priority="1">Alamat Pengiriman</th>
                            <th>Metode Pembayaran</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status Pengiriman</th>
                            <th data-priority="1">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pembayarans as $key => $pembayaran)
                            @foreach ($pembayaran->histories as $history)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <div class="col">
                                            <img src="{{ asset('assets/cache/' . $history->product->foto_produk) }}"
                                                class="img-fluid" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                    </td>
                                    <td>{{ $pembayaran->user->nama }}</td>
                                    <td>{{ $pembayaran->alamat_pengiriman }}</td>
                                    <td>{{ $pembayaran->metode_pembayaran }}</td>
                                    <td>Rp. {{ number_format($history->harga_produk, 0, ',', '.') }}</td>
                                    <td>{{ $history->quantity }}</td>
                                    <td>
                                        <div class="col">
                                            <img src="{{ asset('assets/cache/' . $pembayaran->bukti_pembayaran) }}"
                                                class="img-fluid" style="max-width: 200px; max-height: 200px;">
                                        </div>
                                    </td>
                                    <td>{{ ucfirst($pembayaran->status_pengiriman) }}</td>
                                    <td>
                                        <form id="ubahStatusPengirimanTiba{{ $pembayaran->id }}"
                                            action="{{ route('updateStatus.tiba', $pembayaran->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="status_pengiriman" value="tiba">
                                            <button type="button" class="btn btn-success btn-sm"
                                                onclick="confirmTiba({{ $pembayaran->id }})">
                                                <i class="bi bi-send-check-fill"></i>
                                            </button>
                                        </form>
                                        <a href="#" class="btn btn-danger btn-sm mt-3" role="button">
                                            <i class="bi bi-trash3"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Foto Produk</th>
                            <th>Nama Pemesan</th>
                            <th>Alamat Pengiriman</th>
                            <th>Metode Pembayaran</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status Pengiriman</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script>
        function confirmTiba(id) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Apakah anda yakin barang akan dikirim?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Kirim!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('ubahStatusPengirimanTiba' + id).submit();
                }
            });
        }
    </script>
@endsection
