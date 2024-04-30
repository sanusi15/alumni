<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Wisuda</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= site_url('') ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= site_url('') ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= site_url('') ?>assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= site_url('') ?>assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('') ?>assets/admin/dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('dashboard'); ?>" class="nav-link">Dashboard</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= site_url('') ?>assets/img/logo_smk.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">WEB ALUMNI | <?= $this->session->userdata('username'); ?></a>
                    </div>
                </div>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info text-center">
                        <a href="#" class="d-block">SMK N 1 ANYER</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="<?= base_url('dashboard'); ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '';  ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="<?= base_url('formData'); ?>" class="nav-link <?= ($this->uri->segment(1) === 'formData' ? 'active' : '')  ?>">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Form Data
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="<?= base_url('mhsRegist'); ?>" class="nav-link <?= ($this->uri->segment(1) === 'mhsRegist' ? 'active' : '')  ?>">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Registrasi Siswa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="<?= base_url('jurusan'); ?>" class="nav-link <?= ($this->uri->segment(1) === 'jurusan' ? 'active' : '')  ?>">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Jurusan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="<?= base_url('tahun'); ?>" class="nav-link <?= ($this->uri->segment(1) === 'tahun' ? 'active' : '')  ?>">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Tahun Lulus
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="<?= base_url('report'); ?>" class="nav-link <?= ($this->uri->segment(1) === 'report' ? 'active' : '')  ?>">
                                <i class="nav-icon fas fa-print"></i>
                                <p>
                                    Report
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="<?= base_url('signOut'); ?>" class="nav-link <?= ($this->uri->segment(1) === '' ? 'active' : '')  ?>">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    LogOut
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>