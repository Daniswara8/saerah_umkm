<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Butik Saerah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
  <style>
    .eye-icon {
      position: absolute;
      right: 10px;
      top: 70%;
      transform: translateY(-50%);
      cursor: pointer;
    }

    .position-relative {
      position: relative;
    }

    @media (max-width: 768px) {
      .container {
        padding: 2rem 1rem;
      }

      .row {
        margin: 0;
      }

      .col-md-8,
      .col-lg-7,
      .col-xl-6 {
        display: none;
      }

      .col-md-7,
      .col-lg-5,
      .col-xl-5 {
        padding: 0;
      }

      .text-white {
        color: #000;
      }

      .text-center {
        text-align: center;
      }

      .form-control {
        margin-bottom: 1rem;
      }

      .btn {
        width: 100%;
      }
    }

    @media (max-width: 576px) {
      .container {
        padding: 1rem;
      }

      .form-control {
        padding: .75rem;
      }

      .btn {
        padding: .75rem;
      }
    }
  </style>
</head>

<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid"
            alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="/login/sesi" method="post" class="text-white">
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

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="email">Email address</label>
              <input name="email" value="{{ old('email') }}" type="email" id="email"
                class="form-control form-control-lg" required />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4 position-relative">
              <label class="form-label" for="password">Password</label>
              <input name="password" type="password" id="password" class="form-control form-control-lg" required />
              <span class="eye-icon" onclick="togglePassword()">
                <i class="bi bi-eye-fill text-dark " id="togglePasswordIcon"></i>
              </span>
            </div>
            <div class="text-center mt-5">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
          <div class="text-white mt-4 text-center">
            <p>Don't have an account? <a href="register">Sign Up</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script>
    function togglePassword() {
      const passwordInput = document.getElementById('password');
      const togglePasswordIcon = document.getElementById('togglePasswordIcon');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePasswordIcon.classList.remove('bi-eye');
        togglePasswordIcon.classList.add('bi-eye-slash');
      } else {
        passwordInput.type = 'password';
        togglePasswordIcon.classList.remove('bi-eye-slash');
        togglePasswordIcon.classList.add('bi-eye');
      }
    }
  </script>
</body>

</html>
