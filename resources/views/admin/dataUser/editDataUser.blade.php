@extends('layout.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Pelanggan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Pelanggan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!--Memasukkan Data-->
        <div class="card">
            <div class="card-body">

                <form action="{{ route('customerAdmin.update', $pelanggans->slug_link) }}" method="POST" autocomplete="off"
                    class="needs-validation" novalidate id="userForm">
                    @csrf
                    @method('PUT')
                    <!-- Field Form -->
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama', $pelanggans->nama) }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email', $pelanggans->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" value="{{ old('password', $pelanggans->password) }}"
                                required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="konfirmasi_pass" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('konfirmasi_pass') is-invalid @enderror"
                                id="konfirmasi_pass" name="konfirmasi_pass"
                                value="{{ old('konfirmasi_pass', $pelanggans->konfirmasi_pass) }}" required>
                            @error('konfirmasi_pass')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div id="konfirmasiPassError" class="invalid-feedback">
                                Konfirmasi password tidak valid.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="telepon" class="col-sm-2 col-form-label">Kontak</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control @error('kontak') is-invalid @enderror" id="kontak"
                                name="kontak" value="{{ old('kontak', $pelanggans->kontak) }}" required>
                            @error('kontak')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                name="alamat" value="{{ old('alamat', $pelanggans->alamat) }}" required>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="hidden" class="form-control" name="status_aktif"
                            value="{{ old('status_aktif', $pelanggans->status_aktif) }}" required>
                        <input type="submit" name="simpan" value="Edit Perubahan" class="btn btn-primary">
                    </div>
                </form>

            </div>

            <style>
                #content {
                    width: 100%;
                    padding: 20px;
                    min-height: 100vh;
                    transition: all 0.3s;
                }

                .mx-auto {
                    width: 780px;
                    margin-top: 20px;
                }

                .card {
                    margin-top: 10px;
                }

                /* Menghilangkan tombol scroll up dan down di input number */
                input[type=number]::-webkit-inner-spin-button,
                input[type=number]::-webkit-outer-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                }
            </style>

            <script>
                document.getElementById('userForm').addEventListener('submit', function(event) {
                    const password = document.getElementById('password');
                    const konfirmasiPass = document.getElementById('konfirmasi_pass');

                    if (password.value !== konfirmasiPass.value) {
                        konfirmasiPass.setCustomValidity('Konfirmasi password tidak valid');
                        document.getElementById('konfirmasiPassError').style.display = 'block';
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        konfirmasiPass.setCustomValidity('');
                        document.getElementById('konfirmasiPassError').style.display = 'none';
                    }
                });

                document.getElementById("kontak").addEventListener("input", function() {
                    if (this.value.length > 15) {
                        this.value = this.value.slice(0, 15);
                    }
                });
            </script>
@endsection
