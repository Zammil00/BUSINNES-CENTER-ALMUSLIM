<?php
if($_SESSION['level']=='manager') {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>
</head>
<body>
<h3>Laporan  Barang Keluar</h3>
<p>Untuk mendata barang keluar, silahkan tentukan tanggal barang keluar.</p>
<table width="637" border="0" align="left" cellpadding="0" cellspacing="0" bordercolor="#DDDDDD" bgcolor="#FFFFFF">
  <tr>
    <th height="19" align="left"><form action="./file/laporan_barang_keluar.php" method="get" name="form" target="_blank" id="form" onsubmit="return validasi_input(this)">
      Tanggal:
          <input name="tgl_pemesanan" class="tcal" id="tgl_pemesanan" value="<?php echo date ('Y-m-d');?>" size="10" />
      <input type="submit" name="Submit" value="Ok" />
    </form></th>
  </tr>
  <tr>
    <td align="left" valign="middle"></td>
  </tr>
</table>
</body>
</html>
<?php
} else {
echo"Akses ditolak !";
}
?>
