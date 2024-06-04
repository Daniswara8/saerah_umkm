@extends('layout/admin')

@section('content')

<div class="content-wrapper">
    <div class="row">

        <a href="/product" class="bi bi-arrow-90deg-left" type="nav-link" style="margin-left: 15px;"></a>
        <div class="col-12" style="margin-left: 10px;"><br><br>
            <div class="card border-1 shadow rounded"><br>

             <center><h2>Tambah Data Produk</h2></center>

                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Nama Produk</label>
                            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk">
                            @error('nama_produk')
                            <div class="alert alert-danger mt-2">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label for="" class="font-weight-bold">Deskripsi Produk</label>
                          <input type="text" class="form-control @error('deskripsi_produk') is-invalid @enderror" name="deskripsi_produk">
                          @error('deskripsi_produk')
                          <div class="alert alert-danger mt-2">
                          {{ $message }}
                          </div>
                          @enderror
                      </div>

                      {{-- <div class="form-group">
                        <label for="" class="font-weight-bold">Motif Produk</label>
                        <input type="text" class="form-control @error('motif_produk') is-invalid @enderror" name="motif_produk">
                        @error('motif_produk')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                      </div> --}}

                      {{-- <div class="form-group">
                        <label for="" class="font-weight-bold">Ukuran</label>
                        <select name="ukuran_produk" id="" class="form-control @error('ukuran_produk') is-invalid @enderror">
                          <option selected></option>
                          <option>XS</option>
                          <option>S</option>
                          <option>M</option>
                          <option>L</option>
                          <option>XL</option>
                          <option>Lain-lain</option>
                        </select>
                        @error('ukuran_produk')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                      </div> --}}

                      <div class="form-group">
                        <label for="" class="font-weight-bold">Harga</label>
                        <input type="number" class="form-control @error('harga_produk') is-invalid @enderror" name="harga_produk">
                        @error('harga_produk')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="" class="font-weight-bold">Jumlah</label>
                        <input type="number" class="form-control @error('jumlah_produk') is-invalid @enderror" name="jumlah_produk">
                        @error('jumlah_produk')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="" class="font-weight-bold">Foto Produk</label>
                        <input type="file" class="form-control @error('foto_produk') is-invalid @enderror" name="foto_produk">
                        @error('foto_produk')
                        <div class="alert alert-danger mt-2">
                        {{ $message }}
                        </div>
                        @enderror
                      </div> <br>

                        <button type="submit" class="btn btn-secondary">Kirim</button>
                        <button type="reset" class="btn btn-info">Reset</button> <br><br>

                    </form>
                </div>

            </div>
            <br><br>
        </div>
    </div>
</div>


@endsection
