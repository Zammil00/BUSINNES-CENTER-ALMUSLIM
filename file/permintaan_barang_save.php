<?php
include'koneksi.php';
 $no_permintaan = $_POST['no_permintaan'];  
 $tgl_permintaan = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
 $nama_pemasok = $_POST['nama_pemasok'];
 
 $query = "insert into permintaan set no_permintaan='$no_permintaan', tgl_permintaan='$tgl_permintaan', nama_pemasok='$nama_pemasok'";  
 $sql = mysqli_query($conn, $query);  
 if($sql){  
 echo "<script language='JavaScript'>alert('Data Telah Tersimpan'); document.location='index.php?file=permintaan_barang_form'</script>";  
 }else{  
 echo "<script language='JavaScript'>alert('Data Belum Tersimpan'); document.location='index.php?file=permintaan_barang_form'</script>";  
 }
 ?>

