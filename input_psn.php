<?php
include 'koneksi.php';

$id_pes = $_POST['id_pesanan'];
$id_pel = $_POST['id_pelanggan'];
$tgl = $_POST['tgl'];
$kec = $_POST['kecepatan'];
$harga = $_POST['harga'];
$berat = $_POST['berat'];
$total = $_POST['total_harga'];

$query = mysqli_query($konek, "INSERT INTO nota
             VALUES('$id_pes', '$id_pel', '$tgl', '$kec', '$harga', '$berat', ' ')")
    or die(mysqli_error($konek));

if ($query) {
    header("location: nota.php");
} else {
    echo "Proses Input Gagal";
}
