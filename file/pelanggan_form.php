<?php
if($_SESSION['level']=='user') {
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
</style></head>

<body>
<h3>Penambahan Data Pelanggan </h3>
<p>Untuk melakukan penambahan data, silahkan isi pada kolom yang disediakan.</p>
<form method="post" name="form1" action="index.php?file=pelanggan_save">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap>Id Pelanggan:</td>
      <td width="67%" align="left" valign="middle"><input name="id_plg" type="text" value="" size="10" maxlength="10"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Username:</td>
      <td align="left" valign="middle"><input type="text" name="username_plg" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Password:</td>
      <td align="left" valign="middle"><input type="password" name="password" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Nama Pelanggan:</td>
      <td align="left" valign="middle"><input type="text" name="nm_pelanggan" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Alamat:</td>
      <td align="left" valign="middle"><input type="text" name="alamat" value="" size="50"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Email:</td>
      <td align="left" valign="middle"><input type="text" name="email" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Telpon/HP</td>
      <td align="left" valign="middle"><input type="text" name="notelp_plg" value="" size="32"></td>
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
