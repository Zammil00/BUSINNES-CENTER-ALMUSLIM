<?php  
include"koneksi.php"; 
if($_SESSION['level']=='user') {
$query = "select * from pelanggan where id_plg='".mysqli_real_escape_string($conn, $_GET['id'])."'";  
$result = mysqli_query($conn, $query);  
$plg = mysqli_fetch_array($result);  
?>

<h3>Pengeditan Data Pelanggan </h3>
<p>Untuk melakukan pengeditan data, silahkan isi pada kolom yang disediakan.</p>
<form method="post" name="form1" action="index.php?file=proses_pelanggan_edit">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap="nowrap">Id Pelanggan:</td>
      <td width="67%" align="left" valign="middle"><input name="id_plg" type="text" value="<?=$plg['id_plg'];?>" size="10" maxlength="10" readonly="readonly"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Username:</td>
      <td align="left" valign="middle"><input type="text" name="username_plg" value="<?=$plg['username_plg'];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Nama Pelanggan:</td>
      <td align="left" valign="middle"><input type="text" name="nm_pelanggan" value="<?=$plg['nm_pelanggan'];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Alamat:</td>
      <td align="left" valign="middle"><input type="text" name="alamat" value="<?=$plg['alamat'];?>" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Email:</td>
      <td align="left" valign="middle"><input type="text" name="email" value="<?=$plg['email'];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Telpon/HP</td>
      <td align="left" valign="middle"><input type="text" name="notelp_plg" value="<?=$plg['notelp_plg'];?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>&nbsp;</td>
      <td align="left" valign="middle"><button type="submit" class="button" >Simpan</button>
      <input name="Reset" type="reset" value="Batal" /></td>
    </tr>
  </table>
</form>

<?php
} else {
echo"Akses ditolak !";
}
?>


