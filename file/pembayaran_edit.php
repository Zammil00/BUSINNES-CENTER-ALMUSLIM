<?php  
include"koneksi.php"; 
if($_SESSION['level']=='user') {
$query = "select * from pembayaran where id_bayar='".mysqli_real_escape_string($conn, $_GET['id'])."'";  
$result = mysqli_query($conn, $query);  
$bayar = mysqli_fetch_array($result);  
?>

<h3>Pengeditan Data Pembayaran </h3>
<p>Untuk melakukan pengeditan, silahkan isi pada kolom yang disediakan.</p>
<form method="post" name="form1" action="index.php?file=proses_pembayaran_edit">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap="nowrap">Id Bayar:</td>
      <td width="67%" align="left" valign="middle"><input name="id_bayar" type="text" value="<?=$bayar['id_bayar'];?>" size="10" maxlength="10" readonly="readonly" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Nama Barang:</td>
      <td align="left" valign="middle"><input type="text" name="nama_barang" value="<?=$bayar['nama_barang'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">No Rekening:</td>
      <td align="left" valign="middle"><input type="text" name="no_rekening" value="<?=$bayar['no_rekening'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Nama Bank:</td>
      <td align="left" valign="middle"><input type="text" name="nama_bank" value="<?=$bayar['nama_bank'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Nominal Pembayaran:</td>
      <td align="left" valign="middle"><input type="text" name="nominal_pembayaran" value="<?=$bayar['nominal_pembayaran'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Id Pelanggan:</td>
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
      <td align="left" valign="middle"><button type="submit" class="button" >Simpan</button>
      <input name="Reset" type="reset" value="Simpan" /></td>
    </tr>
  </table>
</form>

<?php
} else {
echo"Akses ditolak !";
}
?>

