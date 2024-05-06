@extends('layout/admin')
@section('content')
<h1 class="text-center mt-5">Tambah Data Pelanggan</h1>
    <br>

    <!-- Tambah data -->
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="cowo">Cowo</option>
                                    <option value="cewe">Cewe</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" name="notelepon" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    @endsection