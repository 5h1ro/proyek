@extends('admin.app')

@section('title')
    Dibayar
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dibayar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dibayar</li>
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
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th style="width: 200px">Total</th>
            <th style="width: 40px">bukti</th>
            <th style="width: 40px">Rincian</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pesanans as $pesanan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$pesanan->users->username}}</td>
                    <td>{{$pesanan->users->alamat}}</td>
                    <td>Rp. {{ number_format($pesanan->jumlah_harga)}}</td>
                    <td>
                        <img src="{{ url('bukti') }}/{{ $pesanan->bukti }}" class="product-image" alt="Product Image"
                        onclick="document.getElementById('{{ url('bukti') }}/{{ $pesanan->bukti }}').style.display='block'">
                        <div id="{{ url('bukti') }}/{{ $pesanan->bukti }}" class="w3-modal" onclick="this.style.display='none'">
                            <div class="w3-modal-content w3-animate-zoom">
                              <img src="{{ url('bukti') }}/{{ $pesanan->bukti }}" style="height: 700px">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            {{-- <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-info btn-sm ml-2 "><i class="fa fa-info-circle"></i></a> --}}
                            <a href="{{ url('info') }}/{{ $pesanan->id }}" class="btn btn-info btn-sm ml-2 "><i class="fa fa-info-circle"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection

@section('addCss')
    <!-- DataTables -->
@endsection

@section('addJs')

@endsection
