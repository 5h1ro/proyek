@extends('admin.app')

@section('title')
    Checkout
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Checkout</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title"><i class="fa fa-shopping-cart"></i> Checkout</h3>
    </div>
    <!-- /.card-header -->
    @if (!empty($pesanan))
    <div class="card-body">
      <p>Tanggal Pesan : {{ $pesanan->tanggal }}</p>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Nama Barang</th>
            <th style="width: 40px">Jumlah</th>
            <th style="width: 150px">Harga</th>
            <th style="width: 190px">Total Harga</th>
            <th style="width: 120px">Aksi</th>
          </tr>
        </thead>
        <tbody>

           @foreach ($pesanan_details as $pesanan_detail)
               <tr>
                   <td>{{ $loop->iteration }}</td>
                   <td>{{ $pesanan_detail->barang->nama_barang}}</td>
                   <td>{{ $pesanan_detail->jumlah}} buah</td>
                   <td>Rp. {{ number_format ($pesanan_detail->barang->harga)}}</td>
                   <td>Rp. {{ number_format ($pesanan_detail->jumlah_harga)}}</td>
                   <td>
                       <form action="{{ url('checkout') }}/{{ $pesanan_detail->id }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                       </form>
                   </td>
               </tr>
           @endforeach
           <tr>
               <td colspan="4"><strong>Total :</strong></td>
               <td><strong>Rp. {{ number_format ($pesanan->jumlah_harga)}}</strong></td>
               <td>
                   <a href="{{ url('konfirmasi') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-shopping-cart"></i> Checkout
                   </a>
               </td>
           </tr>
        </tbody>
      </table>
    </div>

    @endif
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>
  </div>
@endsection

@section('addCss')
    <!-- DataTables -->
@endsection

@section('addJs')

@endsection
