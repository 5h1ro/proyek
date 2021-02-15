@extends('admin.app')



@section('title')
    Dashboard
@endsection

@if (auth()->user()->role == 0)
@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@endif
@if (auth()->user()->role == 1 || auth()->user()->role == 0)
@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@endif

@section('content')
<div class="row">
@foreach ($barangs as $barang)
<div class="col-md-3">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">{{$barang->nama_barang}}</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="widgets.html" data-source-selector="#card-refresh-content" data-load-on-init="false">
                    <i class="fas fa-sync-alt"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <img src="{{ url('uploads') }}/{{ $barang->gambar }}" class="card-img-top" alt="...">
                <h5 class="card-title">{{$barang->nama_barang}}</h5>
                <p class="card-text">{{$barang->keterangan}}</p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-success">Rp. {{ number_format ($barang->harga)}}</a>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endforeach
</div>
@endsection

@section('addCss')
    <!-- DataTables -->
@endsection

@section('addJs')

@endsection
