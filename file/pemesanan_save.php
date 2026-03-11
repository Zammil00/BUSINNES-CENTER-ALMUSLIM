<?php
include'koneksi.php';
 $no_pemesan = $_POST['no_pemesan']; 
 $nama_pemesan = $_POST['nama_pemesan'];
 $nama_Barang = $_POST['nama_Barang'];
 $jml_Barang = $_POST['jml_Barang'];
 $harga_satuan = $_POST['harga_satuan'];
 $total  = $_POST['total'];
  
 $query = "insert into pemesanan set no_pemesan='$no_pemesan', nama_pemesan='$nama_pemesan', nama_Barang='$nama_Barang', jml_Barang='$jml_Barang', harga_satuan='$harga_satuan', total='$total'";  
 $sql = mysqli_query($conn, $query);  
 if($sql){  
 echo "<script language='JavaScript'>alert('Data Telah Tersimpan'); document.location='index.php?file=pemesanan_form'</script>";  
 }else{  
 echo "<script language='JavaScript'>alert('Data Belum Tersimpan'); document.location='index.php?file=pemesanan_form'</script>";  
 }
 ?>


