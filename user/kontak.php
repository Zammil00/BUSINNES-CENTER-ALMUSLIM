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
<title>Kontak Kami BUSINESS CENTER UNIVERSITAS ALMUSLIM</title>
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
        <td height="40" align="center"><span class="style2">Kontak Kami </span> </td>
      </tr>
      <tr>
        <td><div align="justify">Hubungi: <strong>Admin</strong> <br />
              </div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" colspan="2" align="center" background="../img/menu.jpg"><span class="style8">Created by: Fitriani &copy; 2012<br />
Best viewed in Mozilla Firefox, Google Chrome, and Opera</span></td>
  </tr>
</table>
</body>
</html>
