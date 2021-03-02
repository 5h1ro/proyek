@extends('admin.app')

@section('title')
    About Us
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">About Us</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')


    <!-- Profile Image -->
    <div class="card card-primary card-outline" data-aos="fade-up">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid img-circle img-size-500" src="uploads/pp.png" alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">Oke Cell</h3>

        <p class="text-muted text-center">Slogan</p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Facebook</b> <a class="float-right">ssss</a>
          </li>
          <li class="list-group-item">
            <b>Instagram</b> <a class="float-right">sss</a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="float-right">sss</a>
          </li>
        </ul>

        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- About Me Box -->
    <div class="card card-primary" data-aos="fade-up">
      <div class="card-header">
        <h3 class="card-title">About Me</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <strong><i class="fas fa-calendar mr-1"></i>Berdiri</strong>

        <p class="text-muted">
          2009
        </p>

        <hr>

        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

        <p class="text-muted">Madiun</p>

        <hr>

        <strong><i class="fas fa-shopping-basket mr-1"></i> Melayani </strong>

        <p class="text-muted">
          <span class="tag tag-danger">Jual Beli HP</span>
          <span class="tag tag-success">Service Hp</span>
          <span class="tag tag-info">Pulsa, Kuota, dll</span>
          <span class="tag tag-warning">Service Laptop</span>
          <span class="tag tag-primary">Print, Scan, Jilid, dll</span>
        </p>

        <hr>

        <strong><i class="far fa-file-alt mr-1"></i> Catatan</strong>

        <p class="text-muted">Tidak Melayani Permintaan Aneh Aneh</p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

@endsection

@section('addCss')
    <!-- DataTables -->
@endsection

@section('addJs')

@endsection
