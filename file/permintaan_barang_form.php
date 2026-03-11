<?php
if($_SESSION['level']=='user') {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validasi_input(form){
  if (form.no_permintaan.value != ""){
  var x = (form.no_permintaan.value);
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
  form.no_permintaan.focus();
  return false;
  }
  }
 if (form.no_permintaan.value == ""){
    alert("No permintaan masih kosong!");
    form.no_permintaan.focus();
    return (false);
  }
  if (form.id_pemasok.value == "pilih"){
    alert("Pilih Id pemasok!");
    return (false);
  }
  if (form.nama_pemasok.value == ""){
    alert("Nama pemasok masih kosong!");
    form.nama_pemasok.focus();
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
.style15 {font-family: Arial, Helvetica, sans-serif}
-->
</style>    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>

<body>
<h3> Penambahan Data Permintaan Barang</h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>
<form id="form1" name="form1" method="post" onSubmit="return validasi_input(this)" action="index.php?file=permintaan_barang_save">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap="nowrap">No. Permintaan:</td>
      <td width="67%" align="left" valign="middle"><input name="no_permintaan" type="text" value="" size="15" maxlength="10" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Tgl. Permintaan:</td>
      <td align="left" valign="middle"><span class="style15">
        <select name="tgl">
          <?
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						echo "<option value='$tg'>$tg</option>";	
					}
				?>
        </select>
        -
        <select name="bln">
  <?
					for ($i=1; $i<=12; $i++) {
						$bl = ($i<10) ? "0$i" : $i;
						echo "<option value='$bl'>$bl</option>";	
					}
				?>
</select>
        -
        <select name="thn">
  <?
					for ($i=2012; $i<=2015; $i++) {
						echo "<option value='$i'>$i</option>";	
					}
				?>
</select>
      </span></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Nama Pemasok:</td>
      <td align="left" valign="middle"><input name="nama_pemasok" type="text" id="nama_pemasok" onFocus="true" value="" size="32"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">&nbsp;</td>
      <td align="left" valign="middle"><input name="Submit" type="submit" value="Simpan" />
          <input name="reset" type="reset" value="Batal" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
} else {
echo"Akses ditolak !";
}
?>
