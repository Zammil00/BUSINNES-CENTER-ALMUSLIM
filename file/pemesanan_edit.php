<?php  
include"koneksi.php"; 
if($_SESSION['level']=='user') {
$query = "select * from pemesanan where no_pemesan='".mysqli_real_escape_string($conn, $_GET['id'])."'";  
$result = mysqli_query($conn, $query);  
$pemesan = mysqli_fetch_array($result);  
?>

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
      <button type="reset" class="button" style="background:#555;"  />Batal</button></td>
    </tr>
  </table>
  </form>

<?php
} else {
echo"Akses ditolak !";
}
?>
