<?php
include'koneksi.php';
 $nama_pemesan = $_POST['nama_pemesan'];
 $nm_barang = $_POST['nm_barang'];
 $jml_Barang = $_POST['jml_Barang'];
 $hrg_barang = $_POST['hrg_barang'];
 $total  = $_POST['total'];
  
 $query = "insert into pemesanan set nama_pemesan='$nama_pemesan', nm_barang='$nm_barang', jml_Barang='$jml_Barang', hrg_barang='$hrg_barang', total='$total'";  
 $sql = mysqli_query($conn, $query);  
 if($sql){  
 ?><script language="JavaScript">alert('Terimakasih telah memesan produk kami, Pemesanan akan kirim ke alamat anda');
document.location='pemesanan.php'</script><?  
 }else{  
 ?><script language="JavaScript">alert('Mohon isi ulang form anda'); 
 document.location='pemesanan.php'</script><?  
 }
 ?>
