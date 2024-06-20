<?php
include 'koneksi.php';

$id_pel = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];

$query = mysqli_query($konek, "INSERT INTO pelanggan
             VALUES('$id_pel', '$nama', '$no_hp')")
    or die(mysqli_error($konek));

if ($query) {
    header("location: pesanan.php");
} else {
    echo "Proses Input Gagal";
}
