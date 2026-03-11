<?php

$host="localhost";
$user="root";
$password="";
$database="percetakan";
$connect=mysql_connect($host,$user,$password);
if (! $connect)
{
echo "Koneksi Database Gagal";
}
//memilih database pada server
mysql_select_db($database)
or die ("Database tidak ditemukan, silahkan dibuat terlebih dahulu ");
?>