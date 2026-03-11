<?php
include_once 'koneksi.php';

if (!$conn) {
    die("Error: Koneksi database tidak ditemukan.");
}

$kd_barang  = mysqli_real_escape_string($conn, $_POST['kd_barang']);
$nm_barang  = mysqli_real_escape_string($conn, $_POST['nm_barang']);
$jlh_brg    = mysqli_real_escape_string($conn, $_POST['jlh_brg']);
$hrg_barang = mysqli_real_escape_string($conn, $_POST['hrg_barang']);

$foto_upload = $_FILES['picture']['name'];
$fileSize = $_FILES['picture']['size'];
$fileError = $_FILES['picture']['error'];

$foto_name = "";
if ($fileSize > 0 && $fileError == 0) {
    // Sanitize and make unique
    $foto_name = time() . "_" . basename($foto_upload);
    $target_path = "uploads/foto/" . $foto_name;
    
    if (!move_uploaded_file($_FILES['picture']['tmp_name'], $target_path)) {
        echo "<script>alert('Peringatan: Gagal mengunggah foto.');</script>";
        $foto_name = ""; // Fallback
    }
}

$query = "INSERT INTO produk (kd_barang, nm_barang, jlh_brg, hrg_barang, foto) 
          VALUES ('$kd_barang', '$nm_barang', '$jlh_brg', '$hrg_barang', '$foto_name')";
$sql = mysqli_query($conn, $query);

if ($sql) {
    echo "<script>alert('Data Telah Tersimpan'); window.location='index.php?file=produk_view';</script>";
} else {
    echo "<script>alert('Data Gagal Tersimpan: " . mysqli_error($conn) . "'); window.location='index.php?file=produk_form';</script>";
}
?>
