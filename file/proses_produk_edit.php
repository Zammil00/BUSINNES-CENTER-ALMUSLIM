<?php 
// Include connection
include_once "koneksi.php";

if (!$conn) {
    die("Koneksi Error: " . mysqli_connect_error());
}

// Get POST data
$kd_barang = isset($_POST['kd_barang']) ? mysqli_real_escape_string($conn, $_POST['kd_barang']) : '';
$nm_barang = isset($_POST['nm_barang']) ? mysqli_real_escape_string($conn, $_POST['nm_barang']) : '';
$jlh_brg = isset($_POST['jlh_brg']) ? mysqli_real_escape_string($conn, $_POST['jlh_brg']) : '';
$hrg_barang = isset($_POST['hrg_barang']) ? mysqli_real_escape_string($conn, $_POST['hrg_barang']) : '';

if (empty($kd_barang)) {
    echo "<script>alert('Error: Kode Barang tidak ditemukan.'); window.location='index.php?file=produk_view';</script>";
    exit;
}

// Handle Image Upload
$foto_baru = $_FILES['picture']['name']; 
$fileSize = $_FILES['picture']['size']; 
$fileError = $_FILES['picture']['error']; 

$update_foto_query = "";
if ($fileSize > 0 && $fileError == 0) { 
    // Create unique filename
    $ext = pathinfo($foto_baru, PATHINFO_EXTENSION);
    $foto_name = time() . "_" . preg_replace("/[^a-zA-Z0-9]/", "_", pathinfo($foto_baru, PATHINFO_FILENAME)) . "." . $ext;
    
    // Path relative to index.php (execution start)
    $target_dir = "uploads/foto/";
    $target_path = $target_dir . $foto_name;
    
    // Check if directory exists, if not create it
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    if (move_uploaded_file($_FILES['picture']['tmp_name'], $target_path)) {
        $update_foto_query = ", foto='$foto_name'";
    } else {
        echo "<script>alert('Peringatan: Gagal memindahkan file ke $target_path. Periksa izin folder.');</script>";
    }
}

$query = "UPDATE produk SET 
            nm_barang='$nm_barang', 
            jlh_brg='$jlh_brg', 
            hrg_barang='$hrg_barang' 
            $update_foto_query 
          WHERE kd_barang='$kd_barang'";  

$hasil = mysqli_query($conn, $query);  

if($hasil){  
    echo "<script>alert('Data Produk Berhasil Diperbarui'); window.location='index.php?file=produk_view';</script>";
} else {  
    echo "<script>alert('Gagal Update Database: " . mysqli_error($conn) . "'); window.location='index.php?file=produk_view';</script>";
}
?>


