<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Dashboard
    </title>

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
    @yield('addCss')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('about') }}" class="nav-link">About Us</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-shopping-cart"></i>Checkout</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-lock-open"></i>Login</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="uploads/pp.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">CV OKE CELL</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2 sidebar-dark-warning">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    User
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Checkout</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pembayaran</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
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
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($barangs as $barang)
                        <div class="col-md-3">
                            <div class="card card-success" data-aos="fade-up">
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
                                        <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-success swalDefaultSuccess">Rp. {{ number_format ($barang->harga)}}</a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="https://www.instagram.com/200creative.corp/">200Creative.Corp</a></strong>
            Nurhakiki Romadhony Ikhwandany
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('vendor') }}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('vendor') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendor') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('vendor') }}/dist/js/adminlte.js"></script>
    {{-- Animation On Scroll --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    {{-- sweet alert --}}
    <script src="{{ asset('vendor') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

    @include('sweetalert::alert')
    <script>
        $(function() {
          var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });

          $('.swalDefaultSuccess').click(function() {
            Toast.fire({
              icon: 'success',
              title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.swalDefaultInfo').click(function() {
            Toast.fire({
              icon: 'info',
              title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.swalDefaultError').click(function() {
            Toast.fire({
              icon: 'error',
              title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.swalDefaultWarning').click(function() {
            Toast.fire({
              icon: 'warning',
              title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.swalDefaultQuestion').click(function() {
            Toast.fire({
              icon: 'question',
              title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });

          $('.toastrDefaultSuccess').click(function() {
            toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
          });
          $('.toastrDefaultInfo').click(function() {
            toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
          });
          $('.toastrDefaultError').click(function() {
            toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
          });
          $('.toastrDefaultWarning').click(function() {
            toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
          });

          $('.toastsDefaultDefault').click(function() {
            $(document).Toasts('create', {
              title: 'Toast Title',
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.toastsDefaultTopLeft').click(function() {
            $(document).Toasts('create', {
              title: 'Toast Title',
              position: 'topLeft',
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.toastsDefaultBottomRight').click(function() {
            $(document).Toasts('create', {
              title: 'Toast Title',
              position: 'bottomRight',
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.toastsDefaultBottomLeft').click(function() {
            $(document).Toasts('create', {
              title: 'Toast Title',
              position: 'bottomLeft',
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.toastsDefaultAutohide').click(function() {
            $(document).Toasts('create', {
              title: 'Toast Title',
              autohide: true,
              delay: 750,
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.toastsDefaultNotFixed').click(function() {
            $(document).Toasts('create', {
              title: 'Toast Title',
              fixed: false,
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.toastsDefaultFull').click(function() {
            $(document).Toasts('create', {
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
              title: 'Toast Title',
              subtitle: 'Subtitle',
              icon: 'fas fa-envelope fa-lg',
            })
          });
          $('.toastsDefaultFullImage').click(function() {
            $(document).Toasts('create', {
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
              title: 'Toast Title',
              subtitle: 'Subtitle',
              image: '../../dist/img/user3-128x128.jpg',
              imageAlt: 'User Picture',
            })
          });
          $('.toastsDefaultSuccess').click(function() {
            $(document).Toasts('create', {
              class: 'bg-success',
              title: 'Toast Title',
              subtitle: 'Subtitle',
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.toastsDefaultInfo').click(function() {
            $(document).Toasts('create', {
              class: 'bg-info',
              title: 'Toast Title',
              subtitle: 'Subtitle',
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.toastsDefaultWarning').click(function() {
            $(document).Toasts('create', {
              class: 'bg-warning',
              title: 'Toast Title',
              subtitle: 'Subtitle',
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.toastsDefaultDanger').click(function() {
            $(document).Toasts('create', {
              class: 'bg-danger',
              title: 'Toast Title',
              subtitle: 'Subtitle',
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
          $('.toastsDefaultMaroon').click(function() {
            $(document).Toasts('create', {
              class: 'bg-maroon',
              title: 'Toast Title',
              subtitle: 'Subtitle',
              body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
          });
        });
      </script>
    @yield('addJs')

</body>
