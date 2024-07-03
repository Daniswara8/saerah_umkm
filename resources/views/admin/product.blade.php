@extends('layout/admin')

@section('content')
    <div class="content-wrapper">
        <div class="container">

            <div class="div">
                <center>
                    <h1>DATA<span> SAERAH</span></h1>
                </center>
                <br>
            </div>

            <div class="col-12 justify-content-center text-center">
                <a href="{{ route('product.admin') }}" class="btn btn-success btn-sm me-3">Produk</a>
                <a href="{{ route('masterAdmin.history') }}" class="btn btn-info btn-sm me-3">History</a>
                <a href="{{ route('masterAdmin.plus') }}" class="btn btn-primary btn-sm me-3">Tambah</a>
            </div><br>

            <div class="col-12">
                <table id="example" class="table table-striped" style="width: 100%; color:white;">
                    <thead>
                        <tr>
                            <th data-priority="1">No</th>
                            <th data-priority="1">Foto</th>
                            <th data-priority="1">Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th data-priority="1">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $no => $pro)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>
                                    <div class="col">
                                        <img src="{{ asset('assets/cache/' . $pro->foto_produk) }}" class="img-fluid"
                                            style="max-width: 200px; max-height: 200px;">
                                    </div>
                                </td>
                                <td>{{ $pro->nama_produk }}</td>
                                <td>{{ $pro->deskripsi_produk }}</td>
                                <td>{{ $pro->harga_produk }}</td>
                                <td>{{ $pro->jumlah_produk }}</td>
                                <td>
                                    <a href="{{ route('product.hapus', $pro->Slug_link) }}"
                                        class="btn btn-sm btn-outline-secondary me-2">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <a href="{{ route('product.edit', $pro->Slug_link) }}"
                                        class="btn btn-sm btn-outline-dark me-2" style="margin-top: 10px;">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
