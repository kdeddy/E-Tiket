<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Dashboard | Speedboat Page</title>
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
            <h1>Pelabuhan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Pelabuhan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">Pelabuhan</h3>
              <div class="col-12">
                <img src="{{ asset('Lte/dist/img/pelabuhan1.jpg') }}" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="{{ asset('Lte/dist/img/pelabuhan1.jpg') }}" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="{{ asset('Lte/dist/img/pelabuhan2.jpg') }}" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="{{ asset('Lte/dist/img/pelabuhan3.jpg') }}" alt="Product Image"></div>
              </div>
            </div>

            <div class="col-12 col-sm-6">
              <h3 class="my-3">Pelabuhan Sanur</h3>
              <p>Pelabuhan Denpasar Sanur - Nusa Penida</p>

              <h4>Available Speedboat</h4>

              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  Caspla
                  <br>
                  <small>08.00 | 10.00</small>
                </label><label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  Caspla
                  <br>
                  <small>08.00 | 10.00</small>
                </label>
              </div>

              <div class="bg-gray py-2 px-3 mt-4">
                <h3 class="mb-0">
                  Jam Operasional
                </h3>
                <h4 class="mt-0">
                  <small>08.00 - 19.00 WITA</small>
                </h4>
              </div>

              <div class="mt-4">
                 <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-id-badge fa-lg mr-2"></i> 
                  Contact Info
                </div>
              </div>

            </div>
          </div>
          
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">Pelabuhan</h3>
              <div class="col-12">
                <img src="{{ asset('Lte/dist/img/pelabuhan1.jpg') }}" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="{{ asset('Lte/dist/img/pelabuhan1.jpg') }}" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="{{ asset('Lte/dist/img/pelabuhan2.jpg') }}" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="{{ asset('Lte/dist/img/pelabuhan3.jpg') }}" alt="Product Image"></div>
              </div>
            </div>

            <div class="col-12 col-sm-6">
              <h3 class="my-3">Pelabuhan Sanur</h3>
              <p>Pelabuhan Denpasar Sanur - Nusa Penida</p>

              <h4>Available Speedboat</h4>

              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  Caspla
                  <br>
                  <small>08.00 | 10.00</small>
                </label><label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  Caspla
                  <br>
                  <small>08.00 | 10.00</small>
                </label>
              </div>

              <div class="bg-gray py-2 px-3 mt-4">
                <h3 class="mb-0">
                  Jam Operasional
                </h3>
                <h4 class="mt-0">
                  <small>08.00 - 19.00 WITA</small>
                </h4>
              </div>

              <div class="mt-4">
                 <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-id-badge fa-lg mr-2"></i> 
                  Contact Info
                </div>
              </div>

            </div>
          </div>
          
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
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
<script src="{{ asset ('Lte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('Lte/dist/js/demo.js') }}"></script>

</body>
</html>
