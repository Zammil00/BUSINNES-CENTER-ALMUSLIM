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
$query = "select * from produk where kd_barang='".mysqli_real_escape_string($conn, $_GET['id'])."'";  
$result = mysqli_query($conn, $query);  
$produk = mysqli_fetch_array($result);  
?>

<h3>Pengeditan Data Produk </h3>
<p>Untuk melakukan pengeditan, silahkan isi pada kolom yang disediakan.</p>
<form action="index.php?file=proses_produk_edit" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap="nowrap">Kode Barang:</td>
      <td width="67%" align="left" valign="middle"><input name="kd_barang" type="text" value="<?=$produk['kd_barang'];?>" size="15" maxlength="10" readonly="readonly"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Nama Barang:</td>
      <td align="left" valign="middle"><input name="nm_barang" type="text" id="nm_barang" value="<?=$produk['nm_barang'];?>" size="32" onFocus="true"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Jumlah Barang</td>
      <td align="left" valign="middle"><input type="text" name="jlh_brg" value="<?=$produk['jlh_brg'];?>" size="32" id="jlh_brg" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Harga Barang:</td>
      <td align="left" valign="middle"><input type="text" name="hrg_barang" value="<?=$produk['hrg_barang'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap="nowrap">Foto Barang:</td>
      <td align="left" valign="middle"><input name="picture" type="file" id="picture" size="32"/></td>
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
