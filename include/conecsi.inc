<?php

$host="localhost";
$user="root";
$password="";
$database="bc";
$connect=mysqli_connect($host, $user, $password);
if (! $connect)
{
echo "Koneksi Database Gagal";
}
//memilih database pada server
mysqli_select_db($conn, $database)
or die ("Database tidak ditemukan, silahkan dibuat terlebih dahulu ");
?>