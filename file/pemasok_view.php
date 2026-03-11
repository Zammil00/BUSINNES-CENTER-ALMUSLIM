<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM pemasok ORDER BY id_pemasok");
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
    <td height="26"><strong>Data Pemasok </strong></td>
  </tr>
  <tr>
    <td height="22"><span class="style70">Data pemasok yang sudah diinput, untuk  melakukan penambahan data klik input data, jika ingin melakukan editing klik pada edit dan jika ingin menghapus klik tombol hapus.</span></td>
  </tr>
  <tr>
    <td height="32"><a href="index.php?file=pemasok_form"><input type="button" name="Button" value="Input Data" /></a></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" bordercolor="#CCCCCC" class="tabel">
      <tr>
        <td width="17%" height="33" align="center" valign="middle" bgcolor="#689105"><span class="style71">Id Pemasok </span></td>
        <td width="20%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Nama Pemasok </span></td>
        <td width="20%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Email Pemasok </span></td>
        <td width="29%" align="center" valign="middle" bgcolor="#689105"><span class="style71">Alamat</span></td>
        <td colspan="2" align="center" valign="middle" bgcolor="#689105"><span class="style71">Proses</span></td>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[id_pemasok]</td>
<td><center>$baris[nama_pemasok]</td>
<td><center>$baris[email_pemasok]</td>
<td><center>$baris[alamat]</td>";
?>
<td width="134" align="center"><a href="index.php?file=pemasok_edit&amp;id=<?=$baris['id_pemasok']?>">Edit</a></td>
<td width="133" align="center"><a href="index.php?file=pemasok_hapus&amp;op=delete&amp;id_pemasok=<?=$baris['id_pemasok']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
