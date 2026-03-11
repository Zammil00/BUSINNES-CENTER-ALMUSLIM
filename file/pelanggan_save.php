<?php
include'koneksi.php';
 $id_plg = $_POST['id_plg'];
 $username_plg = $_POST['username_plg'];
 $password   = $_POST['password'];
 $nm_pelanggan = $_POST['nm_pelanggan'];
 $alamat = $_POST['alamat'];
 $email  = $_POST['email'];
 $notelp_plg  = $_POST['notelp_plg'];
  
 $query = "insert into pelanggan set id_plg='$id_plg', username_plg='$username_plg', password='$password', nm_pelanggan='$nm_pelanggan', alamat='$alamat', email='$email', notelp_plg='$notelp_plg'";  
 $sql = mysql_query($query);  
 if($sql){  
 ?><script language="JavaScript">alert('Data Telah Tersimpan');
document.location='index.php?file=pelanggan_form'</script><?  
 }else{  
 ?><script language="JavaScript">alert('Data Belum Tersimpan'); 
 document.location='index.php?file=pelanggan_form'</script><?  
 }
 ?>
