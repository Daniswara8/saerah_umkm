@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Customer</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Customer</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            {{-- <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Alumni</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row --> --}}

            <!-- Tampilkan Pesan Sukses -->
            @if (session('success'))
                <div class="alert alert-success text-center ">
                    {{ session('success') }}
                </div>
            @endif

            <div class="col-12">
                <a href="{{ route('masterAdmin.index') }}" class="btn btn-primary">
                    <i class="bi bi-building-add"></i> Tambah Customer
                </a>
                <a href="{{ route('historiAdmin.index') }}" class="btn btn-success">
                    <i class="bi bi-clock-history"></i> Halaman Histori
                </a>
            </div>

            <div class="col-12">
                <table id="example" class="table table-primary" style="width: 100%; color:white;">
                    <thead>
                        <tr>
                            <th data-priority="1">
                                NO
                            </th>
                            {{-- <th data-priority="1">
                                ID
                            </th> --}}
                            <th data-priority="1">>
                                Nama Lengkap
                            </th>
                            <th data-priority="1">>
                                Email
                            </th>
                            <th>
                                Password
                            </th>
                            <th>
                                Nomor Telepon
                            </th>
                            <th>
                                Alamat
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
                        @php $counter = 1; @endphp
                        @foreach ($pelanggans as $mtr)
                            <tr>
                                <td>
                                    {{ $counter++ }}
                                </td>
                                {{-- <td>
                                    {{ $mtr->id }}
                                </td> --}}
                                <td>
                                    {{ $mtr->nama }}
                                </td>
                                <td>
                                    {{ $mtr->email }}
                                </td>
                                <td>
                                    {{ $mtr->konfirmasi_pass }}
                                </td>
                                <td>
                                    {{ $mtr->kontak }}
                                </td>
                                <td>
                                    {{ $mtr->alamat }}
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
                                <td>
                                    <a href="" class="btn btn-primary btn-sm" role="button">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('customerAdmin.edit', $mtr->slug_link) }}"
                                        class="btn btn-success btn-sm" role="button">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="{{ route('customerAdmin.softDelete', $mtr->slug_link) }}"
                                        class="btn btn-danger btn-sm" role="button">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th data-priority="1">
                                NO
                            </th>
                            {{-- <th data-priority="1">
                                ID
                            </th> --}}
                            <th data-priority="1">>
                                Nama Lengkap
                            </th>
                            <th data-priority="1">>
                                Email
                            </th>
                            <th>
                                Password
                            </th>
                            <th>
                                Nomor Telepon
                            </th>
                            <th>
                                Alamat
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
            <!-- /.row -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous">
                </script>
            </body>

            </html>
            <!-- /.row -->


        </div><!-- /.container-fluid -->
    </section>
</div>
@endsection