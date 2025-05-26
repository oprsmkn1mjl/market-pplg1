<?php
session_start();
if (!isset($_SESSION['ssLoginPOS'])) {
  header("location: ../auth/login.php");
  exit();
}

require "../config/config.php";
require "../config/functions.php";
<<<<<<< HEAD
require "../module/mode-user.php";
=======
require "../models/userModel.php";
>>>>>>> b8c4b7eb39d89664ee827d037073fdd741590b6b

$id = $_GET['id'];
$foto = $_GET['foto'];

if (delete($id, $foto)) {
<<<<<<< HEAD
  echo "
  <script>
    alert('User berhasil dihapus..');
    document.location.href = 'data-user.php';
  </script>
  ";
} else {
  echo "
  <script>
    alert('User gagal dihapus..');
    document.location.href = 'data-user.php';
  </script>
  ";
=======
  echo "<script>
    alert('User berhasil di hapus');
    document.location.href = 'data-user.php';
  </script>";
} else {
  echo "<script>
    alert('User gagal di hapus');
    document.location.href = 'data-user.php';
  </script>";
>>>>>>> b8c4b7eb39d89664ee827d037073fdd741590b6b
}
