<?php
if($_SESSION['level']=='user') {
?>

<h3> Penambahan Data Permintaan Barang</h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>

<div class="form-wrapper" style="background:#fff; padding:30px; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.05); max-width:800px; margin:0 auto;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:20px;">Form Input Permintaan Barang</h2>
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
</div>
<p>&nbsp;</p>

<?php
} else {
echo"Akses ditolak !";
}
?>
