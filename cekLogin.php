<?php
session_start();
include "koneksi.php";

$id = $_POST['id_pegawai'];
$pass = $_POST['pass'];

$data = mysqli_query($konek, "SELECT * FROM login WHERE id_pegawai = '$id' and pass = '$pass'")
    or die(mysqli_error($konek));

$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $id;
    $_SESSION['status'] = "login";
    header("location:sindex.php");
} else {
    header("location:login.php?pesan=gagal");
} ?>
?>