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
        <td height="40" align="center"><span class="style2">Kontak Kami </span> </td>
      </tr>
      <tr>
        <td><div align="justify">Hubungi: <strong>Admin</strong> <br />
              </div></td>
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
