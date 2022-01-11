<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <!-- Style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="<?= base_url(); ?>css/ero-main.css" rel="stylesheet">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>dist/css/adminlte.min.css">

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
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/summernote/summernote-bs4.min.css">
    <!-- Froala -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.6/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <style>
        
        .file {
            visibility: hidden;
            position: absolute;
        }

        .sw>.tab-content {
            position: relative;
            overflow: auto
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #0d6efd;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }

        .ps-3 {
            padding-left: 1rem !important;
        }

        .user-box {
            display: flex;
            align-items: center;
            height: 60px;
            margin-left: 1rem;
            border-left: 1px solid #f0f0f0;
        }

        .user-img {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 0px solid #e5e5e5;
            padding: 0px;
        }

        .user-info .user-name {
            font-size: 15px;
            font-weight: 500;
            color: #413c3c;
        }

        .user-info .designattion {
            font-size: 13px;
            color: #a9a8a8;
        }

        .user-info .designattion {
            font-size: 13px;
            color: #a9a8a8;
        }

        .dropdown-toggle-nocaret:after {
            display: none
        }


        .topbar .navbar .dropdown-menu::after {
            content: '';
            width: 13px;
            height: 13px;
            background: #ffff;
            position: absolute;
            top: -6px;
            right: 16px;
            transform: rotate(45deg);
            border-top: 1px solid #ddd;
            border-left: 1px solid #ddd;
        }

        .dropdown-large .dropdown-menu .dropdown-item {
            padding: .50rem 1.3rem;
            border-bottom: 1px solid #ededed;
        }

        .dropdown-large .dropdown-menu .dropdown-item {
            padding: .50rem 1.3rem;
            border-bottom: 1px solid #ededed;
        }

        .user-box .dropdown-menu i {
            vertical-align: middle;
            margin-right: 10px;
        }

        .dropdown-menu {
            -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .15);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .15);
            border: 0px solid #e9ecef;
            font-size: 14px;
        }

        .topbar .navbar .dropdown-menu {
            -webkit-animation: .6s cubic-bezier(.25, .8, .25, 1) 0s normal forwards 1 animdropdown;
            animation: .6s cubic-bezier(.25, .8, .25, 1) 0s normal forwards 1 animdropdown;
        }

        @media screen and (max-width: 620px) {
            .topbar .navbar .dropdown-menu::after {
                display: none;
            }

            .topbar .navbar .dropdown {
                position: static !important;
            }

            .topbar .navbar .dropdown-menu {
                width: 100% !important;
            }
        }

        @media screen and (max-width: 767px) {
            .user-box .user-info {
                display: none;
            }
        }

        .fr-toolbar {
            border-top: 1px solid #ccc !important;
            z-index: 0 !important;
            border-radius: 10px 10px 0px 0px !important;
        }

        .fr-wrapper {
            border-radius: 0px 0px 10px 10px !important;
            font-size: 14px !important;
            margin-bottom: 20px !important;
        }

        .fr-command {
            margin-top: 5px !important;
            margin-bottom: 5px !important;
        }

        .fr-counter {
            margin-right: 5px !important;
            border: none !important;
        }

        .fr-counter::before {
            content: 'Characters: ';
            font-family: inter, sans-serif;
        }

        #froala-editor {
            border-radius: 10px !important;
        }






        table {
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        table tr {
            padding: .35em;
        }

        table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        table th {
            text-transform: uppercase;
        }

        @media screen and (max-width: 768px) {

            table {
                border: 0;
                border: 1px solid #ccc;
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
                border: 1px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                /* text-align: right; */
                text-align: left;
            }

            table td::before {
                content: attr(data-label);
                /* float: left; */
                float: right;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }

        @media screen and (max-width: 378px) {


            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                /* text-align: right; */
                text-align: left;
            }

            table td::before {
                content: attr(data-label);
                /* float: left; */
                float: right;
                font-weight: bold;
                text-transform: uppercase;
                font-size: .9em;
                padding: 0;
                /* .text-nowrap {
                    white-space: nowrap !important;
                } */
            }

        }

        @media screen and (max-width: 320px) {
            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .60em;
                /* text-align: right; */
                text-align: left;
            }

        }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?= base_url(); ?>Internview/intern/" class="navbar-brand">
                    <img src="<?= base_url(); ?>dist/img/beta-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light"><strong>Erovoutika | Internportal</strong></span>
                </a>

                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret " data-toggle="dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url(); ?>intern_photo/<?= ($USER_DATA->col_imag_name == TRUE) ? $USER_DATA->col_imag_name: 'default-profile.png' ?>" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0"><?= (!$USER_DATA->col_frst_name && !$USER_DATA->col_last_name) ? $USER_DATA->col_emai_addr : '' . $USER_DATA->col_frst_name . ' ' . $USER_DATA->col_last_name; ?></p>
                            <p class="designattion mb-0">Intern</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" type="button" href="<?= base_url('logout') ?>"><i class="fas fa-sign-out-alt"></i><span>Logout </span></a>

                        </li>
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
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">My Application</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

                <div class="container">