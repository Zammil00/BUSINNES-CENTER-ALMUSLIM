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
<script type="text/javascript">
function validasi_input(form){
  if (form.no_permintaan.value == "pilih"){
    alert("No permintaan masih kosong!");
    return (false);
  }
  if (form.kd_barang.value == "pilih"){
    alert("Kode barang masih kosong!");
    return (false);
  }
  if (form.nm_barang.value == ""){
    alert("Nama barang masih kosong!");
    form.nm_barang.focus();
    return (false);
  }
  if (form.nama_pemasok.value == "pilih"){
    alert("Nama pemasok masih kosong!");
    return (false);
  }
  if (form.jml_Barang.value == ""){
    alert("Jumlah barang masih kosong!");
    form.jml_Barang.focus();
    return (false);
  }
  if (form.total_harga.value == ""){
    alert("Total harga masih kosong!");
    form.total_harga.focus();
    return (false);
  } 
  else {
  return (true);
  }
  }
 </script>

<h3>Penambahan Data Barang Masuk </h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>

<div class="form-wrapper" style="background:#fff; padding:30px; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.05); max-width:800px; margin:0 auto;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:20px;">Form Input Barang Masuk</h2>
<form method="post" name="form1" action="index.php?file=barang_masuk_save" onSubmit="return validasi_input(this)">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>No. Permintaan:</td>
      <td align="left" valign="middle"><select name="no_permintaan">
        <?php
   			echo "<option value=pilih>--Pilih--</option>";	
			$minta = "SELECT no_permintaan FROM permintaan";
			$eksekusi = mysqli_query($conn, $minta);
			while($hasil=mysqli_fetch_array($eksekusi))
			{
			   echo "<option value='".$hasil['no_permintaan']."'>".$hasil['no_permintaan']." </option>";		
			}	
		?>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Tgl. Barang Masuk</td>
      <td align="left" valign="middle"><span class="style15">
      <select name="tgl">
      <?
		for ($i=1; $i<=31; $i++) {
		$tg = ($i<10) ? "0$i" : $i;
		echo "<option value='$tg'>$tg</option>";	
		}
		?>
        </select>-
		<select name="bln">
  		<?
		for ($i=1; $i<=12; $i++) {
		$bl = ($i<10) ? "0$i" : $i;
		echo "<option value='$bl'>$bl</option>";	
		}
		?>
		</select>-<select name="thn">
  		<?
		for ($i=2011; $i<=2015; $i++) {
		echo "<option value='$i'>$i</option>";	
		}
		?>
		</select>
      </span></td>
    </tr>
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap>Kode Barang:</td>
      <td width="67%" align="left" valign="middle">
      <select name="kd_barang" id="kd_barang">
        <?php
   			echo "<option value=pilih>--Pilih--</option>";	
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
      <td align="left" valign="middle"><input name="nama_pemasok" type="text" id="nama_pemasok" value="" size="32" onFocus="true"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Jumlah Barang:</td>
      <td align="left" valign="middle"><input type="text" name="jml_Barang" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Total Harga:</td>
      <td align="left" valign="middle"><input type="text" name="total_harga" value="" size="32"></td>
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


