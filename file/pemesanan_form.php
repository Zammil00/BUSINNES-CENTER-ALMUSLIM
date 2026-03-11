<?php
if($_SESSION['level']=='user') {
?>
<script>
function hitung() {
{
var jml_Barang = document.getElementById("jml_Barang").value;
var harga_satuan = document.getElementById("harga_satuan").value;
var total = (Math.round(jml_Barang) * Math.round(harga_satuan));
document.getElementById("total").value = total;
}
}
</script>
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
<h3>Penambahan Data Pemesanan Barang </h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>
<form method="post" name="form1" action="index.php?file=pemesanan_save">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap>No. Pemesan:</td>
      <td width="67%" align="left" valign="middle"><input name="no_pemesan" type="text" value="" size="15" maxlength="10"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Nama Pemesan:</td>
      <td align="left" valign="middle"><input type="text" name="nama_pemesan" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Nama Barang:</td>
      <td align="left" valign="middle"><input name="nama_Barang" type="text" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Jumlah Barang:</td>
      <td align="left" valign="middle"><input name="jml_Barang" type="text" id='jml_Barang' onKeyUp=hitung() value="0" size="5"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Harga Satuan:</td>
      <td align="left" valign="middle"><input name="harga_satuan" type="text" id='harga_satuan' onKeyUp=hitung() value="0" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Total:</td>
      <td align="left" valign="middle"><input type="text" name="total" id='total' size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>&nbsp;</td>
      <td align="left" valign="middle"><input name="Submit" type="submit" value="Simpan">
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
