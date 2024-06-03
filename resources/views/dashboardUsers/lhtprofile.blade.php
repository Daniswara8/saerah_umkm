@extends('layout.templateDashboard')

@section('content')
<section>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-9">
        <div class="card text-black mt-4 mb-4" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-10">
                <p class="h1 fw-bold mb-5 text-center">Detail Profile</p>

                <form action="#" method="POST" class="user">
                  <div class="row mb-4">
                    <div class="col-md-6 d-flex flex-row align-items-center">
                      <i class="bi bi-person-fill fa-lg me-3 fa-fw mx-3"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="nama">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control form-control-user" id="exampleInputName"
                          readonly value="{{ Auth::user()->nama }}">
                      </div>
                    </div>
                    <div class="col-md-6 d-flex flex-row align-items-center">
                      <i class="bi bi-telephone-fill fa-lg me-3 fa-fw mx-3"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="kontak">Kontak</label>
                        <input name="kontak" type="text" class="form-control form-control-user" id="exampleInputKontak"
                          readonly value="{{ Auth::user()->kontak }}">
                      </div>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="bi bi-house-door-fill fa-lg me-3 fa-fw mx-3"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="alamat">Alamat</label>
                      <textarea name="alamat" class="form-control form-control-user" id="exampleInputAlamat"
                        readonly>{{ Auth::user()->alamat }}</textarea>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="bi bi-envelope-fill fa-lg me-3 fa-fw mx-3"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="email">Email</label>
                      <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                        readonly value="{{ Auth::user()->email }}">
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="bi bi-key-fill fa-lg me-3 fa-fw mx-3"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="pass">Password</label>
                      <input name="password" type="password" class="form-control form-control-user"
                        id="exampleInputPassword" readonly value="{{ Auth::user()->konfirmasi_pass }}">
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection