@extends('layout/admin')

@section('content')

<div class="content-wrapper">
    <div class="container">

        <div class="div">
            <center>
                <h1>RIWAYAT<span> PRODUK</span></h1>
            </center>
            <br>
        </div>

        <div class="col-12 justify-content-center text-center">
            <a href="{{ route('product.admin') }}" class="btn btn-success btn-sm me-3">Produk</a>
            {{-- <a href="{{ route('masterAdmin.history') }}" class="btn btn-info btn-sm me-3">History</a> --}}
            {{-- <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm me-3">Tambah</a> --}}
        </div><br>

        <div class="col-12">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th data-priority="1">No</th>
                        <th data-priority="1">Foto</th>
                        <th data-priority="1">Nama</th>
                        {{-- <th>Ukuran</th> --}}
                        <th>Deskripsi</th>
                        {{-- <th>Motif</th> --}}
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th data-priority="1">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $no => $pro)
                        <tr>
                            <td> {{ ++$no }} </td>
                            <td>
                                <div class="col">
                                    <img src="{{ asset('assets/' . $pro->foto_produk) }}" class="img-fluid"
                                        style="max-width: 200px; max-height: 200px;">
                                </div>
                            </td>
                            <td> {{ $pro->nama_produk }} </td>
                            {{-- <td> {{ $pro->ukuran_produk }} </td> --}}
                            <td> {{ $pro->deskripsi_produk }} </td>
                            {{-- <td> {{ $pro->motif_produk }} </td> --}}
                            <td> {{ $pro->harga_produk }} </td>
                            <td> {{ $pro->jumlah_produk }} </td>

                            <td>
                                <form onsubmit="return confirm('Yakin ingin memulihkan ini?');"
                                    action="{{ route('product.restore', $pro->Slug_link) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-success btn-sm mt-2">
                                        <i class="bi bi-box-arrow-left"></i> Restore
                                    </button>
                                </form>

                                <form onsubmit="return confirm('Yakin ingin menghapus ini secara permanen?');"
                                    action="{{ route('product.deletePermanent', $pro->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-info btn-sm mt-2">
                                        <i class="bi bi-trash3"></i> Delete Permanent
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Produk</th>
                        {{-- <th>Ukuran</th> --}}
                        <th>Deskripsi</th>
                        {{-- <th>Motif</th> --}}
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