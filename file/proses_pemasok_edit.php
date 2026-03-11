<?php

 $id_pemasok = $_POST['id_pemasok'];
 $nama_pemasok = $_POST['nama_pemasok'];
 $email_pemasok  = $_POST['email_pemasok'];
 $alamat = $_POST['alamat'];
  
 include'koneksi.php';
 $query = "update pemasok set id_pemasok='$id_pemasok', nama_pemasok='$nama_pemasok', email_pemasok='$email_pemasok', alamat='$alamat' where id_pemasok='$id_pemasok'";  
 $sql = mysqli_query($conn, $query);  
 if($sql){  
 echo "<script language='JavaScript'>alert('Data Telah Tersimpan'); document.location='index.php?file=pemasok_view'</script>";  
 }else{  
 echo "<script language='JavaScript'>alert('Data Belum Tersimpan'); document.location='index.php?file=pemasok_view'</script>";  
 }
 ?>


