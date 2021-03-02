@extends('admin.app')

@section('title')
    Admin
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Barang</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Barang</th>
            <th style="width: 40px">Jumlah</th>
            <th style="width: 6%">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$barang->nama_barang}}</td>
                    <td>{{$barang->stok}}</td>
                    <td>
                        <div class="row">
                            <a href="{{ url('edit') }}/{{ $barang->id }}" class="btn btn-success btn-sm ml-2"><i class="fa fa-edit"></i></a>
                            <form action="{{ url('delete') }}/{{ $barang->id }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <a class="btn btn-success float-right" href="#"><i class="fa fa-plus-square"></i> Tambah Data</a>
    </div>
  </div>

@endsection

@section('addCss')
    <!-- DataTables -->
@endsection

@section('addJs')

@endsection
