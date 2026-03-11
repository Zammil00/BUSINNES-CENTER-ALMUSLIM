<?php  
include"koneksi.php";
if($_SESSION['level']=='user') {
$query = "select * from pemasok where id_pemasok='".mysqli_real_escape_string($conn, $_GET['id'])."'";  
$result = mysqli_query($conn, $query);  
$pemasok = mysqli_fetch_array($result);  
?>

<h3>Pengeditan Data Pemasok </h3>
<p>Untuk melakukan pengeditan, silahkan isi pada kolom yang disediakan.</p>
<form id="form1" name="form1" method="post" action="index.php?file=proses_pemasok_edit">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap="nowrap">Id. Pemasok:</td>
      <td width="67%" align="left" valign="middle"><input name="id_pemasok" type="text" value="<?=$pemasok['id_pemasok'];?>" size="10" maxlength="10" readonly="readonly"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Nama Pemasok:</td>
      <td align="left" valign="middle"><input type="text" name="nama_pemasok" value="<?=$pemasok['nama_pemasok'];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Email Pemasok:</td>
      <td align="left" valign="middle"><input type="text" name="email_pemasok" value="<?=$pemasok['email_pemasok'];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Alamat:</td>
      <td align="left" valign="middle"><input type="text" name="alamat" value="<?=$pemasok['alamat'];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">&nbsp;</td>
      <td align="left" valign="middle"><input name="Submit" type="submit" value="Simpan" />
          <input name="reset" type="reset" value="Batal" /></td>
    </tr>
  </table>
</form>

<?php
} else {
echo"Akses ditolak !";
}
?>

