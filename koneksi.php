<?php

$hostname = "localhost";
$username = "root";
$pass = "";
$db = "laundry";

$konek=new mysqli($hostname,$username,$pass, $db);
if ($konek->connect_error) 
   {
       die('Maaf koneksi gagal: '. $connect->connect_error);
   } 
?>
