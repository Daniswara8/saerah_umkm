@extends('layout.templateDashboard')

@section('content')
<section>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Kata Sandi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><a href="#">Beranda</a></li> -->
            <li class="breadcrumb-item active">Ubah Kata Sandi</li>
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
                <p class="h1 fw-bold mb-5 text-center">Ubah Kata Sandi</p>
                <form method="POST" action="{{ route('password.update') }}">
                  @csrf
                  @method('PUT')

                  @if (session('success'))
                    <div class="alert alert-success">
                      {{ session('success') }}
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

                  <div class="form-group position-relative">
                    <input type="password" class="form-control form-control-user @error('current_password') is-invalid @enderror"
                      id="current_password" name="current_password" placeholder="Kata Sandi Saat Ini">
                    <i class="bi bi-eye-slash toggle-password position-absolute" style="cursor: pointer; right: 10px; top: 50%; transform: translateY(-50%);" onclick="togglePassword('current_password')"></i>
                    @error('current_password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group position-relative">
                    <input type="password" class="form-control form-control-user @error('new_password') is-invalid @enderror"
                      id="new_password" name="new_password" placeholder="Kata Sandi Baru">
                    <i class="bi bi-eye-slash toggle-password position-absolute" style="cursor: pointer; right: 10px; top: 50%; transform: translateY(-50%);" onclick="togglePassword('new_password')"></i>
                    @error('new_password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group position-relative">
                    <input type="password" class="form-control form-control-user @error('new_password_confirmation') is-invalid @enderror"
                      id="new_password_confirmation" name="new_password_confirmation" placeholder="Konfirmasi Kata Sandi Baru">
                    <i class="bi bi-eye-slash toggle-password position-absolute" style="cursor: pointer; right: 10px; top: 50%; transform: translateY(-50%);" onclick="togglePassword('new_password_confirmation')"></i>
                    @error('new_password_confirmation')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Simpan
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function togglePassword(id) {
    var input = document.getElementById(id);
    var icon = input.nextElementSibling;
    if (input.type === "password") {
      input.type = "text";
      icon.classList.remove('bi-eye-slash');
      icon.classList.add('bi-eye');
    } else {
      input.type = "password";
      icon.classList.remove('bi-eye');
      icon.classList.add('bi-eye-slash');
    }
  }
</script>
@endsection
