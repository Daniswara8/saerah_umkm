<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Butik Saerah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
  </head>
  <body>
    
  <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-lg-9">

                
                    <div class="bg-white">
                    <div class="row mb-5 mt-5">
                        <div class="col-lg-5">
                            <div class="bg-login h-100"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5 ps-4 text-dark">
                                <h5 class="mb-1 fw-bold">Selamat Datang!</h5>
                                <p class="mb-4 text-muted">Silahkan masukkan email dan password</p>
                                <form action="#">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email_user" required>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col">
                                                    <label for="pass" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="pass" name="password_user" required>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="col d-grid d-inline-block mb-3 mt-4">
                                                        <button type="submit"
                                                            class="btn btn-primary py-2">Login</button>
                                                    </div>
                                                </div>

                                                <p class="text-center mt-3 text-muted">Belum mempunyai akun? <a href="register">Daftar</a></p>
                                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>