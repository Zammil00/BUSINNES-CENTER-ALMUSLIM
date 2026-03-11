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
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>
<body>
<div class="app-container">
    <!-- Top Navigation Menu -->
    <nav class="frontend-nav">
        <?php include 'menu.php'; ?>
    </nav>
    
    <!-- Hero Slider -->
    <div id="slideshow">
        <div class="active"><img src="../uploads/gallery/1.jpg" alt="Slide 1" /></div>
        <div><img src="../uploads/gallery/2.jpg" alt="Slide 2" /></div>
        <div><img src="../uploads/gallery/3.jpg" alt="Slide 3" /></div>
        <div><img src="../uploads/gallery/4.jpg" alt="Slide 4" /></div>
        <div><img src="../uploads/gallery/5.jpg" alt="Slide 5" /></div>
        <div><img src="../uploads/gallery/6.jpg" alt="Slide 6" /></div>
        <div><img src="../uploads/gallery/7.jpg" alt="Slide 7" /></div>
        <div><img src="../uploads/gallery/8.jpg" alt="Slide 8" /></div>
        <div><img src="../uploads/gallery/9.jpg" alt="Slide 9" /></div>
    </div>

    <!-- Main Content Flex -->
    <div class="main-content-area">
        <!-- Sidebar Widgets -->
        <aside class="sidebar">
            <div style="margin-bottom: 25px;"><?php include 'reg.php'; ?></div>
            <div style="margin-bottom: 25px;"><?php include 'poll.php'; ?></div>
            <div style="margin-bottom: 25px;"><?php include 'dat.php'; ?></div>
            <div><?php include 'hits.php'; ?></div>
        </aside>
        
        <!-- Center Content -->
        <main class="page-content">
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
