<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM pembayaran ORDER BY id_bayar");
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
    <td height="26"><strong>Data Transaksi Pembayaran </strong></td>
  </tr>
  <tr>
    <td height="22"><span class="style70">Data pembayaran yang sudah diinput, untuk  melakukan penambahan data klik input data, jika ingin melakukan editing klik pada edit dan jika ingin menghapus klik tombol hapus.</span></td>
  </tr>
  
  <tr>
    <td><table width="100%" border="1" bordercolor="#CCCCCC" class="tabel">
      <tr>
        <td width="149" height="33" align="center" valign="middle" bgcolor="#689105"><span class="style71">Id. Bayar  </span></td>
        <td width="188" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Barang </span></td>
        <td width="234" align="center" valign="middle" bgcolor="#689105"><span class="style71">No. Rekening </span></td>
        <td width="261" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Bank </span></td>
        <td width="253" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nominal Pembayaran </span></td>
        <td width="175" colspan="2" align="center" valign="middle" bgcolor="#689105"><span class="style71">Proses</span></td>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[id_bayar]</td>
<td><center>$baris[nama_barang]</td>
<td><center>$baris[no_rekening]</td>
<td><center>$baris[nama_bank]</td>
<td><center>$baris[nominal_pembayaran]</td>";
?>
<td width="149" align="center"><a href="index.php?file=pembayaran_hapus&amp;op=delete&amp;id_bayar=<?=$baris['id_bayar']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
