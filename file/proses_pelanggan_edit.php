<?php
 $id_plg = $_POST['id_plg'];
 $username_plg = $_POST['username_plg'];
 $nm_pelanggan = $_POST['nm_pelanggan'];
 $alamat = $_POST['alamat'];
 $email  = $_POST['email'];
 $notelp_plg  = $_POST['notelp_plg'];
 
include'koneksi.php';  
 $query = "update pelanggan set id_plg='$id_plg', username_plg='$username_plg', nm_pelanggan='$nm_pelanggan', alamat='$alamat', email='$email', notelp_plg='$notelp_plg' where id_plg='$id_plg'";  
 $sql = mysqli_query($conn, $query);  
 if($sql){  
 echo "<script language='JavaScript'>alert('Data Telah Teredit'); document.location='index.php?file=pelanggan_view'</script>";  
 }else{  
 echo "<script language='JavaScript'>alert('Data Belum Teredit'); document.location='index.php?file=pelanggan_view'</script>";  
 }
 ?>


