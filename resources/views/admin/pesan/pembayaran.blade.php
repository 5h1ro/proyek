@extends('admin.app')

@section('title')
    Pembayaran
@endsection

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pembayaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pembayaran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h3>Sukses Check Out</h3>
                <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di rekening
                    <strong>Bank BRI Nomer Rekening : 32113-821312-123</strong>
                    dengan nominal :
                    <strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong>
                </h5>

                <div class="col-12 col-sm-4" data-aos="fade-up">
                    <div class="col-12">
                    <img src="uploads/proyek.png" class="product-image" alt="Product Image">
                    </div>
                </div>

                <div class="col-12 col-sm-4" data-aos="fade-up">
                    <a class="btn btn-success float-right" href="{{ url('/bayar') }}"><i class="fa fa-cash-register"></i> Bayar</a>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection

@section('addCss')
    <!-- DataTables -->
@endsection

@section('addJs')

@endsection
