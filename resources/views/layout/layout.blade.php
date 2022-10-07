<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PPK Ormawa</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('plugins')}}/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('plugins')}}/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('dist')}}/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('Assets')}}/Images/Logo.png" alt="AdminLTELogo" height="60"
        width="60">
    </div>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="/" class="nav-link">Home</a>
        </li> -->
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <a href="/" class="brand-link">
        <img src="{{asset('Assets')}}/Images/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>
      </a>

      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <ul class="nav nav-treeview">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                  <a href="{{route('barang.index')}}" class="nav-link active">
                    <p>Barang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('galeri.index')}}" class="nav-link active">
                    <p>Galeri</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('kategori.index')}}" class="nav-link active">
                    <p>Kategori</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('kontak.index')}}" class="nav-link active">
                    <p>Kontak</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('pedagang.index')}}" class="nav-link active">
                    <p>Pedagang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('pelatihan.index')}}" class="nav-link active">
                    <p>Pelatihan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('profil.index')}}" class="nav-link active">
                    <p>Profil</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('tentang.index')}}" class="nav-link active">
                    <p>Tentang</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Start Content Wrapper. Contains page content -->
    @yield('content')
    <!-- End Content Wrapper. Contains page content -->

    <!-- FOOTER -->
    <footer class="main-footer">
      <strong>Copyright &copy; </strong> Made With Love.
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>

  <script src="{{asset('plugins')}}/jquery/jquery.min.js"></script>
  <script src="{{asset('plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('plugins')}}/datatables/jquery.dataTables.min.js"></script>
  <script src="{{asset('plugins')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('plugins')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="{{asset('plugins')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="{{asset('plugins')}}/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{asset('plugins')}}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="{{asset('plugins')}}/jszip/jszip.min.js"></script>
  <script src="{{asset('plugins')}}/pdfmake/pdfmake.min.js"></script>
  <script src="{{asset('plugins')}}/pdfmake/vfs_fonts.js"></script>
  <script src="{{asset('plugins')}}/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="{{asset('plugins')}}/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="{{asset('plugins')}}/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="{{asset('dist')}}/js/adminlte.min.js"></script>
  <script src="{{asset('dist')}}/js/demo.js"></script>

  <!-- PAGINATION -->
  <script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "pageLength": 10,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  </script>
</body>

</html>