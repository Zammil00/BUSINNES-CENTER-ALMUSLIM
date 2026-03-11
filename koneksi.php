<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "bc";

$conn = mysql_connect($hostmysql, $username, $password);
if (!$conn) die ("Koneksi gagal");
mysql_select_db($database,$conn) or die ("Database tidak ditemukan");
?>
