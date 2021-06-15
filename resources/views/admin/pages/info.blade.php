@extends('admin.app')

@section('title')
    Info
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Info</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Info</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <!-- Default box -->
    <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Detail Pesanan</h3>

          <div class="card-tools">
            <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="mailbox-read-info">
            <h3><b>Detail Barang</b></h3>
            @foreach ($details as $detail)
                <h5 class="mt-10">{{ $detail->barang->nama_barang }}
                    <span class="float-right">x{{ $detail->jumlah }}</span>
                </h5>
            @endforeach
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="float-right">
            <button type="button" class="btn btn-success"><i class="fas fa-check"></i> Di Kirim</button>
          </div>
        </div>
        <!-- /.card-footer -->
      </div>
@endsection

@section('addCss')
    <!-- DataTables -->
@endsection

@section('addJs')

@endsection
