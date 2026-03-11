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
  if (form.kd_barang.value == "pilih"){
    alert("Kode barang masih kosong!");
    return (false);
  }
  if (form.hrg_barang.value == ""){
    alert("Harga barang masih kosong!");
    form.hrg_barang.focus();
    return (false);
  }
  if (form.picture.value == ""){
    alert("Foto barang masih kosong!");
    form.picture.focus();
    return (false);
  }
  else {
  return (true);
  }
  }
 </script>
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
-->
</style></head>

<body>
<h3> Penambahan Data Produk </h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>
<form action="index.php?file=produk_save" method="post" enctype="multipart/form-data" name="form" onSubmit="return validasi_input(this)">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="32%" align="left" valign="middle" nowrap>Kode Barang:</td>
      <td width="68%" align="left" valign="middle"><input name="kd_barang" type="text" value="" size="15" maxlength="10" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Nama Barang:</td>
      <td align="left" valign="middle"><input name="nm_barang" type="text" id="nm_barang" value="" size="32" onFocus="true"/></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Harga Barang:</td>
      <td align="left" valign="middle"><input type="text" name="hrg_barang" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Jumlah Barang:</td>
      <td align="left" valign="middle"><input type="text" name="jlh_brg" value="" size="32" id="jlh_brg" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Foto Barang:</td>
      <td align="left" valign="middle"><input name="picture" type="file" id="picture" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>&nbsp;</td>
      <td align="left" valign="middle"><input name="Submit" type="submit" value="Simpan">
      <input type="reset" value="Batal" /></td>
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
