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
<h3>Penambahan Data Pembayaran </h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>
<form method="post" name="form1" action="index.php?file=pembayaran_save">
      <table width="100%" align="center">
        <tr valign="baseline">
          <td width="33%" align="left" valign="middle" nowrap>Id Bayar:</td>
          <td width="67%" align="left" valign="middle"><input name="id_bayar" type="text" value="" size="10" maxlength="10"></td>
        </tr>
        <tr valign="baseline">
          <td align="left" valign="middle" nowrap>Nama Barang:</td>
          <td align="left" valign="middle"><input type="text" name="nama_barang" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td align="left" valign="middle" nowrap>No Rekening:</td>
          <td align="left" valign="middle"><input type="text" name="no_rekening" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td align="left" valign="middle" nowrap>Nama Bank:</td>
          <td align="left" valign="middle"><input type="text" name="nama_bank" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td align="left" valign="middle" nowrap>Nominal Pembayaran:</td>
          <td align="left" valign="middle"><input type="text" name="nominal_pembayaran" value="" size="32"></td>
        </tr>
        <tr valign="baseline">
          <td align="left" valign="middle" nowrap>Id Pelanggan:</td>
          <td align="left" valign="middle"><select name="id_plg" id="id_plg">
            <?php
   			echo "<option value=not_kode>--- Pilih Id Pelanggan---</option>";	
			$minta = "SELECT id_plg FROM pelanggan";
			$eksekusi = mysqli_query($conn, $minta);
			while($hasil=mysqli_fetch_array($eksekusi))
			{
			   echo "<option value='".$hasil['id_plg']."'>".$hasil['id_plg']." </option>";		
			}	
		?>
                              </select></td>
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
