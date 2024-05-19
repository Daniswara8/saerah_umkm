@extends('layout/product')

@section('content')
<div class="container">

    <div class="div">
        <center><h1>DATA<span> SAERAH</span></h1></center>
        <br>
    </div>

    <div class="col-12 justify-content-center text-center">
        <a href="{{ route('product.admin') }}" class="btn btn-success btn-sm me-3">Produk</a>
        <a href="{{ route('product.history') }}" class="btn btn-info btn-sm me-3">History</a>
        <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm me-3">Tambah</a>
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
                @foreach ($products as $no => $pro )

                <tr>
                    <td> {{ ++$no }} </td>
                    <td> <img src="{{ asset('storage/images/' . $pro->foto_produk) }}" class="p-2 img-fluid gambartu"> </td>
                    <td> {{ $pro->nama_produk }} </td>
                    {{-- <td> {{ $pro->ukuran_produk }} </td> --}}
                    <td> {{ $pro->deskripsi_produk }} </td>
                    {{-- <td> {{ $pro->motif_produk }} </td> --}}
                    <td> {{ $pro->harga_produk }} </td>
                    <td> {{ $pro->jumlah_produk }} </td>

                    {{-- <td> --}}

                        {{-- @if ($pro->updated_at != null)
                            <!-- {{ $pro->updated_at }} -->
                        {{ Carbon\Carbon::parse($pro->updated_at)->format('d-m-Y H:i:s') }}

                        @else
                        <!-- {{ $pro->created_at }} -->
                        {{ Carbon\Carbon::parse($pro->created_at)->format('d-m-Y H:i:s') }}

                        @endif --}}

                    </td>
                    <!-- <td> {{ $pro->umkmsaerah_db }} </td> -->

                    <div class="btneh">
                        <td>
                            <a href="{{route ('product.hapus', $pro->Slug_link) }}"><i class="btn btn-sm btn-outline-secondary me-2 bi bi-trash3"></i></a>
                            <a href="{{route ('product.edit', $pro->Slug_link) }}"><i class="btn btn-sm btn-outline-dark me-2 bi bi-pencil-square" style="margin-top: 10px;"></i></a>
                        </td>
                    </div>

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


    {{-- @foreach ($products as $pro)
        <div class="row" style="display:inline-block; width: 25%; margin-bottom: 20px; margin-right:20px;">
            <div class="col card me-4">
            <img src="{{ asset('storage/images/' . $pro->foto_produk) }}" class="p-2 img-fluid gambar" style="margin-top: 10px; border-radius:20px; width:200px;">
                <div class="card-body">
                <p class="card-text"><b>{{$pro->nama_produk}}</b></p>
                <p>{{$pro->deskripsi_produk}}</p>
                <p class="text-right"><b>{{$pro->harga_produk}}</b></p>
                <a href=""><i class="btn btn-outline-secondary me-2 bi bi-trash3"></i></a>
                <a href=""><i class="btn btn-outline-dark me-2 bi bi-pencil-square"></i></a>
                </div>
            </div>
        </div>
    @endforeach --}}

</div>

@endsection
