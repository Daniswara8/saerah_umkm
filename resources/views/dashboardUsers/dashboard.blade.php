@extends('layout.templateDashboard')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="content">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Small boxes (Stat box) -->
    <div class="row justify-content-center mt-2">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>

                    <p>Keranjang</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/keranjang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="col-12">
                    <table id="example" class="table table-primary" style="width: 100%; color:white;">
                        <thead>
                            <tr>
                                <th data-priority="1">
                                    No
                                </th>
                                {{-- <th data-priority="1">
                             ID
                         </th> --}}
                                <th data-priority="1">>
                                    Gambar Product
                                </th>
                                <th data-priority="1">>
                                    Nama Product
                                </th>
                                <th>
                                    Ukuran
                                </th>
                                <th>
                                    Jumlah Barang
                                </th>
                                <th>
                                    Jenis Pembayaran
                                </th>
                                <th>
                                    Total
                                </th>
                                <th>
                                    Status Pembayaran
                                </th>
                                {{-- <th>
                             Tanggal
                         </th> --}}
                                <th data-priority="1">>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    
                                    {{-- <td>
                                        {{ $mtr->id }}
                                    </td> --}}
                                    <td>
                                        nama
                                    </td>
                                    <td>
                                        nama
                                    </td>
                                    <td>
                                        nama
                                    </td>
                                    <td>
                                        nama
                                    </td>
                                    <td>
                                        nama
                                    </td>
                                    <td>
                                        nama
                                    </td>
                                    {{-- <td>
                             @if ($lat->update_at != null)
                             {{ Carbon\Carbon::parse($lat->update_at)->format('d-m-Y H:i:s') }}
                             @else
                             {{ Carbon\Carbon::parse($lat->created_at)->format('d-m-Y H:i:s') }}  
                             @endif
                         </td>
                         <td>
                             @if ($lat->updated_by != null)
                                 {{ $lat->updated_by }}
                             @else
                                 {{ $lat->created_by }}
                             @endif
                         </td> --}}
                                    
                                </tr>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                            <th data-priority="1">
                                    No
                                </th>
                                {{-- <th data-priority="1">
                             ID
                         </th> --}}
                                <th data-priority="1">>
                                    Gambar Product
                                </th>
                                <th data-priority="1">>
                                    Nama Product
                                </th>
                                <th>
                                    Ukuran
                                </th>
                                <th>
                                    Jumlah Barang
                                </th>
                                <th>
                                    Jenis Pembayaran
                                </th>
                                <th>
                                    Total
                                </th>
                                <th>
                                    Status Pembayaran
                                </th>
                                {{-- <th>
                        Tanggal
                    </th> --}}
                                <th data-priority="1">>
                                    Aksi
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>


</div>

<!-- DataTables
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            responsive: true
        });
    });
</script> -->
@endsection