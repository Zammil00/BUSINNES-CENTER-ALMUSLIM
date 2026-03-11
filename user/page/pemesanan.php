<script src="jquery-latest.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
function slideSwitch() {
var $active = $('#slideshow DIV.active');
if ( $active.length == 0 ) $active = $('#slideshow DIV:last');
var $next = $active.next().length ? $active.next()
: $('#slideshow DIV:first');
$active.addClass('last-active');
$next.css({opacity: 0.0})
.addClass('active')
.animate({opacity: 1.0}, 1100, function() {
$active.removeClass('active last-active');
});
}
$(function() {
setInterval( "slideSwitch()", 4000 );
});
</script> 
<script>
function hitung() {
{
var jml_Barang = document.getElementById("jml_Barang").value;
var hrg_barang = document.getElementById("hrg_barang").value;
var total = (Math.round(jml_Barang) * Math.round(hrg_barang));
document.getElementById("total").value = total;
}
}
</script>
<script type="text/javascript">
function validasi_input(form){
  if (form.no_pemesan.value != ""){
  var x = (form.no_pemesan.value);
  var status = true;
  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
  for (i=0; i<=x.length-1; i++)
  {
  if (x[i] in list) cek = true;
  else cek = false;
 status = status && cek;
  }
  if (status == false)
  {
  alert("Id pelanggan harus angka!");
  form.no_pemesan.focus();
  return false;
  }
  }
 if (form.no_pemesan.value == ""){
    alert("Id pelanggan masih kosong!");
    form.no_pemesan.focus();
    return (false);
  }
  if (form.nama_pemesan.value == ""){
    alert("Nama pemesan masih kosong!");
    form.nama_pemesan.focus();
    return (false);
  }
  if (form.nama_Barang.value == "pilih"){
    alert("Pilih nama barang!");
    form.nama_Barang.focus();
    return (false);
  }
  if (form.jml_Barang.value == ""){
    alert("Jumlah barang masih kosong!");
    form.jml_Barang.focus();
    return (false);
  }
  if (form.harga_satuan.value == ""){
    alert("Harga satuan masih kosong!");
    form.harga_satuan.focus();
    return (false);
  }
  if (form.total.value == ""){
    alert("Total harga masih kosong!");
    form.total.focus();
    return (false);
  }
  else {
  return (true);
  }
  }
 </script>

<script type="text/javascript" src="assets/js/jquery-1.3.2.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){
			
			$("#nm_barang").change( function() {
	        $.ajax({
	            type: "POST",
	            data: "data_harga=" + $(this).val(),
	            url: "data.php",
	            success: function(msg){
	                if (msg != ''){
	                    $("#hrg_barang").val(msg);
	                }
	            }
		
	       });
	
	    });
		
	});
</script>
</script>
<? 
	session_start(); 
	include"koneksi.php";
	if(!isset($_SESSION['username_plg']) or !isset($_SESSION['password']))
{ 
   die("Mohon daftar atau login dulu !! <a href='/percetakan/user/index.php'>Kembali</a>"); 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pemesanan Produk</title>
<style type="text/css">
<!--
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
}
a:link {
	text-decoration: none;
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: underline;
	color: #990000;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
-->
</style>
<style type="text/css">
#slideshow {
	position:relative;
	height:300px;
	padding:0px;
	margin-top: 0px;
	margin-right: 0;
	margin-bottom: -10px;
	margin-left: 0;
}
#slideshow DIV {
position:absolute;
top:0;
left:0;
z-index:8;
opacity:0.0;
height: 200px;
background-color: #FFF;
    padding:0px;
    margin:0px;
}
#slideshow DIV.active {
z-index:10;
opacity:1.0;
}
#slideshow DIV.last-active {
z-index:9;
}
#slideshow DIV IMG {
height: 300px;
display: block;
border: 0;
margin-bottom: 0px;
}
body {
	background-image: url(../../img/page_t.jpg); background-attachment:fixed
}
.button {font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #FFFFFF;
	background-image: url(../img/menu.jpg);
	background-repeat: repeat-x;
	background-position: center top;
	width: 60px;
	padding: 1px;
	border: 1px solid #999999;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style2 {
	font-size: 18px;
	font-weight: bold;
}
.style9 {
	color: #FF0000;
	font-size: 10px;
}
.style8 {color: #FFFFFF}
</style> 
</head>
<body>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="36" colspan="2" bgcolor="#000000"><table width="98%" height="23" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><? include 'menu.php'; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="210" colspan="2">
<div id="slideshow">
<!-- Tambahkan gambar2 slide show disini -->
<div class="active"><img src="../gallery/1.jpg" width="960" height="300" /></div>
<div><img src="../gallery/2.jpg" /></div>
<div><img src="../gallery/3.jpg" /></div>
<div><img src="../gallery/4.jpg" /></div>
<div><img src="../gallery/5.jpg" /></div>
<div><img src="../gallery/6.jpg" /></div>
<div><img src="../gallery/7.jpg" /></div>
<div><img src="../gallery/8.jpg" /></div>
<div><img src="../gallery/9.jpg" /></div>
</div>	</td>
  </tr>
  <tr>
    <td height="16" colspan="2" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td width="24%" valign="top" bgcolor="#FFFFFF"><table width="229" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="24%" bgcolor="#FFFFFF"><? include 'poll.php'; ?></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><? include 'dat.php'; ?></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><? include 'hits.php'; ?></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
    </table></td>
    <td width="76%" valign="top" bgcolor="#FFFFFF"><table width="94%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="40" align="center"><span class="style2">Pemesanan Produk BUSINESS CENTER UNIVERSITAS ALMUSLIM</span> </td>
      </tr>
      <tr>
        <td height="29"><div align="justify">Silahkan isi form di bawah ini jika anda ingin memesan produk kami.. 
          </div></td>
      </tr>
      <tr>
        <td><fieldset><legend><strong>Form Pemesanan</strong></legend>
          <br />
          <form id="form" name="form" method="post" action="pemesanan_save.php" onSubmit="return validasi_input(this)">
            <table width="100%" align="center">
              <tr valign="baseline">
                <td width="33%" align="left" valign="middle" nowrap="nowrap">Nama Pemesan:</td>
                <td width="67%" align="left" valign="middle"><input type="text" name="nama_pemesan" value="" size="32" /></td>
              </tr>
              <tr valign="baseline">
                <td align="left" valign="middle" nowrap="nowrap">Nama Barang:</td>
                <td align="left" valign="middle">
           <select name="nm_barang" id="nm_barang">
           <?php
   			echo "<option value=pilih>--Pilih--</option>";	
			$minta = "SELECT nm_barang FROM produk";
			$eksekusi = mysqli_query($conn, $minta);
			while($hasil=mysqli_fetch_array($eksekusi))
			{
			   echo "<option value='".$hasil['nm_barang']."'>".$hasil['nm_barang']." </option>";		
			}	
			?>
            </select>                </td>
              </tr>
              <tr valign="baseline">
                <td align="left" valign="middle" nowrap="nowrap">Jumlah Barang:</td>
                <td align="left" valign="middle"><input name="jml_Barang" type="text" id='jml_Barang' onKeyUp="hitung()" value="0" size="5" /></td>
              </tr>
              <tr valign="baseline">
                <td align="left" valign="middle" nowrap="nowrap">Harga Satuan:</td>
                <td align="left" valign="middle"><input name="hrg_barang" type="text" id="hrg_barang" value="" size="32" onFocus="true" onKeyUp="hitung()"/></td>
              </tr>
              <tr valign="baseline">
                <td align="left" valign="middle" nowrap="nowrap">Total:</td>
                <td align="left" valign="middle"><input type="text" name="total" id='total' size="32" /></td>
              </tr>
              <tr valign="baseline">
                <td align="left" valign="middle" nowrap="nowrap">&nbsp;</td>
                <td align="left" valign="middle"><input name="Submit" type="submit" class="button" style="background-color:#666666" value="Kirim"/>
                  <input type="reset" class="button" style="background-color:#666666" value="Batal"/></td>
              </tr>
            </table>
            </form>
          </fieldset> </td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="41" colspan="2" align="center" background="../../img/menu.jpg"><span class="style8">Created by: Fitriani &copy; 2012<br />
Best viewed in Mozilla Firefox, Google Chrome, and Opera</span></td>
  </tr>
</table>
</body>
</html>
