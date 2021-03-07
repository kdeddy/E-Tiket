<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | User Speedboat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('Lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('Lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
   <!-- Navbar -->
    @include('adminDashboard/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   @include('adminDashboard/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('create-user') }}"><i class="fas fa-plus"></i> Tambah Data
                </a>
              </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
 <!-- Begin Page Content -->
   <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data User</h6>
    </div>

    <div class="card shadow">
        <form method="POST" enctype="multipart/form-data" action="#">
            @csrf
            <div class="row card-header">
                <div class="col">
                    <label for="nik" class="font-weight-bold text-dark">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="Masukan NIK" name="nik">
                </div>
                <div class="col">
                    <label for="nama" class="font-weight-bold text-dark">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                </div>
            </div>

            <div class="form-group card-header ">
                <label for="alamat" class="font-weight-bold text-dark">Alamat</label>
                <input type="text" class="form-control" id="alamat"  placeholder="Masukan Alamat" name="alamat">
            </div>

            <div class="row card-header">
                <div class="col">
                    <label for="nohp" class="font-weight-bold text-dark">No Hp</label>
                    <input type="text" class="form-control" id="nohp" placeholder="Masukan No Telp" name="nohp">
                </div>
                <div class="col">
                    <label for="email" class="font-weight-bold text-dark">E-Mail</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukan E-Mail" name="email">
                </div>
            </div>

            <div class="form-group card-header ">
                <label for="password" class="font-weight-bold text-dark">Password</label>
                <input type="password" class="form-control" id="password"  placeholder="Masukan Password" name="password">
            </div>

            <div class="form-group card-header">
                <label for="InputName" class="font-weight-bold text-dark">Role/Jabatan</label>
                    <br><input type="radio" name="role" value="Customer"> Customer &nbsp &nbsp
                    <input type="radio" name="role" value="Direktur"> Direktur &nbsp &nbsp
                    <input type="radio" name="role" value="Admin"> Admin &nbsp &nbsp
                    <input type="radio" name="role" value="SAdmin"> Super Admin
            </div>

            <div class="form-group card-header">
                <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Add Data</button>
            </div>
        </form>
    </div>
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('adminDashboard/footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('Lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('Lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('Lte//dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('Lte/dist/js/demo.js') }}"></script>
</body>
</html>
