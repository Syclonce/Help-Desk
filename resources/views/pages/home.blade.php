<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

  <style>
    .welcome-text {
      margin: 2rem auto; /* Menjaga margin tetap sama */
      text-align: center; /* Memastikan teks berada di tengah */
      color: #517bd6; /* Warna teks */
      text-shadow: 1px 1px 2px #6c757d; /* Menambahkan bayangan untuk teks */
      font-family: 'Arial', sans-serif; /* Mengubah jenis font */
      animation: glow 1.5s ease-in-out infinite alternate; /* Animasi "glow" */
    }

    @keyframes glow {
      from {
        text-shadow: 0 0 10px #007bff, 0 0 20px #007bff, 0 0 30px #007bff, 0 0 40px #007bff;
      }
      to {
        text-shadow: 0 0 20px #007bff, 0 0 30px #007bff, 0 0 40px #007bff, 0 0 50px #007bff, 0 0 60px #007bff;
      }
    }
  </style>

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <form class="form-inline ml-0 ml-md-3">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </ul>
      </div>
    </div>


  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-5">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">

        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline  text-center">
                <div class="card-header">
                  <h5 class="m-2 text-center welcome-text">Welcome To Suppport Helpdesk</h5>
                </div>
                <div class="card-body my-4">
                <div class="row mb-4">
                   @guest
                    <div class="col mb-2">
                      <a href="{{ url('login') }}" style="text-decoration: none; color: inherit;">
                        <button type="button" class="btn btn-block btn-default btn-lg">
                            <i class="fa-solid fa-address-card"></i>
                            <br>
                            <span class="button-text">Login</span>
                        </button>
                      </a>
                    </div>
                    <div class="col">
                        <a href="{{ url('ticket') }}" style="text-decoration: none; color: inherit;">
                            <button type="button" class="btn btn-block btn-default btn-lg">
                                <i class="fa-solid fa-ticket"></i>
                                <br>
                                <span class="button-text">Ticket</span>
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ url('myticket') }}" style="text-decoration: none; color: inherit;">
                            <button type="button" class="btn btn-block btn-default btn-lg">
                                <i class="fa-regular fa-newspaper"></i>
                                <br>
                                <span class="button-text">My Ticket</span>
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-block btn-default btn-lg">
                          <i class="fa-regular fa-circle-question"></i>
                            <br>
                            <span class="button-text">Knowledge </span>
                        </button>
                    </div>
                    @endguest
                    @auth
                    <div class="col">
                        <a href="{{ url('ticket') }}" style="text-decoration: none; color: inherit;">
                            <button type="button" class="btn btn-block btn-default btn-lg">
                                <i class="fa-solid fa-ticket"></i>
                                <br>
                                <span class="button-text">Ticket</span>
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <a href="{{ url('myticket') }}" style="text-decoration: none; color: inherit;">
                            <button type="button" class="btn btn-block btn-default btn-lg">
                                <i class="fa-regular fa-newspaper"></i>
                                <br>
                                <span class="button-text">My Ticket</span>
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-block btn-default btn-lg">
                          <i class="fa-regular fa-circle-question"></i>
                            <br>
                            <span class="button-text">Knowledge </span>
                        </button>
                    </div>
                    @endauth
                  </div>
                </div>
              </div>

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?= date('Y'); ?> Dev .</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>
