@extends('layout.layoutKeranjang')
@section('content')
    <section class="h-100 h-custom" style="background-color: #E7DBD0">
        <div class="container py-4 h-100">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12">
                    <div class="card card-registration card-registration-2">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h3 class="mb-0 text-black">
                                                <a href="/menu" class="back"><i class="bi bi-arrow-left-circle"></i></a>
                                                Kembali Ke Produk
                                            </h3>
                                        </div>

                                        <hr class="my-4" />

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="{{ asset('assets/images/batikJawa.jpg') }}" alt="Batik Jawa"
                                                    class="img-fluid rounded" />
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h5 class="text-black mb-0">
                                                    Batik Jawa
                                                </h5>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button class="btn btn-outline-secondary"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="bi bi-dash-circle"></i>
                                                </button>
                                                <input id="form1" min="0" name="quantity" value="1"
                                                    type="number" class="form-control form-control-sm text-center" readonly
                                                    style="width: 70px" />
                                                <button class="btn btn-outline-secondary"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="bi bi-plus-circle"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">Rp. 200.000</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#" class="btn btn-outline-danger"><i
                                                        class="bi bi-trash3"></i></a>
                                            </div>
                                        </div>

                                        <hr class="my-4" />

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="{{ asset('assets/images/batikSumatera.jpg') }}"
                                                    alt="Batik Sumatera" class="img-fluid rounded" />
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h5 class="text-black mb-0">
                                                    Batik Sumatera
                                                </h5>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button class="btn btn-outline-secondary"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="bi bi-dash-circle"></i>
                                                </button>
                                                <input id="form1" min="0" name="quantity" value="1"
                                                    type="number" class="form-control form-control-sm text-center" readonly
                                                    style="width: 70px" />
                                                <button class="btn btn-outline-secondary"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="bi bi-plus-circle"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">Rp. 300.000</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#" class="btn btn-outline-danger"><i
                                                        class="bi bi-trash3"></i></a>
                                            </div>
                                        </div>

                                        <hr class="my-4" />

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img src="{{ asset('assets/images/bajuDenang.jpg') }}" alt="Baju Demang"
                                                    class="img-fluid rounded" />
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h5 class="text-black mb-0">
                                                    Baju Demang
                                                </h5>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <button class="btn btn-outline-secondary"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="bi bi-dash-circle"></i>
                                                </button>
                                                <input id="form1" min="0" name="quantity" value="1"
                                                    type="number" class="form-control form-control-sm text-center" readonly
                                                    style="width: 70px" />
                                                <button class="btn btn-outline-secondary"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="bi bi-plus-circle"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">Rp. 500.000</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#" class="btn btn-outline-danger"><i
                                                        class="bi bi-trash3"></i></a>
                                            </div>
                                        </div>
                                        <br />
                                    </div>
                                </div>
                                <div class="col-12 bg-grey">
                                    <div class="p-5">
                                        <h3 class="mb-5 mt-2 pt-1">
                                            Detail Pesanan
                                        </h3>
                                        <hr />
                                        <div>
                                            <label class="fw-bold" for="nama">Nama :</label>
                                            <label for="kita">Daniswara Zavier Putra Akmal</label>
                                        </div>
                                        <div>
                                            <label class="fw-bold" for="nomer">No Telepon :</label>
                                            <label for="telepon">085640673917</label>
                                        </div>
                                        <div>
                                            <label class="fw-bold" for="dikirim">Dikirim ke :</label>
                                            <label for="alamat">Jalan Singa Timur II No. 1 RT 2 RW 12 Kelurahan Palebon
                                                Kecamatan Pedurungan</label>
                                        </div>
                                        <hr class="my-4" />
                                        <div class="d-flex justify-content-between mb-4">
                                            <h5>Total Produk (3)</h5>
                                            <h5 class="text-end">Rp. 1.000.000</h5>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <h5>Ongkos Kirim</h5>
                                            <h5 class="text-end">Rp. 50.000</h5>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <h4>Total Harga Yang harus Dibayar</h4>
                                            <h4 class="text-end">Rp. 1.050.000</h4>
                                        </div>
                                        <div class="mb-3">
                                            <label for="payment-method" class="form-label">Metode Pembayaran:</label>
                                            <select class="form-select" aria-label="Large select example"
                                                id="payment-method">
                                                <option value="cash_on_delivery">
                                                    Cash On Delivery (Bayar di
                                                    Tempat)
                                                </option>
                                                <option value="Qris">
                                                    Bayar Dengan Qris
                                                </option>
                                            </select>
                                        </div>
                                        <a href="/process" class="btn btn-secondary w-100" id="order-btn">PESAN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
                background-color: #e7dbdb;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .bg-grey {
            background-color: gainsboro;
        }

        .tambah {
            text-decoration: none;
            float: right;
            color: chocolate;
        }

        a.back {
            color: black;
        }

        @media (min-width: 992px) {
            .card-registration-2 .bg-grey {
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-grey {
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;
            }
        }
    </style>
@endsection
