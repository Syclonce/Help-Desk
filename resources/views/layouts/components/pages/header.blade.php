<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    @if(Auth::check())
        {{ $title }}
    @else
        Helpdesk
    @endif
</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-lite.min.css') }}">
  <!-- Tabel -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <!-- Style -->
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

    .center {
            text-align: center;
    }
    

  </style>

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
