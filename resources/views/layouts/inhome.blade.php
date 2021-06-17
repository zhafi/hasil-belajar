<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Zhafirah|AdminLTE</title>
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">



</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-orange navbar-dark">

            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="modal" class="nav-link">Ke web?</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="home" class="nav-link">Kembali Awal</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                </li>
                <ul>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Selamat datang</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/bts.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Hai Zhafff</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-treeview nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                    Form
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{asset('/form-tambah-ruang')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ruang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('/form-tambah-guru')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Guru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('/form-tambah-pelajaran')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pelajaran</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{asset('/form-tambah-kelas')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kelas</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{asset('/form-tambah-jadwal')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jadwal</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tabel
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{asset('/ruangtable')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ruang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('/gurutable')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Guru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('/pelajarantable')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pelajaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('/kelastable')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>kelas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('/jadwaltabel')}}" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jadwal</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bus"></i>
                                <p>
                                    Percobaan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{asset('uwaw')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jquery tabel</p>
                                    </a>
                                </li>
                        </li>
                    </ul>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!--ini untuk yang pengen ngubah ukuran konten-->
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    {{-- <div class="row mb-9">
          <div class="col-sm-10"> --}}
                    <h1 class="m-0 text-dark">Ini Tampilannya</h1>

                    <!-- Ini Tabel yang bisa di buka tutup
         <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Data Guru</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>-->
                    <!-- /.card-header 
             <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table m-0">
                        <thead>
                        <tr>
                          <th>Nama/ID</th>
                          <th>Alamat</th>
                          <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                                <tr>
                                  <td><a href="#">Mina</a></td>
                                  <td>Petemon V</td>
                                  <td><span class="badge badge-success">Pelajar</span></td>
                                  </td>
                                </tr>
                                <tr>
                                  <td><a href="#">Olip</a></td>
                                  <td>Simo</td>
                                  <td><span class="badge badge-warning">Mahasiswa</span></td>
                                  </td>
                                </tr>
                                <tr>
                                  <td><a href="#">Eni</a></td>
                                  <td>banyu urip</td>
                                  <td><span class="badge badge-danger">Pekerja</span></td>
                                 </td>
                                </tr>
                                <tr>
                                  <td><a href="#">Tinaa</a></td>
                                  <td>Bulak Banteng</td>
                                  <td><span class="badge badge-info">Sekolah</span></td>
                                  </td>
                                </tr>
                                <tr>
                                </tbody>
                            </table>
                        </div> -->
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Men-copy milik AdminLTE &copy; diedit oleh Zhafff.</strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.0-rc.5
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="dist/js/demo.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- PAGE SCRIPTS -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script scr="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('app.css')}}"></script>
    <script src="{{asset('bootstrap.min.css')}}"></script>
    <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>



    <script>
        $(function () {
            $("#tabel").DataTable();
        });
        $(function () {
            $("#tabel").DataTable();
        });
        $(function () {
            $("#tabel").DataTable();
        });
        $(function () {
            $("#tabel").DataTable();
        });

    </script>
    <script type="text/javascript">
        $(function () {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function () {
                Toast.fire({
                    type: 'success',
                    title: 'Input Succes. Terima kasih'
                })
            });
            $('.toastsDefaultSuccess').click(function () {
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Toast Title',
                    subtitle: 'Subtitle',
                    body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });

            $('.toastrDefaultSuccess').click(function () {
                toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });

        });

    </script>
              

<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>


    @stack('scripts')

</body>

</html>
