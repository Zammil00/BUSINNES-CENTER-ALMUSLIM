<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "bc";

$conn = mysqli_connect($hostmysql, $username, $password, $database);
if (!$conn) die ("Koneksi gagal: " . mysqli_connect_error());
?>


