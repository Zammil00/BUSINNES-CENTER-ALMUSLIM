<?php
if($_SESSION['level']=='user') {
?>
<?php  
include"koneksi.php"; 
$query = "select * from permintaan where no_permintaan='".mysqli_real_escape_string($conn, $_GET['id'])."'";  
$result = mysqli_query($conn, $query);  
$permintaan = mysqli_fetch_array($result);  
?>

<h3>Pengeditan Data Permintaan Barang</h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>
<form id="form1" name="form1" method="post" action="index.php?file=proses_permintaan_barang_edit">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap="nowrap">No. Permintaan:</td>
      <td width="67%" align="left" valign="middle"><input name="no_permintaan" type="text" value="<?=$permintaan['no_permintaan'];?>" size="15" maxlength="10" readonly="readonly"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Tgl. Permintaan:</td>
      <td align="left" valign="middle"><?php list($thn,$bln,$tgl) = explode ("-",$permintaan ['tgl_permintaan']); ?>
        <select name="tgl">
          <?
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						$sele = ($tg==$tgl)? "selected" : "";
						echo "<option value='$tg' $sele>$tg</option>";	
					}
				?>
        </select>
        <span class="style17">-</span>
        <select name="bln">
          <?
					for ($i=1; $i<=12; $i++) {
						$bl = ($i<10) ? "0$i" : $i;
						$sele = ($bl==$bln)?"selected" : "";
						echo "<option value='$bl' $sele>$bl</option>";	
					}
				?>
        </select>
        -
        <select name="thn">
          <?
					for ($i=1970; $i<=2000; $i++) {
						$sele = ($i==$thn)?"selected" : "";
						echo "<option value='$i' $sele>$i</option>";	
					}
				?>
        </select></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Nama Pemasok:</td>
      <td align="left" valign="middle"><input name="nama_pemasok" type="text" id="nama_pemasok" value="<?=$permintaan['nama_pemasok'];?>" size="32"/></td>
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
