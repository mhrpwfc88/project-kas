<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/vendor/adminlte/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- datatables -->
    <link rel="stylesheet" href="assets/vendor/datatables/css/dataTables.bootstrap4.min.css">
    <!-- fancybox -->
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/img_properties/logo.png">
  <title>Dashboard</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         ppp
            <div class="col-lg-4">
              <div class="card shadow">
                <div class="card-body">
                  <h5><i class="fas fa-fw fa-cog"></i> Jabatan</h5>
                  <h6 class="text-muted">Jumlah Jabatan: </h6>
                  <a href="jabatan.php" class="btn btn-info"><i class="fas fa-fw fa-align-justify"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card shadow">
                <div class="card-body">
                  <h5><i class="fas fa-fw fa-users"></i> User</h5>
                  <h6 class="text-muted">Jumlah User: </h6>
                  <a href="user.php" class="btn btn-info"><i class="fas fa-fw fa-align-justify"></i></a>
                </div>
              </div>
            </div>
         
          <div class="col-lg-4">
            <div class="card shadow">
              <div class="card-body">
                <h5><i class="fas fa-fw fa-user-tie"></i> Siswa</h5>
                <h6 class="text-muted">Jumlah Siswa: </h6>
                <a href="siswa.php" class="btn btn-info"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow">
              <div class="card-body">
                <h5><i class="text-success fas fa-fw fa-caret-up"></i> <i class="text-success fas fa-fw fa-dollar-sign"></i> Uang Kas</h5>
                <h6 class="text-muted">Jumlah Uang Kas: Rp. </h6>
                <a href="uang_kas.php" class="btn btn-info"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow">
              <div class="card-body">
                <h5><i class="text-danger fas fa-fw fa-caret-down"></i><i class="text-danger fas fa-fw fa-dollar-sign"></i> Pengeluaran</h5>
                <h6 class="text-muted">Jumlah Pengeluaran: Rp. </h6>
                <a href="pengeluaran.php" class="btn btn-info"><i class="fas fa-fw fa-align-justify"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 By Alvin.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

</div>
</body>
</html>