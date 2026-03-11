<script src="http://code.jquery.com/jquery-latest.js"></script>
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
<title>Untitled Document</title>
<style type="text/css">
#slideshow {
position:relative;
height:200px;
    padding:0px;
    margin:10px 0 -30px 0;
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
height: 200px;
display: block;
border: 0;
margin-bottom: 0px;
}
</style>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><!-- Sesuaikan style dengan desain halaman anda -->

<div id="slideshow">
<!-- Tambahkan gambar2 slide show disini -->
<div class="active"><img src="assets/img/banner.jpg" alt="Produk Bisnis Online" width="206" /></div>
<div><img src="assets/img/bg.jpg" alt="Penghasilan dari Internet" width="206" /></div>
<div><img src="assets/img/printing_terminal_logo.png" alt="Bisnis online" /></div>
<div><img src="assets/img/page_t.jpg" alt="Mencari uang" width="206" /></div>
</div></td>
  </tr>
</table>
</body>
</html>
