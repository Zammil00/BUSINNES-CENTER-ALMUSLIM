<?php
error_reporting (E_ALL ^ (E_WARNING | E_NOTICE));
if(isset($_GET['tgl_pemesanan']) && $_GET['tgl_pemesanan']){  
    include 'koneksi.php';  
    $tgl_pemesanan = $_GET['tgl_pemesanan'];  
    $sql = "select * from barang_keluar where tgl_pemesanan like '%$tgl_pemesanan%'";  
    $hasil = mysqli_query($conn, $sql);  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Barang Keluar</title>
<style type="text/css">
@media print {
input.noPrint { display: none; }
}
</style>
<style type="text/css">
<!--
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
}
.style61 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
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
-->
</style></head>

<body>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="64" align="center"><span class="style73">LAPORAN BARANG KELUAR <br />
      BUSINESS CENTER UNIVERSITAS ALMUSLIM </span></td>
  </tr>
  
  <tr>
    <td><table width="100%" border="1" bordercolor="#CCCCCC" class="tabel">
      <tr>
        <td width="146" height="33" align="center" valign="middle" bgcolor="#689105"><span class="style71">No. Pemesan </span></td>
        <td width="146" align="center" valign="middle" bgcolor="#689105"><span class="style71">Tgl. Pemesanan </span></td>
        <td width="145" align="center" valign="middle" bgcolor="#689105"><span class="style71">Kode Barang </span></td>
        <td width="167" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Barang </span></td>
        <td width="163" align="center" valign="middle" bgcolor="#689105"><span class="style71">Jumlah Barang</span></td>
        <td width="154" align="center" valign="middle" bgcolor="#689105"><span class="style71">Total Harga </span></td>
        <td width="203" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Pelanggan </span></td>
        </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[no_pemesan]</td>
<td><center>$baris[tgl_pemesanan]</td>
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[jml_barang]</td>
<td><center>$baris[total_harga]</td>
<td><center>$baris[nm_pelanggan]</td>";
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
    <td><input name="button" type="button" class="noPrint" onclick="javascript:window.print();" value="Cetak" />
        <input name="button2" type="button" class="noPrint" onclick="javascript:window.close();" value="Tutup" /></td>
  </tr>
</table>
</body>
</html>
