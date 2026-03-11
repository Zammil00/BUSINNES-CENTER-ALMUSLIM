<?php
if($_SESSION['level']=='user') {
?>

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
