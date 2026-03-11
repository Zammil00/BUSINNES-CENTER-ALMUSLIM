<?php
include'koneksi.php';
 $kd_barang = $_POST['kd_barang'];  
 $nm_barang = $_POST['nm_barang'];
 $hrg_stok = $_POST['hrg_stok'];
 $jml_stok = $_POST['jml_stok'];
 
 $query = "insert into stok_barang set kd_barang='$kd_barang', nm_barang='$nm_barang', hrg_stok='$hrg_stok', jml_stok='$jml_stok'";  
 $sql = mysqli_query($conn, $query);  
 if($sql){  
 ?><script language="JavaScript">alert('Data Telah Tersimpan');
document.location='index.php?file=stok_barang_form'</script><?  
 }else{  
 ?><script language="JavaScript">alert('Data Belum Tersimpan'); 
 document.location='index.php?file=stok_barang_form'</script><?  
 }
 ?>
