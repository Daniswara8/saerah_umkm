@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Memasukkan Data-->
    <div class="card">
      <div class="card-body">
         <form action="{{ route('masterAdmin.store') }}" method="POST" autocomplete="off" class="needs-validation" novalidate>
             @csrf
            
            <div class="mb-3 row">
               <label for="nama" class="col-sm-2 col-form-label">Nama Pelanggan</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama Lengkap Anda" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="email" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Isi Email" required>
               </div>
            </div>

            <div class="mb-3 row">
               <label for="nisn" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="nisn" name="password" placeholder="Isi Password" required> 
               </div>
            </div>

            <div class="mb-3 row">
                <label for="telepon" class="col-sm-2 col-form-label">No. Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" name="notelepon" placeholder="Isi Nomor" required>
                </div>
            </div>

            <div class="mb-3 row">
              <label for="telepon" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="telepon" name="alamat" placeholder="Isi Nomor" required>
              </div>
            </div>

            <div class="col-12">
               <input type="submit" name="simpan" value="Tambah Data" class="btn btn-primary">
            </div>

         </form>
      </div>
    </div>
</div>

<style>
/* Custom CSS untuk warna placeholder */
::placeholder {
  color: white;
}

/* Menghilangkan tombol scroll up dan down di input number */
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

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
</style>

<script>
   // Example starter JavaScript for disabling form submissions if there are invalid fields
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

<script>
    document.getElementById("telepon").addEventListener("input", function() {
        if (this.value.length > 15) {
            this.value = this.value.slice(0, 15);
        }
    });
</script>

@endsection
