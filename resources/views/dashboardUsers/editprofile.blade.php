@extends('layout.templateDashboard')

@section('content')
<section>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-9">
        <div class="card text-black mt-4 mb-4" style="border-radius: 25px;">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-10">
                <p class="h1 fw-bold mb-5 text-center">Edit Profile</p>

                <form action="{{ route('profile.update') }}" method="POST" class="user">
                  @csrf
                  @method('PUT')

                  @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif

                  @if (session('info'))
          <div class="alert alert-info">
            {{ session('info') }}
          </div>
        @endif

                  @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
            </ul>
          </div>
        @endif

                  <div class="row mb-4">
                    <div class="col-md-6 d-flex flex-row align-items-center">
                      <i class="bi bi-person-fill fa-lg me-3 fa-fw mx-3"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="nama">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control form-control-user" id="exampleInputName"
                          value="{{ Auth::user()->nama }}">
                      </div>
                    </div>
                    <div class="col-md-6 d-flex flex-row align-items-center">
                      <i class="bi bi-telephone-fill fa-lg me-3 fa-fw mx-3"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="kontak">Kontak</label>
                        <input name="kontak" type="text" class="form-control form-control-user" id="exampleInputKontak"
                          value="{{ Auth::user()->kontak }}" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                      </div>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="bi bi-house-door-fill fa-lg me-3 fa-fw mx-3"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="alamat">Alamat</label>
                      <textarea name="alamat" class="form-control form-control-user"
                        id="exampleInputAlamat">{{ Auth::user()->alamat }}</textarea>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="bi bi-envelope-fill fa-lg me-3 fa-fw mx-3"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="email">Email</label>
                      <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                        value="{{ Auth::user()->email }}">
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mt-4 mb-1">
                    <button type="submit" class="btn btn-primary btn-md w-25 mx-5">Submit</button>
                    <button type="reset" class="btn btn-danger btn-md w-25">Reset</button>
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