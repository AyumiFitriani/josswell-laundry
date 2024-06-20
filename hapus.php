<?php
include "koneksi.php";
$id_pes = $_GET['id_pesanan'];

$query = mysqli_query($konek, "DELETE FROM nota where id_pesanan=$id_pes");
if ($query) {
    header("location: daftar_pesanan.php");
} else {
    echo "Proses Input gagal";
}