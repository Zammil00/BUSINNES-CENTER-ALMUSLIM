<?php
error_reporting (E_ALL ^ (E_WARNING | E_NOTICE));
if(isset($_GET['tgl_masuk']) && $_GET['tgl_masuk']){  
    include 'koneksi.php';  
    $tgl_masuk = $_GET['tgl_masuk'];  
    $sql = "select * from barang_masuk where tgl_masuk like '%$tgl_masuk%'";  
    $hasil = mysqli_query($conn, $sql);  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Barang Masuk</title>
<style type="text/css">
@media print {
input.noPrint { display: none; }
}
</style>
<style type="text/css">
<!--
.style71 {color: #FFFFFF;
	font-weight: bold;
}
.style73 {font-size: 18px}
.tabel {border: 1px solid #CCCCCC;
	border-collapse: collapse;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
}
.style61 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
</head>

<body>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="64" align="center"><span class="style73">LAPORAN BARANG MASUK <br />
      BUSINESS CENTER UNIVERSITAS ALMUSLIM </span></td>
  </tr>
  
  <tr>
    <td><table width="100%" border="1" bordercolor="#CCCCCC" class="tabel">
      <tr>
        <td width="12%" height="33" align="center" valign="middle" bgcolor="#689105"><span class="style71">No. Permintaan</span></td>
		<td width="14%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Tgl. Masuk</span></td>
        <td width="14%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Kode Barang </span></td>
        <td width="16%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Barang </span></td>
        <td width="19%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Pemasok</span></td>
        <td width="13%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Jumlah Barang </span></td>
        <td width="13%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Total Harga </span></td>
        </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){ 
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[no_permintaan]</td>
<td><center>$baris[tgl_masuk]</td>
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[nama_pemasok]</td>
<td><center>$baris[jml_Barang]</td>
<td><center>$baris[total_harga]</td>";
?>
      <?php } ?>
    </table></td>
  </tr>
  <tr>
    <td align="center"><?php  
if(mysqli_num_rows($hasil) > 0){
    }else{  
       echo "<font color=red><blink>Tidak ada data yang dicari!</blink></font>";
    }  
}  
?></td>
  </tr>
  <tr>
    <td align="right"><table width="20%" height="94" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="94" align="center" valign="top">Pimpinan BUSINESS CENTER UNIVERSITAS ALMUSLIM<br />
              <br />
              <br />
              <br />
              <br />
              <strong>Alamsyah Nour</strong> </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td><input class="noPrint" type="button" value="Cetak" onclick="javascript:window.print();"> <input class="noPrint" type="button" value="Tutup" onclick="javascript:window.close();"></td>
  </tr>
</table>
</body>
</html>
