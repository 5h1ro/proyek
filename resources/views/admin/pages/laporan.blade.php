<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- @include('sweetalert::alert') --}}
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('vendor') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('vendor') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    {{-- animation on scroll --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">



	{{-- <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet"> --}}
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    {{-- sweetalert2 --}}
    <link rel="stylesheet" href="{{ asset('vendor') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- Include a polyfill for ES6 Promises (optional) for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Penjualan</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>Alamat</th>
                <th>Total</th>
                <th>Tanggal Pemesanan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach ($pesanans as $pesanan)
			<tr>
				<td>{{ $i++ }}</td>
                <td>{{$pesanan->users->username}}</td>
                <td>{{$pesanan->users->alamat}}</td>
                <td>Rp. {{number_format($pesanan->jumlah_harga)}}</td>
                <td>{{$pesanan->tanggal}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
