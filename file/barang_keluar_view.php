<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM barang_keluar ORDER BY no_pemesan");
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
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="26"><strong>Data Transaksi Barang Keluar </strong></td>
  </tr>
  <tr>
    <td height="22"><span class="style70">Data barang keluar yang sudah diinput, untuk  melakukan penambahan data klik input data, jika ingin melakukan editing klik pada edit dan jika ingin menghapus klik tombol hapus.</span></td>
  </tr>
  <tr>
    <td height="32"><a href="index.php?file=barang_keluar_form">
      <input type="button" name="Button" value="Input Data" />
    </a></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" bordercolor="#CCCCCC" class="tabel">
      <tr>
        <td width="134" height="33" align="center" valign="middle" bgcolor="#689105"><span class="style71">No. Pemesan </span></td>
        <td width="133" align="center" valign="middle" bgcolor="#689105"><span class="style71">Kode Barang </span></td>
        <td width="154" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Barang </span></td>
        <td width="150" align="center" valign="middle" bgcolor="#689105"><span class="style71">Jumlah Barang</span></td>
        <td width="142" align="center" valign="middle" bgcolor="#689105"><span class="style71">Total Harga </span></td>
        <td width="128" align="center" valign="middle" bgcolor="#689105"><span class="style71">Tgl. Pemesanan </span></td>
        <td width="190" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Pelanggan </span></td>
        <td width="148" colspan="2" align="center" valign="middle" bgcolor="#689105"><span class="style71">Proses</span></td>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[no_pemesan]</td>
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[jml_barang]</td>
<td><center>$baris[total_harga]</td>
<td><center>$baris[tgl_pemesanan]</td>
<td><center>$baris[nm_pelanggan]</td>";
?>
<td width="134" align="center"><a href="index.php?file=barang_keluar_edit&amp;id=<?=$baris['no_pemesan']?>">Edit</a></td>
<td width="133" align="center"><a href="index.php?file=barang_keluar_hapus&amp;op=delete&amp;no_pemesan=<?=$baris['no_pemesan']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
