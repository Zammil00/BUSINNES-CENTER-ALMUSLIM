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
$query = "select * from barang_masuk where no_permintaan='".mysqli_real_escape_string($conn, $_GET['id'])."'";  
$result = mysqli_query($conn, $query);  
$masuk = mysqli_fetch_array($result);  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style17 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
-->
</style></head>

<body>
<h3>Pengeditan Data Barang Masuk </h3>
<p>Untuk melakukan pengeditan, silahkan isi pada kolom yang disediakan.</p>
<form method="post" name="form1" action="index.php?file=proses_barang_masuk_edit">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>No. Permintaan:</td>
      <td align="left" valign="middle"><input name="no_permintaan" type="text" id="no_permintaan" value="<?=$masuk['no_permintaan'];?>" size="15" readonly="readonly"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Tgl. Masuk Barang</td>
      <td align="left" valign="middle"><?php list($thn,$bln,$tgl) = explode ("-",$masuk ['tgl_masuk']); ?>
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
      <td width="33%" align="left" valign="middle" nowrap>Kode Barang:</td>
      <td width="67%" align="left" valign="middle"><select name="kd_barang" id="kd_barang">
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
      <td align="left" valign="middle" nowrap>Nama Barang:</td>
      <td align="left" valign="middle"><input name="nm_barang" type="text" id="nm_barang" value="" size="32" onFocus="true"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Nama Pemasok:</td>
      <td align="left" valign="middle"><input name="nama_pemasok" type="text" id="nama_pemasok" value="<?=$masuk['nama_pemasok'];?>" size="32" onFocus="true"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Jumlah Barang:</td>
      <td align="left" valign="middle"><input type="text" name="jml_Barang" value="<?=$masuk['jml_Barang'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Total Harga:</td>
      <td align="left" valign="middle"><input type="text" name="total_harga" value="<?=$masuk['total_harga'];?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>&nbsp;</td>
      <td align="left" valign="middle"><input type="submit" value="Simpan">
      <input name="Reset" type="reset" value="Batal" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
} else {
echo"Akses ditolak !";
}
?>
