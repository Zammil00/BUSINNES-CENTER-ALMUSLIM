<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM pelanggan ORDER BY id_plg");
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
    <td height="26"><strong>Data Pelanggan </strong></td>
  </tr>
  <tr>
    <td height="22"><span class="style70">Data pelanggan yang sudah diinput oleh pengunjung ataupun user, jika ingin menghapus data yang tidak di perlukan klik tombol hapus.</span></td>
  </tr>
  
  <tr>
    <td><table width="100%" border="1" bordercolor="#CCCCCC" class="tabel">
      <tr>
        <td width="140" height="33" align="center" valign="middle" bgcolor="#689105"><span class="style71">Id Pelanggan </span></td>
        <td width="154" align="center" valign="middle" bgcolor="#689105"><span class="style71">Username</span></td>
        <td width="160" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Pelanggan </span></td>
        <td width="187" align="center" valign="middle" bgcolor="#689105"><span class="style71">Alamat</span></td>
        <td width="197" align="center" valign="middle" bgcolor="#689105"><span class="style71">Email</span></td>
        <td width="165" align="center" valign="middle" bgcolor="#689105"><span class="style71">Telpon/HP</span></td>
        <td width="182" colspan="2" align="center" valign="middle" bgcolor="#689105"><span class="style71">Proses</span></td>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[id_plg]</td>
<td><center>$baris[username_plg]</td>
<td><center>$baris[nm_pelanggan]</td>
<td><center>$baris[alamat]</td>
<td><center>$baris[email]</td>
<td><center>$baris[notelp_plg]</td>";
?>
<td width="154" align="center"><a href="index.php?file=pelanggan_hapus&amp;op=delete&amp;id_plg=<?=$baris['id_plg']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
