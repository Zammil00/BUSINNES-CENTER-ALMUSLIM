<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysql_query("SELECT * FROM produk ORDER BY kd_barang");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style70 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.tabel {border: 1px solid #CCCCCC;
	border-collapse: collapse;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style71 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="26"><strong>Data Produk </strong></td>
  </tr>
  <tr>
    <td height="22"><span class="style70">Data produk yang sudah diinput, untuk  melakukan penambahan data klik input data, jika ingin melakukan editing klik pada edit dan jika ingin menghapus klik tombol hapus.</span></td>
  </tr>
  <tr>
    <td height="32"><a href="index.php?file=produk_form">
      <input type="button" name="Button" value="Input Data" />
 </a></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" bordercolor="#CCCCCC" class="tabel">
      <tr>
        <td width="18%" height="33" align="center" valign="middle" bgcolor="#689105"><span class="style71">Kode Barang  </span></td>
        <td width="21%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Barang </span></td>
        <td width="21%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Jumlah Barang </span></td>
        <td width="21%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Harga Barang </span></td>
        <td width="25%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Foto</span></td>
        <td colspan="2" align="center" valign="middle" bgcolor="#689105"><span class="style71">Proses</span></td>
      </tr>
<?php 
while ($baris = mysql_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[jlh_brg]</td>
<td><center>$baris[hrg_barang]</td>
<td><center>$baris[foto]</td>";
?>
<td width="134" align="center"><a href="index.php?file=produk_edit&amp;id=<?=$baris['kd_barang']?>">Edit</a></td>
<td width="133" align="center"><a href="index.php?file=produk_hapus&amp;op=delete&amp;kd_barang=<?=$baris['kd_barang']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
</tr> 
<?php } ?>
</table></td>
  </tr>
</table>
</body>
</html>
<?php
} else {
echo"Akses ditolak !";
}
?>
