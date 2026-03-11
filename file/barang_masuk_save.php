<?php
include'koneksi.php';
 $no_permintaan = $_POST['no_permintaan']; 
 $tgl_masuk = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
 $kd_barang = $_POST['kd_barang'];
 $nm_barang = $_POST['nm_barang'];
 $nama_pemasok = $_POST['nama_pemasok']; 
 $jml_Barang = $_POST['jml_Barang'];
 $total_harga = $_POST['total_harga'];
  
 $query = "insert into barang_masuk set no_permintaan='$no_permintaan', tgl_masuk='$tgl_masuk', kd_barang='$kd_barang', nm_barang='$nm_barang', nama_pemasok='$nama_pemasok', jml_Barang='$jml_Barang', total_harga='$total_harga'";  
 $sql = mysqli_query($conn, $query);  
 if($sql){  
 echo "<script language='JavaScript'>alert('Data Telah Tersimpan'); document.location='index.php?file=barang_masuk_form'</script>";  
 }else{  
 echo "<script language='JavaScript'>alert('Data Belum Tersimpan'); document.location='index.php?file=barang_masuk_form'</script>";  
 }
 ?>


