<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="base_url" content="<?php echo base_url() ?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title><?php echo $judul ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="icon" href="<?php echo base_url('assets/favicon.ico') ?>" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/lte/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/lte/') ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/lte/') ?>bower_components/select2/dist/css/select2.min.css">
  <!-- nestable -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/nestable2/dist/jquery.nestable.min.css">
  <!-- icon picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/node_modules/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/lte/') ?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/lte/') ?>dist/css/skins/skin-blue.min.css">
  <!-- custom css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dashboard-style.css">
  
  <!-- jQuery 3 -->
  <script src="<?php echo base_url('assets/vendor/lte/') ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
  <!-- sweetalert -->
  <script src="<?php echo base_url('assets/vendor/sweetalert/sweetalert.min.js') ?>"></script>
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><i class="fa fa-calendar"></i></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b><i class="fa fa-calendar"></i> <?php echo date("d-m-Y") ?></b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <i class="fa fa-bars"></i>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <i class="fa fa-user fa-lg"></i>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $user['nama_user'] ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url('assets/img/user/') . $user['gbr_user'] ?>" onerror="this.onerror=null; this.src='<?php echo base_url('assets/img/'.$user['gbr_user']); ?>'" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $user['nama_user'] ?>
                    <small><?php echo $this->session->userdata('level'); ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url('profil') ?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <?php
    include_once('sidebar.php');
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <section class="content-header">
        <h1>
          <?php echo $judul ?>
        </h1>
      </section>

      <section class="content container-fluid">

       <?php if ($error = $this->session->flashdata('error')): ?>
        <span class="alert-error hidden d-error"><?php echo $error ?></span>
      <?php endif ?>
      <?php if ($warning = $this->session->flashdata('warning')): ?>
        <span class="alert-warning hidden d-warning"><?php echo $warning ?></span>
      <?php endif ?>
      <?php if ($success = $this->session->flashdata('success')): ?>
        <span class="alert-success hidden d-success"><?php echo $success ?></span>
      <?php endif ?>
      <?php if ($success_admin = $this->session->flashdata('success_cs_admin')): ?>
        <span class="alert-success hidden d-successadmin"><?php echo $success_admin ?></span>
      <?php endif ?>
      <?php if ($message = $this->session->flashdata('message')): ?>
        <span class="alert-message hidden d-message"><?php echo $message ?></span>
      <?php endif ?>

      <!-- custom -->
      <script src="<?php echo base_url('assets/js/alert.js') ?>"></script>
