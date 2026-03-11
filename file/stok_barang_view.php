<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM stok_barang ORDER BY kd_barang");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style70 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.tabel {
	border: 1px solid #CCCCCC;
	border-collapse: collapse;
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
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="26"><strong>Data Transaksi Stok Barang </strong></td>
  </tr>
  <tr>
    <td height="22"><span class="style70">Data stok barang yang sudah diinput, untuk  melakukan penambahan data klik input data, jika ingin melakukan editing klik pada edit dan jika ingin menghapus klik tombol hapus.</span></td>
  </tr>
  <tr>
    <td height="32"><a href="index.php?file=stok_barang_form"><input type="button" name="Button" value="Input Data" /></a></td>
  </tr>
  <tr>
    <td><table width="90%" border="1" bordercolor="#CCCCCC" class="tabel">
      <tr>
        <td width="17%" height="28" align="center" valign="middle" bgcolor="#689105"><span class="style71">Kode Barang</span></td>
        <td width="27%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Barang </span></td>
        <td width="20%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Harga Stok </span></td>
        <td width="18%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Jumlah Stok </span></td>
        <td colspan="2" align="center" valign="middle" bgcolor="#689105"><span class="style71">Proses</span></td>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[hrg_stok]</td>
<td><center>$baris[jml_stok]</td>";
?>
  <td width="50" align="center"><a href="index.php?file=stok_barang_edit&amp;id=<?=$baris['kd_barang']?>">Edit</a></td>
<td width="50" align="center"><a href="index.php?file=stok_barang_hapus&amp;op=delete&amp;kd_barang=<?=$baris['kd_barang']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
  </tr>
  <?php
}
?>
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
