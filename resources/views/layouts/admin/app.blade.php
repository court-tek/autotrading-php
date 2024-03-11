<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Realestate App') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url("admin/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Themify Icons -->
  <link rel="stylesheet" href="{{url("admin/css/themify-icons.css")}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url("admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
  {{-- <!-- Theme style --> --}}
  <link rel="stylesheet" href="{{url("admin/css/adminlte.min.css")}}">
  {{-- <!-- Vite style --> --}}
  @vite(['resources/css/app.css', 'resources/js/app.js',  'resources/js/main.js'])
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{url("admin/images/AdminLTELogo.png")}}" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  @include('layouts.admin.header')
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  @include('layouts.admin.sidebar')
  

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.admin.footer')
