<?php
if($_SESSION['level']=='user') {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validasi_input(form){
  if (form.kd_barang.value != ""){
  var x = (form.kd_barang.value);
  var status = true;
  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
  for (i=0; i<=x.length-1; i++)
  {
  if (x[i] in list) cek = true;
  else cek = false;
 status = status && cek;
  }
  if (status == false)
  {
  alert("Kode barang harus angka!");
  form.kd_barang.focus();
  return false;
  }
  }
 if (form.kd_barang.value == ""){
    alert("Kode Barang masih kosong!");
    form.kd_barang.focus();
    return (false);
  }
  if (form.nm_barang.value == ""){
    alert("Nama barang masih kosong!");
    form.nm_barang.focus();
    return (false);
  }
  if (form.hrg_stok.value == ""){
    alert("Harga stok masih kosong!");
    form.hrg_stok.focus();
    return (false);
  }
  if (form.jml_stok.value == ""){
    alert("Jumlah stok masih kosong!");
    form.jml_stok.focus();
    return (false);
  }  
  else {
  return (true);
  }
  }
 </script>
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
<h3>Transaksi Penambahan Data Stok Barang</h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>
<form method="post" name="form" onsubmit="return validasi_input(this)" action="index.php?file=stok_barang_save">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap>Kode Barang : </td>
      <td width="67%" align="left" valign="middle"><input name="kd_barang" type="text" value="" size="15" maxlength="10"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Nama Barang : </td>
      <td align="left" valign="middle"><input type="text" name="nm_barang" value="" size="50"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Harga Barang : </td>
      <td align="left" valign="middle"><input type="text" name="hrg_stok" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Jumlah Barang : </td>
      <td align="left" valign="middle"><input type="text" name="jml_stok" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>&nbsp;</td>
      <td align="left" valign="middle"><input type="submit" value="Simpan">
      <input name="Reset" type="reset" value="Batal" /></td>
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
