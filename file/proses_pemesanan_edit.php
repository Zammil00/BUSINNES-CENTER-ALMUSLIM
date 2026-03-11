<?php 
 $no_pemesan = $_POST['no_pemesan']; 
 $nama_pemesan = $_POST['nama_pemesan'];
 $nama_Barang = $_POST['nama_Barang'];
 $jml_Barang = $_POST['jml_Barang'];
 $harga_satuan = $_POST['harga_satuan'];
 $total  = $_POST['total'];
   
//koneksi database  
include"koneksi.php";  
$query = "update pemesanan set no_pemesan='$no_pemesan', nama_pemesan='$nama_pemesan', nama_Barang='$nama_Barang', jml_Barang='$jml_Barang', harga_satuan='$harga_satuan', total='$total' where no_pemesan='$no_pemesan'";  
$hasil = mysqli_query($conn, $query);  
if($hasil){  
 echo "<script language='JavaScript'>alert('Data Telah Teredit'); document.location='index.php?file=pemesanan_view'</script>";  
 }else{  
 echo "<script language='JavaScript'>alert('Data Belum Teredit'); document.location='index.php?file=pemesanan_view'</script>";  
 }  
?> 


