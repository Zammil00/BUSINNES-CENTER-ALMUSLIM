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
   die("Mohon daftar atau login dulu !! <a href='/businnes-center/user/index.php'>Kembali</a>"); 
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
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>
<body>
<div class="app-container">
    <!-- Top Navigation Menu -->
    <nav class="frontend-nav">
        <?php include '../menu.php'; ?>
    </nav>
    
    <!-- Hero Slider -->
    <div id="slideshow">
        <div class="active"><img src="../../uploads/gallery/1.jpg" alt="Slide 1" /></div>
        <div><img src="../../uploads/gallery/2.jpg" alt="Slide 2" /></div>
        <div><img src="../../uploads/gallery/3.jpg" alt="Slide 3" /></div>
        <div><img src="../../uploads/gallery/4.jpg" alt="Slide 4" /></div>
        <div><img src="../../uploads/gallery/5.jpg" alt="Slide 5" /></div>
        <div><img src="../../uploads/gallery/6.jpg" alt="Slide 6" /></div>
        <div><img src="../../uploads/gallery/7.jpg" alt="Slide 7" /></div>
        <div><img src="../../uploads/gallery/8.jpg" alt="Slide 8" /></div>
        <div><img src="../../uploads/gallery/9.jpg" alt="Slide 9" /></div>
    </div>

    <!-- Main Content Flex -->
    <div class="main-content-area">
        <!-- Sidebar Widgets -->
        <aside class="sidebar">
            <div style="margin-bottom: 25px;"><?php include '../reg.php'; ?></div>
            <div style="margin-bottom: 25px;"><?php include '../poll.php'; ?></div>
            <div style="margin-bottom: 25px;"><?php include '../dat.php'; ?></div>
            <div><?php include '../hits.php'; ?></div>
        </aside>
        
        <!-- Center Content -->
        <main class="page-content">
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
            </main>
    </div>
    
    <!-- Footer -->
    <footer class="modern-footer">
        Created by: FADHIL &copy; <?php echo date("Y"); ?><br />
        Best viewed in Google Chrome, Mozilla Firefox, and Safari <br/>
        Business Center Universitas Almuslim
    </footer>
</div>
</body>
</html>
