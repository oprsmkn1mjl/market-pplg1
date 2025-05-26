<?php
session_start();
if (!isset($_SESSION['ssLoginPOS'])) {
  header("location: auth/login.php");
  exit();
}

<<<<<<< HEAD
require 'config/config.php';
require 'config/functions.php';

$title = "Error Page - Market PPLG";

require 'template/header.php';
require 'template/navbar.php';
require 'template/sidebar.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>404 Error Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">404 Error Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="error-page">
      <h2 class="headline text-warning"> 404</h2>

      <div class="error-content">
        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

        <p>
          We could not find the page you were looking for.
          Meanwhile, you may <a href="dashboard.php">return to dashboard</a> or try using the search form.
        </p>
      </div>
      <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require 'template/footer.php'; ?>
=======
require "config/config.php";
require "config/functions.php";

$title = "Error Page | Market PPLG 1";

require "template/header.php";
require "template/navbar.php";
require "template/sidebar.php";
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= $main_url; ?>dashboard.php">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= $main_url; ?>user/data-user.php">Users</a></li>
            <li class="breadcrumb-item active">Edit User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <p>Maaf Anda tidak diijinkan mengakses halaman ini</p>
      </div>
    </div>
  </section>
</div>

<?php require "template/footer.php"; ?>
>>>>>>> b8c4b7eb39d89664ee827d037073fdd741590b6b
