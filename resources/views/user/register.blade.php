<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

  <section>
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-9">
          <div class="card text-black mt-4 mb-4" style="border-radius: 25px;">
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1" style="width: 2000px;">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                  <form action="{{route('register.store')}}" method="POST" class="user mx-1 mx-md-4">
                    @csrf
                    @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif
                    @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
              @foreach ($errors->all() as $error)
          <li class="list-unstyled">{{ $error }}</li>
        @endforeach
              </ul>
            </div>
          @endif

                    <div class="row mb-4">
                      <div class="col-md-6 d-flex flex-row align-items-center">
                        <i class="bi bi-person-fill fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label" for="nama">Nama Lengkap</label>
                          <input name="nama" type="text" class="form-control form-control-user" id="exampleInputName">
                        </div>
                      </div>
                      <div class="col-md-6 d-flex flex-row align-items-center">
                        <i class="bi bi-telephone-fill fa-lg me-3 fa-fw"></i>
                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                          <label class="form-label" for="kontak">Kontak</label>
                          <input name="kontak" type="text" class="form-control form-control-user"
                            id="exampleInputKontak" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="bi bi-house-door-fill fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control form-control-user"
                          id="exampleInputAlamat"></textarea>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="bi bi-envelope-fill fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="email">Email</label>
                        <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail">
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4 position-relative">
                      <i class="bi bi-key-fill fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0 position-relative"
                        style="position: relative;">
                        <label class="form-label" for="password">Password</label>
                        <input name="password" type="password" class="form-control form-control-user" id="password">
                        <i class="bi bi-eye-fill" id="togglePassword"
                          style="position: absolute; top: 50%; right: 10px; transform: translateY(20%); cursor: pointer;"></i>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4 position-relative">
                      <i class="bi bi-key-fill fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="password_confirmation">Konfirmasi Password</label>
                        <input name="password_confirmation" type="password" class="form-control form-control-user"
                          id="password_confirmation">
                        <i class="bi bi-eye-fill" id="toggleConfirmPassword"
                          style="position: absolute; top: 50%; right: 10px; transform: translateY(20%); cursor: pointer;"></i>
                      </div>
                    </div>

                    <div class="d-flex justify-content-center mt-4 mb-1">
                      <button type="submit" class="btn btn-primary btn-md w-25 mx-5">Register</button>
                      <button type="reset" class="btn btn-danger btn-md w-25">Reset</button>
                    </div>

                  </form>
                  <p class="text-center pt-4">Sudah punya akun? <a href="{{route('login.index')}}">Sign in</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://kit.fontawesome.com/6dd9914696.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    document.getElementById('togglePassword').addEventListener('click', function () {
      const passwordField = document.getElementById('password');
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      this.classList.toggle('bi-eye-slash-fill');
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
      const passwordField = document.getElementById('password_confirmation');
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      this.classList.toggle('bi-eye-slash-fill');
    });
  </script>
</body>

</html>