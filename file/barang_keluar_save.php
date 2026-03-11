<?php
include'koneksi.php';
 $no_pemesan = $_POST['no_pemesan']; 
 $kd_barang = $_POST['kd_barang'];
 $nm_barang = $_POST['nm_barang'];
 $jml_barang = $_POST['jml_barang'];
 $total_harga = $_POST['total_harga'];
 $tgl_pemesanan = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
 $nm_pelanggan = $_POST['nm_pelanggan'];
  
 $query = "insert into barang_keluar set no_pemesan='$no_pemesan', kd_barang='$kd_barang', nm_barang='$nm_barang', jml_barang='$jml_barang', total_harga='$total_harga', tgl_pemesanan='$tgl_pemesanan', nm_pelanggan='$nm_pelanggan'";  
 $sql = mysqli_query($conn, $query);  
 if($sql){  
 echo "<script language='JavaScript'>alert('Data Telah Tersimpan'); document.location='index.php?file=barang_keluar_form'</script>";  
 }else{  
 echo "<script language='JavaScript'>alert('Data Belum Tersimpan'); document.location='index.php?file=barang_keluar_form'</script>";  
 }
 ?>



