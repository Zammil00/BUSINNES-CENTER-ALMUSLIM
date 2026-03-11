<?php  
include"koneksi.php";
if($_SESSION['level']=='user') {
$query = "select * from stok_barang where kd_barang='".mysqli_real_escape_string($conn, $_GET['id'])."'";  
$result = mysqli_query($conn, $query);  
$stok = mysqli_fetch_array($result);  
?>

<h3>Edit Data Stok Barang</h3>
<p>Untuk melakukan pengeditan, silahkan isi pada kolom yang disediakan.</p>
<form method="post" name="form1" action="index.php?file=proses_stok_barang_edit">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap>Kode Barang : </td>
      <td width="67%" align="left" valign="middle"><input name="kd_barang" type="text" value="<?=$stok['kd_barang'];?>" size="15" readonly="readonly"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Nama Barang : </td>
      <td align="left" valign="middle"><input type="text" name="nm_barang" value="<?=$stok['nm_barang'];?>" size="50"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Harga Barang : </td>
      <td align="left" valign="middle"><input type="text" name="hrg_stok" value="<?=$stok['hrg_stok'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Jumlah Barang : </td>
      <td align="left" valign="middle"><input type="text" name="jml_stok" value="<?=$stok['jml_stok'];?>" size="32"></td>
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
