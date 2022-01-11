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
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url(); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Erovoutika Logo -->
  <link rel="icon" href="<?= base_url(); ?>dist/img/beta-logo.png" type="image/gif">
  <!-- SmartWizard -->
  <link href="<?= base_url(); ?>plugins/smart-wizard/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
  <!-- Sweet Alert -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">


  <style>
    /* view_quota_limit */
    @media screen and (max-width: 1000px) {
      #view_quota_limit table {
        border: 0;
      }

      #view_quota_limit table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      #view_quota_limit table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      #view_quota_limit table td {
        display: block;
        text-align: right;
      }

      #view_quota_limit table td::before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;

      }

      #view_quota_limit table td:last-child {
        border-bottom: 0;
      }

      #view_quota_limit span.badge.bg-warning {
        white-space: break-spaces;
      }

      #view_rejected span.badge.bg-danger {
        white-space: break-spaces;
      }
    }

    /* view_rejected */
    @media screen and (max-width: 1000px) {
      #view_rejected table {
        border: 0;
      }

      #view_rejected table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      #view_rejected table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      #view_rejected table td {
        display: block;
        text-align: right;
      }

      #view_rejected table td::before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;

      }

      #view_rejected table td:last-child {
        border-bottom: 0;
      }

      #view_rejected span.badge.bg-danger {
        white-space: break-spaces;
      }
    }

    /* view_pending_request */
    @media screen and (max-width: 1000px) {
      #view_pending_request table {
        border: 0;
      }

      #view_pending_request table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      #view_pending_request table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      #view_pending_request table td {
        display: block;
        text-align: right;
      }

      #view_pending_request table td::before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;

      }

      #view_pending_request table td:last-child {
        border-bottom: 0;
      }

      #view_pending_request span.badge.bg-danger {
        white-space: break-spaces;
      }
    }

    /* view_failed */
    @media screen and (max-width: 1000px) {
      #view_failed table {
        border: 0;
      }

      #view_failed table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      #view_failed table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      #view_failed table td {
        display: block;
        text-align: right;
      }

      #view_failed table td::before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;

      }

      #view_failed table td:last-child {
        border-bottom: 0;
      }

      #view_failed span.badge.bg-danger {
        white-space: break-spaces;
      }
    }

    /* view_reschedule */
    @media screen and (max-width: 1000px) {
      #view_reschedule table {
        border: 0;
      }

      #view_reschedule table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      #view_reschedule table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      #view_reschedule table td {
        display: block;
        text-align: right;
      }

      #view_reschedule table td::before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;

      }

      #view_reschedule table td:last-child {
        border-bottom: 0;
      }

      #view_reschedule span.badge.bg-danger {
        white-space: break-spaces;
      }
    }

    /* view_for_interview_onboarding */
    @media screen and (max-width: 1000px) {
      #view_for_interview_onboarding table {
        border: 0;
      }

      #view_for_interview_onboarding table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      #view_for_interview_onboarding table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      #view_for_interview_onboarding table td {
        display: block;
        text-align: right;
      }

      #view_for_interview_onboarding table td::before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;

      }

      #view_for_interview_onboarding table td:last-child {
        border-bottom: 0;
      }

      #view_for_interview_onboarding span.badge.bg-danger {
        white-space: break-spaces;
      }
    }

    /* view_hired_intern */
    @media screen and (max-width: 1000px) {
      #view_hired_intern table {
        border: 0;
      }

      #view_hired_intern table thead {
        border: none;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
      }

      #view_hired_intern table tr {
        border-bottom: 3px solid #ddd;
        display: block;
        margin-bottom: .625em;
      }

      #view_hired_intern table td {
        display: block;
        text-align: right;
      }

      #view_hired_intern table td::before {
        content: attr(data-label);
        float: left;
        font-weight: bold;
        text-transform: uppercase;

      }

      #view_hired_intern table td:last-child {
        border-bottom: 0;
      }

      #view_hired_intern span.badge.bg-danger {
        white-space: break-spaces;
      }
    }





    .card-title {
      font-weight: 900;
    }

    .profile-user-img {
      border: 3px solid #0978e6;
    }

    .badge {
      display: inline-block;
      padding: .55em .8em;
      font-size: 90%;
      font-weight: 600;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25rem;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .btn-re {
      display: inline-block;
      font-weight: 400;
      text-align: center;
      vertical-align: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      border: 1px solid transparent;
      padding: .375rem .75rem;
      font-size: 0.8rem;
      line-height: 1.5;
      border-radius: .25rem;
      transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .table td,
    .table th {
      padding: .75rem;
      vertical-align: middle;
      border-top: 1px solid #dee2e6;
    }

    .card-header {
      background-color: transparent;
      border-bottom: 1px solid rgba(0, 0, 0, .125);
      padding: .75rem 1.25rem;
      position: relative;
    }

    .settings {
      font-size: 12px !important;
      color: #333333;
    }

    .list-group-item {
      border: none !important;
    }

    input.upload {
      right: 0;
      margin: 0;
      bottom: 0;
      padding: 0;
      opacity: 0;
      outline: none;
      cursor: inherit;
      position: absolute;
      width: 15px;
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
            <img src="<?= base_url(); ?>intern_photo/<?= ($USER_DATA->col_imag_name == NULL) ? 'default-profile.png' : $USER_DATA->col_imag_name  ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="" class="d-block" style="white-space: break-spaces;" id="account_login"><?= (!$USER_DATA->col_frst_name && !$USER_DATA->col_last_name) ? $USER_DATA->col_emai_addr : '' . $USER_DATA->col_frst_name . ' ' . $USER_DATA->col_last_name; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?= base_url(); ?>Adminview/recruitment_list/" class="nav-link" id="recruitment">
                <i class="nav-icon fas fa-user-check"></i>
                <p class="p1">Recruitment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Adminview/onboarding_list/" class="nav-link" id="onboarding">
                <i class="nav-icon fa fa-users"></i>
                <p class="p1">Onboarding</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Adminview/attendance/" class="nav-link" id="attendance">
                <i class="nav-icon fas fa-flag"></i>
                <p class="p1">Daily Attendance</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Adminview/settings/" <?= ($USER_DATA->col_user_type == 'HR') ? 'class="nav-link disabled" hidden' : 'class="nav-link"' ?> id="settings">
                <i class="nav-icon fas fa-cogs"></i></i>
                <p class="p1">Settings</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link disabled" hidden>
                <i class="nav-icon fas fa-user-friends"></i>
                <p class="p1">Groups</p>
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
              <a href="<?= base_url('logout') ?>" class="nav-link" id="logout">
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

            <div class="col-sm-6 col-lg-12">
              <div class="row">
                <div class="col-lg-6 col-sm-12">
                  <h3 class="m-0" id="active_page"><?= $page ?></h3>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <div class="d-flex justify-content-end">
                        <span class="clock2" id="hours">00</span><span class="clock2" id="minutes">00</span><span class="clock2" id="seconds">00</span> <br>
                        <span class="clock2" id="phase">00</span>
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                      <div class="d-flex justify-content-end">
                        <time class="icon getDate">
                          <em id="today"></em>
                          <strong id="month"></strong>
                          <span id="day"></span>
                          <span id="year"></span>
                        </time>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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