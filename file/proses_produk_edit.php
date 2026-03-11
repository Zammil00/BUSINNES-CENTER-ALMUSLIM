<?php 
 $kd_barang = $_POST['kd_barang'];
 $nm_barang = $_POST['nm_barang'];
 $jlh_brg = $_POST['jlh_brg'];
 $hrg_barang = $_POST['hrg_barang'];
 $foto = $_FILES['picture']['name']; 
 $fileSize = $_FILES['picture']['size']; 
 $fileError = $_FILES['picture']['error']; 
 if($fileSize > 0 || $fileError == 0){ 
 $move = move_uploaded_file($_FILES['picture']['tmp_name'], '../percetakan/foto/'.$foto);
//koneksi database  
include"koneksi.php";  
$query = "update produk set kd_barang='$kd_barang', nm_barang='$nm_barang', jlh_brg='$jlh_brg', hrg_barang='$hrg_barang', foto='$foto' where kd_barang='$kd_barang'";  
$hasil = mysql_query($query);  
if($hasil){  
 ?><script language="JavaScript">alert('Data Telah Teredit');
 document.location='index.php?file=produk_view'</script><?  
 }else{  
 ?><script language="JavaScript">alert('Data Belum Teredit'); 
 document.location='index.php?file=produk_view'</script><?  
 }  
 }
?> 
