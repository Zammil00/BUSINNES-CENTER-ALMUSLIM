<?php 
 $no_permintaan = $_POST['no_permintaan'];  
 $tgl_permintaan = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
 $nama_pemasok = $_POST['nama_pemasok'];
   
//koneksi database  
include"koneksi.php";  
$query = "update permintaan set no_permintaan='$no_permintaan', tgl_permintaan='$tgl_permintaan', nama_pemasok='$nama_pemasok' where no_permintaan='$no_permintaan'";  
$hasil = mysql_query($query);  
if($hasil){  
 ?><script language="JavaScript">alert('Data Telah Teredit');
document.location='index.php?file=permintaan_barang_view'</script><?  
 }else{  
 ?><script language="JavaScript">alert('Data Belum Teredit'); 
 document.location='index.php?file=permintaan_barang_view'</script><?  
 }  
?> 
