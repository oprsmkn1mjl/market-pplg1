<?php
date_default_timezone_set('Asia/Jakarta');

$host = 'localhost';
$user = 'root';
$pass = '';
<<<<<<< HEAD
$dbname = 'db_codinglinepos';
=======
$dbname = 'market-pplg1';
>>>>>>> b8c4b7eb39d89664ee827d037073fdd741590b6b

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

// if (mysqli_connect_errno()) {
//     echo "gagal koneksi ke database";
//     exit();
// } else {
// echo "berhasil koneksi ke database";
// }

<<<<<<< HEAD
$main_url = 'http://localhost/codingline-pos/';
=======
$main_url = "http://localhost/market-pplg1/";
>>>>>>> b8c4b7eb39d89664ee827d037073fdd741590b6b
