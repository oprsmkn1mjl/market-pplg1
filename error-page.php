<?php
session_start();
if (!isset($_SESSION['ssLoginPOS'])) {
  header("location: auth/login.php");
  exit();
}

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