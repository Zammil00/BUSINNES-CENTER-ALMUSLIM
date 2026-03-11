<?php
error_reporting (E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
$hasil = mysqli_query($conn, "SELECT * FROM produk ORDER BY kd_barang");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Produk Barang</title>
<style type="text/css">
@media print {
input.noPrint { display: none; }
}
</style>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
}
.style71 {	color: #FFFFFF;
	font-weight: bold;
}
.tabel {	border: 1px solid #CCCCCC;
	border-collapse: collapse;
}
.style73 {font-size: 18px}
-->
</style>    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>

<body>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="64" align="center"><span class="style73">LAPORAN PRODUK BARANG<br />
    BUSINESS CENTER UNIVERSITAS ALMUSLIM </span></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" bordercolor="#CCCCCC" class="tabel">
      <tr>
        <td width="17%" height="28" align="center" valign="middle" bgcolor="#689105"><span class="style71">Kode Barang</span></td>
        <td width="27%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Barang </span></td>
        <td width="20%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Harga Barang</span></td>
        <td width="18%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Jumlah Barang </span></td>
        </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[jlh_brg]</td>
<td><center>$baris[hrg_barang]</td>";
?>
<?php } ?>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
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
