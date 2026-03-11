<?php
include'koneksi.php';
 $id_pemasok = $_POST['id_pemasok'];
 $nama_pemasok = $_POST['nama_pemasok'];
 $email_pemasok  = $_POST['email_pemasok'];
 $alamat = $_POST['alamat'];
  
 $query = "insert into pemasok set id_pemasok='$id_pemasok', nama_pemasok='$nama_pemasok', email_pemasok='$email_pemasok', alamat='$alamat'";  
 $sql = mysqli_query($conn, $query);  
 if($sql){  
 echo "<script language='JavaScript'>alert('Data Telah Tersimpan'); document.location='index.php?file=pemasok_form'</script>";  
 }else{  
 echo "<script language='JavaScript'>alert('Data Belum Tersimpan'); document.location='index.php?file=pemasok_form'</script>";  
 }
 ?>



