<?php
session_start();
if (!isset($_SESSION['ssLoginPOS'])) {
  header("location: ../auth/login.php");
  exit();
}

require "../config/config.php";
require "../config/functions.php";
require "../models/userModel.php";

$id = $_GET['id'];
$foto = $_GET['foto'];

if (delete($id, $foto)) {
  echo "<script>
    alert('User berhasil di hapus');
    document.location.href = 'data-user.php';
  </script>";
} else {
  echo "<script>
    alert('User gagal di hapus');
    document.location.href = 'data-user.php';
  </script>";
}
