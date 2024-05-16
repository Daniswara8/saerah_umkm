@extends('layout/admin')
@section('content')
    <!-- table data -->
    <div class="container mt-5">
        <a href="/tambahdata" type="button" class="btn btn-success">Tambah Data + </a>
        <br><br>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3 text-center" role="alert">
                {{ $message }}
            </div>
            @endif
            <table id="example" class="table table-stripped" style="width: 100%; background-color: #454d55!;">
                <thead>
                    <tr>
                        <th scope="col" data-priority="1">#</th>
                        <th scope="col" data-priority="1">Nama</th>
                        <th scope="col" data-priority="1">alamat</th>
                        <th scope="col" data-priority="1">Jenis kelamin</th>
                        <th scope="col" data-priority="1">No Telepon</th>
                        <th scope="col" data-priority="1">Dibuat</th>
                        <th scope="col" data-priority="1">Aksi</th>
                    </tr>
                </thead>

                @php
                    $no = 1;
                @endphp

                @foreach ($data as $d)
                <tbody>
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $d -> nama }}</td>
                        <td>{{ $d -> alamat }}</td>
                        <td>{{ $d -> jeniskelamin }}</td>
                        <td>0{{ $d -> notelepon }}</td>
                        <td>{{ $d -> created_at->diffForHumans() }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $d -> id }}" class="btn btn-info">Edit</a>
                            <a href="/delete/{{ $d -> id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach 

                <tfoot>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- end -->
@endsection