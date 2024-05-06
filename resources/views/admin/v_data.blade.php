@extends('layout/admin')
@section('content')
    <!-- table data -->
    <div class="container mt-5">
        <a href="/tambahdata" type="button" class="btn btn-success">Tambah Data</a>
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
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                @foreach ($data as $d)
                <tbody>
                    <tr>
                        <td>{{ $d -> id }}</td>
                        <td>{{ $d -> nama }}</td>
                        <td>{{ $d -> jeniskelamin }}</td>
                        <td>0{{ $d -> notelepon }}</td>
                        <td>{{ $d -> created_at->diffForHumans() }}</td>
                        <td>
                            <button type="button" class="btn btn-danger">Delete</button>
                            <a href="/tampilkandata/{{ $d -> id }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach 

                <tfoot>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
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