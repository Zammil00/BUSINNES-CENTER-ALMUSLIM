<?php  
include"koneksi.php"; 
if($_SESSION['level']=='user') {
$query = "select * from pemesanan where no_pemesan='".mysqli_real_escape_string($conn, $_GET['id'])."'";  
$result = mysqli_query($conn, $query);  
$pemesan = mysqli_fetch_array($result);  
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
-->
</style>    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>

<body>
<h3>Pengeditan Data Pemesanan Barang </h3>
<p>Untuk melakukan pengeditan, silahkan isi pada kolom yang disediakan.</p>
<form method="post" name="form1" action="index.php?file=proses_pemesanan_edit">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" nowrap>No_pemesan:</td>
      <td width="67%" align="left"><input name="no_pemesan" type="text" id="no_pemesan" value="<?=$pemesan['no_pemesan'];?>" size="10" maxlength="10" readonly="readonly"/></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="left">Nama_pemesan:</td>
      <td align="left"><input type="text" name="nama_pemesan" value="<?=$pemesan['nama_pemesan'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="left">Nama_Barang:</td>
      <td align="left"><input type="text" name="nama_Barang" value="<?=$pemesan['nama_Barang'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="left">Jml_Barang:</td>
      <td align="left"><input type="text" name="jml_Barang" value="<?=$pemesan['jml_Barang'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="left">Harga_satuan:</td>
      <td align="left"><input type="text" name="harga_satuan" value="<?=$pemesan['harga_satuan'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="left">Total:</td>
      <td align="left"><input type="text" name="total" value="<?=$pemesan['total'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="left">&nbsp;</td>
      <td align="left"><input name="Submit" type="submit" value="Simpan">
      <input type="reset" value="Batal" /></td>
    </tr>
  </table>
  </form>
</body>
</html>
<?php
} else {
echo"Akses ditolak !";
}
?>
