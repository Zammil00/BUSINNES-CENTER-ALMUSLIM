<?php
if($_SESSION['level']=='user') {
?>
<script type="text/javascript" src="assets/js/jquery-1.3.2.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){
			
			$("#kd_barang").change( function() {
	        $.ajax({
	            type: "POST",
	            data: "data_barang=" + $(this).val(),
	            url: "data.php",
	            success: function(msg){
	                if (msg != ''){
	                    $("#nm_barang").val(msg);
	                }
	            }
		
	       });
	
	    });
		
	});
</script>
</script>
<?php  
include"koneksi.php"; 
$query = "select * from barang_keluar where no_pemesan='".mysqli_real_escape_string($conn, $_GET['id'])."'";  
$result = mysqli_query($conn, $query);  
$keluar = mysqli_fetch_array($result);  
?>

<h3>Pengeditan Data Barang Keluar </h3>
<p>Untuk melakukan pengeditan, silahkan isi pada kolom yang disediakan.</p>
<form method="post" name="form1" action="index.php?file=proses_barang_keluar_edit">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap="nowrap">No. Pemesan:</td>
      <td align="left" valign="middle"><input name="no_pemesan" type="text" id="no_pemesan" value="<?=$keluar['no_pemesan'];?>" size="15" readonly="readonly"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Kode Barang:</td>
      <td align="left" valign="middle"><select name="kd_barang" id="kd_barang">
        <?php
   			echo "<option value=not_kode>--- Pilih---</option>";	
			$minta = "SELECT kd_barang FROM produk";
			$eksekusi = mysqli_query($conn, $minta);
			while($hasil=mysqli_fetch_array($eksekusi))
			{
			   echo "<option value='".$hasil['kd_barang']."'>".$hasil['kd_barang']." </option>";		
			}	
		?>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Nama Barang:</td>
      <td align="left" valign="middle"><input name="nm_barang" type="text" id="nm_barang" value="<?=$keluar['nm_barang'];?>" size="32" onfocus="true"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Jumlah Barang:</td>
      <td align="left" valign="middle"><input type="text" name="jml_barang" value="<?=$keluar['jml_barang'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Total Harga:</td>
      <td align="left" valign="middle"><input type="text" name="total_harga" value="<?=$keluar['total_harga'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Tgl. Pemesanan:</td>
      <td align="left" valign="middle"><?php list($thn,$bln,$tgl) = explode ("-",$keluar ['tgl_pemesanan']); ?>
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
					for ($i=2011; $i<=2015; $i++) {
						$sele = ($i==$thn)?"selected" : "";
						echo "<option value='$i' $sele>$i</option>";	
					}
				?>
</select></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Nama Pelanggan:</td>
      <td align="left" valign="middle"><select name="nm_pelanggan" id="nm_pelanggan">
        <?php
   			echo "<option value=not_kode>--- Pilih Pelanggan---</option>";	
			$minta = "SELECT nm_pelanggan FROM pelanggan";
			$eksekusi = mysqli_query($conn, $minta);
			while($hasil=mysqli_fetch_array($eksekusi))
			{
			   echo "<option value='".$hasil['nm_pelanggan']."'>".$hasil['nm_pelanggan']." </option>";		
			}	
		?>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>&nbsp;</td>
      <td align="left" valign="middle"><input name="Submit" type="submit" value="Simpan">
      <button type="reset" class="button" style="background:#555;"  />Batal</button></td>
    </tr>
  </table>
</form>

<?php
} else {
echo"Akses ditolak !";
}
?>

