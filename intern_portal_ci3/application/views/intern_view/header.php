<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>
  <!-- Style -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="<?= base_url(); ?>css/ero-main.css" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Erovoutika Logo -->
  <link rel="icon" href="<?= base_url(); ?>dist/img/beta-logo.png" type="image/gif">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- SmartWizard -->
  <link href="<?= base_url(); ?>plugins/smart-wizard/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- Sweet Alert -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/toastr/toastr.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/dropzone/min/dropzone.min.css">
  <!-- clock -->
  <link rel="stylesheet" href="<?= base_url(); ?>css/ero-clock.css">
  <!-- calendar -->
  <link rel="stylesheet" href="<?= base_url(); ?>css/ero-calendar.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/css/adminlte.min.css">


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');

  
    .profile {
      font-weight: 800;
    }

    .profile-user-img {
      border: 3px solid #0978e6;
    }

    .file {
      visibility: hidden;
      position: absolute;
    }

    .badge {
      display: inline-block;
      padding: .35em .8em;
      font-size: 75%;
      font-weight: 700;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25rem;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .text-muted-notice {
      color: #a2adb7 !important;
      text-align: center;

    }

    .card-notice {
      height: 150px;
      padding: 4.5em;

    }



    @media screen and (max-width: 375px) {
      table {
        border: 0;
      }

      table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      table td {
        display: block;
        font-size: .8em;
        text-align: right;
      }

      table td::before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 1em;
      }

      table td:last-child {
        border-bottom: 0;
      }
    }

    @media screen and (max-width: 320px) {
      table {
        border: 0;
      }

      table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      table td {
        display: block;
        font-size: .8em;
        text-align: right;
      }

      table td::before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;

      }

      table td:last-child {
        border-bottom: 0;
      }
    }



    .clock2 {
      position: relative;
      color: #212529;
      font-size: 30px;
      font-family: Orbitron;
      letter-spacing: 7px;
      text-align: center;
    }



    @media screen and (max-width: 1300px) {
      .clock2 {
        text-align: left;
        font-size: 25px;
      }

      .c {
        text-align: left;
      }
    }

    @media screen and (max-width: 1220px) {
      .clock2 {
        text-align: left;
        font-size: 18px;
      }

      .c {
        text-align: left;
      }
    }

    @media screen and (max-width: 1003px) {
      .clock2 {
        text-align: left;
        font-size: 18px;
      }

      .c {
        text-align: left;
      }
    }

    @media screen and (max-width: 990px) {
      .clock2 {
        text-align: left;
        font-size: 35px;
      }

      .c {
        text-align: left;
      }
    }

    @media screen and (max-width: 767px) {
      .clock2 {
        text-align: left;
        font-size: 25px;
      }

      .c {
        text-align: center;
      }
    }

    @media screen and (max-width: 320px) {
      .clock2 {
        text-align: center;
      }

      .c {
        text-align: center;
      }
    }

    @media screen and (max-width: 375px) {
      .clock2 {
        text-align: center;
      }

      .c {
        text-align: center;
      }
    }

    @media screen and (max-width: 425px) {
      .c {
        text-align: center;
      }
    }
  </style>
</head>

<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="<?= base_url(); ?>dist/img/beta-logo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="<?= base_url(); ?>dist/img/beta-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text" style="font-size: smaller;"><strong>Erovoutika | Internportal</strong></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url(); ?>intern_photo/<?= ($USER_DATA->col_imag_name == NULL) ? 'default-profile.png' : $USER_DATA->col_imag_name ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="" class="d-block" style="white-space: break-spaces;"><?= (!$USER_DATA->col_frst_name && !$USER_DATA->col_last_name) ? $USER_DATA->col_emai_addr : '' . $USER_DATA->col_frst_name . ' ' . $USER_DATA->col_last_name; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="" class="nav-link disabled" hidden>
                <i class="nav-icon fas fa-home"></i>
                <p class="p1">Home</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>Internview/profile/" class="nav-link" id="profile">
                <i class="nav-icon fas fa-user"></i>
                <p class="p1">Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Internview/attendance/" class="nav-link" id="attendance">
                <i class="nav-icon fas fa-flag"></i>
                <p class="p1">Attendance</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link disabled" hidden>
                <i class="nav-icon fas fa-user-friends"></i>
                <p class="p1">Group</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link disabled" hidden>
                <i class="nav-icon fas fa-tasks"></i>
                <p class="p1">Tasks</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link disabled" hidden>
                <i class="nav-icon fas fa-headset"></i>
                <p class="p1">Support</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('logout') ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p class="p1">Sign Out</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <div class="content-header">

        <div class="container-fluid">

          <div class="row mb-2">

            <div class="col-sm-6">

              <h3 class="m-0" id="active_page"><?= $page ?></h3>

            </div>


          </div>


        </div>


      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">

        <div class="container-fluid">

          <!-- Main row -->
          <!-- <div class="row"> -->