<?php

function getData($sql)
{
  global $koneksi;

  $result = mysqli_query($koneksi, $sql);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function uploadimg($url = null)
{
  $namafile = $_FILES['image']['name'];
  $ukuran = $_FILES['image']['size'];
  $temp = $_FILES['image']['tmp_name'];

  // validasi gambar yang boleh di upload
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
  $ekstensiGambar = explode('.', $namafile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    if ($url != null) {
      echo '<script>
            alert("file yang anda upload bukan gambar, data gagal diupdate");
            document.location.href = "' . $url . '";
            </script>';
      die();
    } else {
      echo '<script>alert("Maaf file yang anda upload bukan gambar");</script>';
      return false;
    }
  }

  //validasi ukuran gambar max 1MB
  if ($ukuran > 5000000) {
    if ($url != null) {
      echo '<script>
            alert("Ukuran gambar melebihi 1MB, data gagal diupdate");
            document.location.href = "' . $url . '";
            </script>';
      die();
    } else {
      echo '<script>alert("Maaf ukuran gambar melebihi 1 MB");</script>';
      return false;
    }
  }

  $namaFileBaru = rand(10, 1000) . '-' . $namafile;
  move_uploaded_file($temp, '../assets/image/' . $namaFileBaru);
  return $namaFileBaru;
}

function userLogin()
{
  $userActive = $_SESSION['ssUserPOS'];
  $dataUser = getData("SELECT * FROM user WHERE username = '$userActive'")[0];
  return $dataUser;
}
