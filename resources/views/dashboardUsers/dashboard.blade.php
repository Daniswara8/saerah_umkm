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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <!-- <div class="col-lg-3 col-6">
     
      <div class="small-box bg-success">
        <div class="inner">
          <h3>53</h3>

          <p>History</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div> -->
    <!-- ./col -->
  </div>


</div>
@endsection