<?php
if($_SESSION['level']=='user') {
?>

<h3>Transaksi Penambahan Data Stok Barang</h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>

<div class="form-wrapper" style="background:#fff; padding:30px; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.05); max-width:800px; margin:0 auto;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:20px;">Form Input Stok Barang</h2>
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
</div>

<?php
} else {
echo"Akses ditolak !";
}
?>
