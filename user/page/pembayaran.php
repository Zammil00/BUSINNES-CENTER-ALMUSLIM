<script src="jquery-latest.js"></script>
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

<script type="text/javascript">
function validasi_input(form){
  if (form.id_bayar.value != ""){
  var x = (form.id_bayar.value);
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
  alert("Id bayar harus angka!");
  form.id_bayar.focus();
  return false;
  }
  }
 if (form.id_bayar.value == ""){
    alert("Id bayar masih kosong!");
    form.id_bayar.focus();
    return (false);
  }
 if (form.nama_barang.value == "pilih"){
    alert("Pilih nama barang!");
    form.nama_barang.focus();
    return (false);
  }
  if (form.no_rekening.value == ""){
    alert("No rekening masih kosong!");
    form.no_rekening.focus();
    return (false);
  }
  if (form.nama_bank.value == ""){
    alert("Nama bank masih kosong!");
    form.nama_bank.focus();
    return (false);
  }
  if (form.nominal_pembayaran.value == ""){
    alert("Nominal pembayaran masih kosong!");
    form.nominal_pembayaran.focus();
    return (false);
  }
  if (form.id_plg.value == ""){
    alert("Id pelanggan masih kosong!");
    form.id_plg.focus();
    return (false);
  }
  else {
  return (true);
  }
  }
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
<title>Pembayaran Produk BUSINESS CENTER UNIVERSITAS ALMUSLIM</title>
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
.style8 {color: #FFFFFF}
.style9 {
	font-size: 16px;
	font-weight: bold;
}
.style10 {	color: #FF0000;
	font-size: 10px;
}
.style12 {font-size: 11px}
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
    <td width="76%" valign="top" bgcolor="#FFFFFF"><table width="94%" align="center">
      <tr>
        <td height="40" colspan="2" align="center"><span class="style9">Pembayaran Produk BUSINESS CENTER UNIVERSITAS ALMUSLIM </span></td>
        </tr>
      <tr>
        <td colspan="2"><form name="form" method="post" action="pembayaran_save.php" onSubmit="return validasi_input(this)">
          <table width="100%" align="center">
            <tr valign="baseline">
              <td width="33%" align="left" valign="middle" nowrap>Nama Barang:</td>
              <td width="67%" align="left" valign="middle"><select name="nama_barang" id="nama_barang">
                <?php
   			echo "<option value=pilih>--Pilih--</option>";	
			$minta = "SELECT nm_barang FROM produk";
			$eksekusi = mysqli_query($conn, $minta);
			while($hasil=mysqli_fetch_array($eksekusi))
			{
			   echo "<option value='".$hasil['nm_barang']."'>".$hasil['nm_barang']." </option>";		
			}	
			?>
                            </select></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>No Rekening:</td>
              <td align="left" valign="middle"><input type="text" name="no_rekening" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>Nama Bank:</td>
              <td align="left" valign="middle"><input type="text" name="nama_bank" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>Nominal Pembayaran:</td>
              <td align="left" valign="middle"><input type="text" name="nominal_pembayaran" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>&nbsp;</td>
              <td align="left" valign="middle"><input name="Submit" type="submit" value="Simpan">
                  <input name="reset" type="reset" value="Batal" /></td>
            </tr>
          </table>
                </form>        </td>
        </tr>
      <tr>
        <td width="31%">&nbsp;</td>
        <td width="69%">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="justify"><span class="style12">Setelah anda mentransfer uang anda ke no rekening yang telah tertera di bawah ini, mohon di isi form di atas yang telah kami sediakan untuk kami konfirmasi. </span></div></td>
      </tr>
      <tr>
        <td colspan="2"><strong>Rekening Mandiri </strong></td>
        </tr>
      <tr>
        <td>No rekening </td>
        <td>: 144.00.1318906.0</td>
      </tr>
      <tr>
        <td>Atas Nama</td>
        <td>: Iwan Kelana</td>
      </tr>
      <tr>
        <td>KCP</td>
        <td>: Bireuen </td>
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
