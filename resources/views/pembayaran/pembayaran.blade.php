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

                <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data" id="payment-form">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="metode_pembayaran">Pilih Metode Pembayaran:</label>
                        <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="qris">QRIS</option>
                            <option value="cod">COD</option>
                        </select>
                    </div>

                    <div class="form-group mt-3" id="bukti_pembayaran" style="display: none;">
                        <label for="bukti_pembayaran">Unggah Bukti Pembayaran:</label>
                        <input type="file" class="form-control-file" name="bukti_pembayaran" id="bukti_pembayaran_input">
                    </div>

                    <div class="form-group mt-3" id="qris_image" style="display: none;">
                        <label>Scan QRIS untuk Melakukan Pembayaran:</label>
                        <img src="{{ asset('assets/images/qris.jpg') }}" alt="QRIS" class="img-fluid">
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary" id="order-btn">Checkout</button>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('payment-form').addEventListener('submit', function (event) {
            event.preventDefault();

            Swal.fire({
                title: "Orderanmu sudah masuk!",
                text: "Terimakasih telah memesan!",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });

        document.getElementById('metode_pembayaran').addEventListener('change', function() {
            var metode = this.value;
            var buktiPembayaran = document.getElementById('bukti_pembayaran');
            var buktiPembayaranInput = document.getElementById('bukti_pembayaran_input');
            var qrisImage = document.getElementById('qris_image');

            if (metode === 'qris') {
                buktiPembayaran.style.display = 'block';
                buktiPembayaranInput.required = true;
                qrisImage.style.display = 'block';
            } else {
                buktiPembayaran.style.display = 'none';
                buktiPembayaranInput.required = false;
                qrisImage.style.display = 'none';
            }
        });
    </script>
@endsection
