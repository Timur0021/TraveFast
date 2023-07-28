<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TRAVELIST</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="travel-loader"></div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  @include('admin.include.sidebar')
  <div class="content-wrapper">
    <!-- Content Header  -->

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $tiket->title }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.city.index') }}">Назад</a></li>
              <li class="breadcrumb-item active">Редагування Квиток</li>
            </ol>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <tbody>
                <tr>
                    <td>ID</td>
                    <td>{{ $tiket->id }}</td>
                </tr>
                <tr>
                  <td>Назва</td>
                  <td>{{ $tiket->title }}</td>
                </tr>
                <tr>
                  <td>Ціна</td>
                  <td>{{ $tiket->price }}</td>
                </tr>
                <tr>
                  <td>Кількість</td>
                  <td>{{ $tiket->count }}</td>
                </tr>
                <tr>
                    <td>Дата стаорення</td>
                    <td>{{ $tiket->created_at }}</td>
                </tr>
                <tr>
                    <td>Дата оновлення</td>
                    <td>{{ $tiket->updated_at }}</td>
                </tr>
                <button class=" col-1 btn btn-info">
                  <a href="{{ route('admin.tiket.components.edit', $tiket->id) }}">
                    <i class="fas fa-pencil-alt" style="color: #000000;"></i></a>
                </button> 
                <form action="{{ route('admin.tiket.components.delete', $tiket->id) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="col-1 btn btn-danger">
                  <i class="fa fa-trash" style="color: #000000;" role="button"></i>
                  </button>
                </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="#">TRAVELIST</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
</footer>
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
</body>
</html>
