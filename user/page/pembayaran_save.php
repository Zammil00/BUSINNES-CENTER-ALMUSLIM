<?php
include'koneksi.php';
 $nama_barang = $_POST['nama_barang'];
 $no_rekening = $_POST['no_rekening'];
 $nama_bank = $_POST['nama_bank'];
 $nominal_pembayaran = $_POST['nominal_pembayaran'];
  
 $query = "insert into pembayaran set nama_barang='$nama_barang', no_rekening='$no_rekening', nama_bank='$nama_bank', nominal_pembayaran='$nominal_pembayaran'";  
 $sql = mysql_query($query);  
 if($sql){  
 ?><script language="JavaScript">alert('Terima kasih telah melakukan pembayaran, selanjutnya kami akan konfirmasi anda');
document.location='index.php?file=pembayaran_form'</script><?  
 }else{  
 ?><script language="JavaScript">alert('Mohon di isi ulang form yang telah di sediakan'); 
 document.location='index.php?file=pembayaran_form'</script><?  
 }
 ?>
