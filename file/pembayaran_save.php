<?php
include'koneksi.php';
 $id_bayar = $_POST['id_bayar'];
 $nama_barang = $_POST['nama_barang'];
 $no_rekening = $_POST['no_rekening'];
 $nama_bank = $_POST['nama_bank'];
 $nominal_pembayaran = $_POST['nominal_pembayaran'];
 $id_plg = $_POST['id_plg'];
 
 $query = "insert into pembayaran set id_bayar='$id_bayar', nama_barang='$nama_barang', no_rekening='$no_rekening', nama_bank='$nama_bank', nominal_pembayaran='$nominal_pembayaran', id_plg='$id_plg'";  
 $sql = mysqli_query($conn, $query);  
 if($sql){  
 echo "<script language='JavaScript'>alert('Data Telah Tersimpan'); document.location='index.php?file=pembayaran_form'</script>";  
 }else{  
 echo "<script language='JavaScript'>alert('Data Belum Tersimpan'); document.location='index.php?file=pembayaran_form'</script>";  
 }
 ?>

