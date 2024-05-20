<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAERAH PRODUK</title>

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- DATA TABLES -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">

        <!-- DATA TABLES RESPONSIVE -->
        <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
        <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">

        <!-- ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        });
        </script>

        <link rel="website icon" type="jpeg" href="assets/ktgkebaya.jpeg">

    <style>
     @media only screen and (max-width: 768px) {

        .btn.btn-outline-secondary{
            margin-bottom: 10px;
        }

        nav.navbar{
        width: 100%;
      }

      h1{
        font-size:30px;
      }

      /* input an di admin */
      .form-group{
        width: 90%;
        margin-left: 6%;
      }

      /* tabel di admin */
      .container {
        display: flex;
        flex-direction: column; /* Mengatur konten berurutan ke bawah */
    }

      .row{
        display: block;
        width: 100%;
        margin: auto;
        }

        /* tampilan produk di user */
        .row .rror{
            bottom: 0;
            margin-bottom: 10px;
            width: 75%;
        }

        /* yang membungkus foto produk satu per satu */
      .col{
        /* border: 5px solid pink; */
        box-shadow: 0px 3px 8px palevioletred;
        width:65%;
        margin-left: 80px;
        /* margin-bottom: 50px; */
      }

      .row .col{
        margin-bottom: 35px;
      }

      /* .col.card{
        margin-bottom: 10px;
      } */

      /* yang membungkus foto produk */
      .card-body{
        padding: 10px;
        font-size: 20px;
      }

      /* di user, nama dan desk produk */
      p{
        font-size: 15px;
      }

      nav.navbar{
        width: 100%;
      }

      .container{
        width: 100%;
        margin-left: 0;
        margin-right: 500px;
      }

      /* admin */
      .btnhps{
        margin-bottom: 20px;
        margin-left: 30px;
      }

      /* foto di table admin */
    .gambartu{
        object-fit: cover;
        width: 100%;
        height: 50px;
    }

    /* search */
    .custom{
    height: 35px;
    }

    /* nama produk di detail */
    h1{
        margin-top: 15px;
        text-align: center;
    }
    }



    .btn-sm.bi.bi-cart3{
        margin-bottom: 0;
    }

    /* foto di table admin */
    .gambartu{
        object-fit: cover;
        width: 180px;
        height: 180px;
    }

    /* ukuran foto */
    .img-fluid.gambar{
        height: 200px;
        object-fit: cover;
    }

    /* detail produk */
    .detfoto{
        height: 450px;
        object-fit: cover;
        width: 40%;
        float: left;
        margin-right: 10px;
    }

    /* user */
        .row.rror{
        justify-content: center;
        display: flex;
        /* width: 100%; */
        }

    /* tabel di admin */
      tr{
        box-shadow: 1px 5px 10px rgb(209, 189, 189);
      }

      /* tabel di admin */
      #example{
        background-color: white;
        box-shadow: 1px 5px 10px rgb(0, 0, 0);
      }

      /* di user yang membungkus foto dan printilannya */
      .col{
        box-shadow: 0px 3px 8px rgb(138, 69, 92);
      }

      .d-flex1{
        margin-bottom:20px;
        justify-content: center;
        align-items: center;
        display: flex;
      }

      .col{

        /* height: 440px; */
        margin-top: 10px;
        margin-bottom: 20px;
        transition: 0.5s all;
      }

      .col:hover{
        transition: 0.5s all;
        transform: scale(1.1);
      }

      span{
        color: rgb(165, 165, 165);
        margin-bottom:0;
      }

      /* a href navlink */
      a{
        color: black;
      }

      /* background navbar */
      /* nav.navbar{
        background-color: lavenderblush;
      } */

      /* harga */
      .text-right{
        text-align: right;
      }

      /* button search */
      .btn.btn-dark{
        width: 100%;
      }

      /* search */
      .d-flex{
        width: 100%;
      }

    .custom {
        background-color: black;
        color: white;
        border-radius: 20px;
    }
      /* navlink home dll */
      .collapse{
        margin-right: 0;
      }

      .cuzz{
        border-radius: 20px;`
      }

      body{
        background: #e7dbdb;
      }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

            <div class="col-3">
                <h1><span><b>S</b></span>AERAH</h1>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="user">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-3" href="#">About</a>
                    </li>
                </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 custom" type="search" placeholder="Cari Disini" aria-label="Search">
                        <button class="btn btn-outline-secondary bi bi-search cuzz" type="submit"></button>
                    </form>
                    {{-- <i class="bi bi-search"></i> --}}
                    {{-- <a href="#" class="btn btn-dark btn-sm bi bi-search" style="border-radius: 25px; margin-right:15px;"> Cari Di sini</a> --}}
                    {{-- <input class="form-control me-1" type="search" placeholder="Cari disini" aria-label="Search">
                    <button class="btn btn-outline-success me-3" type="submit"><i class="bi bi-search"></i></button> --}}
                </form>
                <a href="#"><i class="bi bi-person-circle" style="margin-left: 10px;"></i></a>
                <a href="#"><i class="bi bi-cart3 me-3" style="margin-left: 10px;"></i></a>
                {{-- <a href="#"><i class="bi bi-heart me-3"></i></a> --}}
            </div>
    </div>
</nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
