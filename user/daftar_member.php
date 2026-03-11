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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Silahkan Daftar Member Anda</title>
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
	background-image: url(../img/page_t.jpg); background-attachment:fixed
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
.style5 {font-size: 16px; font-weight: bold; color: #009999; }
.style6 {color: #009999}
.style7 {
	font-size: 16px;
	font-weight: bold;
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
        <td bgcolor="#FFFFFF"><? include 'reg.php'; ?></td>
      </tr>
      <tr>
        <td width="24%" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><? include 'poll.php'; ?></td>
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
        <td height="40" align="center"><span class="style2">Daftar Member </span> </td>
      </tr>
      <tr>
        <td height="28">Silahkan isi form di bahwa ini untuk mendaftar member di website kami... </td>
      </tr>
      <tr>
        <td><form name="form1" method="post" action="pelanggan_save.php">
          <table width="100%" align="center">
            <tr valign="baseline">
              <td width="33%" align="left" valign="middle" nowrap>Id Pelanggan:</td>
              <td width="67%" align="left" valign="middle"><input name="id_plg" type="text" value="" size="10" maxlength="10"></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>Username:</td>
              <td align="left" valign="middle"><input type="text" name="username_plg" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>Password:</td>
              <td align="left" valign="middle"><input type="password" name="password" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>Nama Pelanggan:</td>
              <td align="left" valign="middle"><input type="text" name="nm_pelanggan" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>Alamat:</td>
              <td align="left" valign="middle"><input type="text" name="alamat" value="" size="50"></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>Email:</td>
              <td align="left" valign="middle"><input type="text" name="email" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>Telpon/HP</td>
              <td align="left" valign="middle"><input type="text" name="notelp_plg" value="" size="32"></td>
            </tr>
            <tr valign="baseline">
              <td align="left" valign="middle" nowrap>&nbsp;</td>
              <td align="left" valign="middle"><input name="Submit" type="submit" class="button" style="background-color:#666666" value="Daftar"/>
                <input name="reset" type="reset" class="button" style="background-color:#666666" value="Batal"/></td>
            </tr>
          </table>
                </form>
        </td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="41" colspan="2" align="center" background="../assets/img/menu.jpg"><span class="style8">Created by: Fitriani &copy; 2012<br />
Best viewed in Mozilla Firefox, Google Chrome, and Opera</span></td>
  </tr>
</table>
</body>
</html>
