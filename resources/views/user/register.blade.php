<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/regist.css">
  </head>
  <body>
    
  <div class="container">
    <div class="row align-items-center justify-content-center vh-100">
      <div class="col-lg-9">

        <div class="bg-white">
          <div class="row">
            <div class="col-lg-5">
              <div class="bg-register h-100"></div>
            </div>
            <div class="col-lg-7">
              <div class="p-5 ps-4 text-dark">
                <h5 class="mb-1 fw-bold">Daftar</h5>
                <p class="mb-4 text-muted">Silahkan isikan form dibawah ini!</p>
                <form action="#">
                  <div class="row mb-3">
                    <div class="col">
                      <label for="firstname">Nama Lengkap</label>
                      <input type="text" class="form-control" id="firstname" required>
                    </div>
                        </div>

                <div class="row mb-3">
                    <div class="col">
                      <label for="kontak">Kontak</label>
                        <input type="text" class="form-control" id="kontak" required placeholder="Masukkan Nomor Telepon"
                        onkeypress="return hanyaAngka(event)">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col">
                      <label for="alamat">Alamat</label>
                        <input type="textarea" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda">
                    </div>
                  </div>

                    <div class="row mb3">
                        <div class="col">
                            <label for="email" class="form-label">Email Address</label>
                                 <input type="email" class="form-control" id="email" required>
                                     </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="pass" class="form-label">Password</label>
                                             <input type="password" class="form-control" aria-label="password" aria-describedby="password"
                                               id="password-input" required>
                                         </div>

                <div class="valid-feedback">Good</div>
                    <div class="invalid-feedback">Wrong</div>
                    <div class="alert px-4 py-3 mb-0 d-none" role="alert" data-mdb-color="warning" id="password-alert">
                      <ul class="list-unstyled mb-0">
                        <li class="requirements leng">
                          <i class="fas fa-check text-success me-2"></i>
                          <i class="fas fa-times text-danger me-3"></i>
                          Your password must have at least 8 chars
                        </li>
                        <li class="requirements big-letter">
                          <i class="fas fa-check text-success me-2"></i>
                          <i class="fas fa-times text-danger me-3"></i>
                          Your password must have at least 1 big letter.
                        </li>
                        <li class="requirements num">
                          <i class="fas fa-check text-success me-2"></i>
                          <i class="fas fa-times text-danger me-3"></i>
                          Your password must have at least 1 number.
                        </li>

                      </ul>
                    </div>

                    <div class="row mb-3">
                      <div class="col d-grid d-inline-block mb-3 mt-4">
                        <button type="submit" class="btn btn-primary py-2" href="/register">Register</button>
                      </div>
                      <div class="col d-grid d-inline-block mb-3 mt-4">
                        <button type="reset" class="btn btn-danger py-2">Reset</button>
                      </div>
                    </div>

                    <p class="text-center mt-3 text-muted">Sudah mempunyai akun? <a href="login">Masuk</a></p>
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

      const forms = document.querySelectorAll('.needs-validation')

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

    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }


    //pass
    addEventListener("DOMContentLoaded", (event) => {
      const password = document.getElementById("password-input");
      const passwordAlert = document.getElementById("password-alert");
      const requirements = document.querySelectorAll(".requirements");
      let lengBoolean, bigLetterBoolean, numBoolean, specialCharBoolean;
      let leng = document.querySelector(".leng");
      let bigLetter = document.querySelector(".big-letter");
      let num = document.querySelector(".num");
      let specialChar = document.querySelector(".special-char");
      const specialChars = "!@#$%^&*()-_=+[{]}\\|;:'\",<.>/?`~";
      const numbers = "0123456789";

      requirements.forEach((element) => element.classList.add("wrong"));

      password.addEventListener("focus", () => {
        passwordAlert.classList.remove("d-none");
        if (!password.classList.contains("is-valid")) {
          password.classList.add("is-invalid");
        }
      });

      password.addEventListener("input", () => {
        let value = password.value;
        if (value.length < 8) {
          lengBoolean = false;
        } else if (value.length > 7) {
          lengBoolean = true;
        }

        if (value.toLowerCase() == value) {
          bigLetterBoolean = false;
        } else {
          bigLetterBoolean = true;
        }

        numBoolean = false;
        for (let i = 0; i < value.length; i++) {
          for (let j = 0; j < numbers.length; j++) {
            if (value[i] == numbers[j]) {
              numBoolean = true;
            }
          }
        }

        specialCharBoolean = false;
        for (let i = 0; i < value.length; i++) {
          for (let j = 0; j < specialChars.length; j++) {
            if (value[i] == specialChars[j]) {
              specialCharBoolean = true;
            }
          }
        }

        if (lengBoolean == true && bigLetterBoolean == true && numBoolean == true && specialCharBoolean == true) {
          password.classList.remove("is-invalid");
          password.classList.add("is-valid");

          requirements.forEach((element) => {
            element.classList.remove("wrong");
            element.classList.add("good");
          });
          passwordAlert.classList.remove("alert-warning");
          passwordAlert.classList.add("alert-success");
        } else {
          password.classList.remove("is-valid");
          password.classList.add("is-invalid");

          passwordAlert.classList.add("alert-warning");
          passwordAlert.classList.remove("alert-success");

          if (lengBoolean == false) {
            leng.classList.add("wrong");
            leng.classList.remove("good");
          } else {
            leng.classList.add("good");
            leng.classList.remove("wrong");
          }

          if (bigLetterBoolean == false) {
            bigLetter.classList.add("wrong");
            bigLetter.classList.remove("good");
          } else {
            bigLetter.classList.add("good");
            bigLetter.classList.remove("wrong");
          }

          if (numBoolean == false) {
            num.classList.add("wrong");
            num.classList.remove("good");
          } else {
            num.classList.add("good");
            num.classList.remove("wrong");
          }


        }
      });

      password.addEventListener("blur", () => {
        passwordAlert.classList.add("d-none");
      });
    });

  </script>
  <script src="https://kit.fontawesome.com/6dd9914696.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>