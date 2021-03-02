@extends('admin.app')

@section('title')
    Edit
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">General Elements</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form class="row" method="POST" action="{{ url('edit') }}">
            @csrf
            <div class="col-sm-2" data-aos="fade-up">
                <h3 class="d-inline-block d-sm-none">{{ $barangs->nama_barang }}</h3>
                <div class="col-14">
                    <img src="{{ url('uploads') }}/{{ $barangs->gambar }}" class="product-image" alt="Product Image">
                </div>
            </div>
            <div class="col-sm-6" data-aos="fade-up">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>ID Produk</label>
                        <input id="id" type="text" class="form-control" value="{{ $barangs->id }}" name="id" readonly>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input id="nama_barang" type="text" class="form-control" value="{{ $barangs->nama_barang }}" name="nama_barang">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input id="harga" type="text" class="form-control" value="{{ $barangs->harga }}" name="harga">
                    </div>
                </div>
                <div class="col-sm-6">
                <!-- text input -->
                    <div class="form-group">
                        <label>Jumlah Produk</label>
                        <input id="stok" type="number" class="form-control" value="{{ $barangs->stok }}" name="stok">
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i>
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
  </div>

@endsection

@section('addCss')
    <!-- DataTables -->
@endsection

@section('addJs')

@endsection
