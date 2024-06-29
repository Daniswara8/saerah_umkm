@extends('layout.admin')

@section('content')

<style>
    .table-custom {
        background-color: #f8f9fa;
        /* Abu-abu muda untuk keseluruhan tabel */
    }

    .table-custom thead th,
    .table-custom tfoot th {
        background-color: #e9ecef;
        /* Abu-abu sedikit lebih gelap untuk header dan footer */
    }

    .table-custom tbody tr:nth-child(even) {
        background-color: #e9ecef;
        /* Abu-abu sedikit lebih gelap untuk baris genap */
    }
</style>

<div class="content-wrapper">
    <div class="container">

        <div class="col-sm-6 mt-3">
            <h1 class="m-0">Data Customer</h1>
        </div>

        <div class="col-12 mt-5">
            <table id="example" class="table table-striped table-custom" style="width: 100%; color:white;">
                <thead>
                    <tr>
                        <th data-priority="1">No</th>
                        <th data-priority="1">Foto</th>
                        <th data-priority="1">Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th data-priority="1">>
                            Aksi
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>no</td>
                        <td>
                            <div class="col">
                                <img src="#" class="img-fluid" style="max-width: 200px; max-height: 200px;">
                            </div>
                        </td>
                        <td>nama</td>
                        <td>nama</td>
                        <td>nama</td>
                        <td>nama</td>
                         <td>
                            <a href="#" class="btn btn-primary btn-sm" role="button">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-success btn-sm"
                                role="button">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#"
                                class="btn btn-danger btn-sm" role="button">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection