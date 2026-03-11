<?php
include "koneksi.php";
$ip = $_SERVER['REMOTE_ADDR'];
$tgl = date("Y-m-d");

// Cek apakah IP sudah ada hari ini
$query = "SELECT * FROM iphits WHERE ip='$ip' AND tanggal='$tgl'";
$runquery = mysqli_query($conn, $query);

if(mysqli_num_rows($runquery) == 0){
    $query = "INSERT INTO iphits VALUES('$ip','$tgl')";
    mysqli_query($conn, $query);
}

// Hitung total pengunjung unik
$select = "SELECT DISTINCT ip, tanggal FROM iphits";
$runselect = mysqli_query($conn, $select);
$hit = mysqli_num_rows($runselect);

// Styling Output
echo '<div style="font-family: \'Plus Jakarta Sans\', sans-serif;">';
echo '<div style="font-size: 42px; font-weight: 800; color: #fff; margin-bottom: 5px; text-shadow: 0 2px 10px rgba(0,0,0,0.2);">' . number_format($hit) . '</div>';
echo '<div style="font-size: 14px; color: rgba(255,255,255,0.8); text-transform: uppercase; letter-spacing: 2px; font-weight: 600;">Total Visitors</div>';
echo '</div>';
?>
