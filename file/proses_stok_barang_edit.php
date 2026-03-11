<?php 
 $kd_barang = $_POST['kd_barang'];  
 $nm_barang = $_POST['nm_barang'];
 $hrg_stok = $_POST['hrg_stok'];
 $jml_stok = $_POST['jml_stok'];
   
//koneksi database  
include"koneksi.php";  
$query = "update stok_barang set kd_barang='$kd_barang', nm_barang='$nm_barang', hrg_stok='$hrg_stok', jml_stok='$jml_stok' where kd_barang='$kd_barang'";  
$hasil = mysqli_query($conn, $query);  
if($hasil){  
 echo "<script language='JavaScript'>alert('Data Telah Teredit'); document.location='index.php?file=stok_barang_view'</script>";  
 }else{  
 echo "<script language='JavaScript'>alert('Data Belum Teredit'); document.location='index.php?file=stok_barang_view'</script>";  
 }  
?> 

