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
<title>Produk BUSINESS CENTER UNIVERSITAS ALMUSLIM</title>
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
}
a:hover {
	text-decoration: underline;
	color: #990000;
}
a:active {
	text-decoration: none;
}
.tabel {
	border: 1px solid #CCCCCC;
	border-collapse: collapse;
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
	background-image: url(../../img/page_t.jpg);
	background-attachment:fixed;
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
.style82 {font-family: "Arial Narrow"}
.style8 {color: #FFFFFF}
.style83 {
	font-size: 16px;
	font-weight: bold;
}
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
        <td height="40" align="center"><span class="style83">Daftar Produk BUSINESS CENTER UNIVERSITAS ALMUSLIM</span> </td>
      </tr>
      <tr>
        <td><style type="text/css">
div.pagination {
	padding: 3px;
	margin: 3px;
}
 
div.pagination a {
	padding: 2px 5px 2px 5px;
	margin: 2px;
	border: 1px solid #AAAADD;
 
	text-decoration: none; /* no underline */
	color: #000099;
}
div.pagination a:hover, div.pagination a:active {
	border: 1px solid #000099;
 
	color: #000;
}
div.pagination span.current {
	padding: 2px 5px 2px 5px;
	margin: 2px;
		border: 1px solid #000099;
 
		font-weight: bold;
		background-color: #000099;
		color: #FFF;
	}
	div.pagination span.disabled {
		padding: 2px 5px 2px 5px;
		margin: 2px;
		border: 1px solid #FFF;
 
		color: #DDD;
	}
    </style>
            <?php
error_reporting (E_ALL ^ (E_NOTICE | E_WARNING));
include'koneksi.php';
 
	$tbl_name="produk";		//nama tabelnya
	// Halaman yang akan ditampilkan untuk pertengahan?
	$adjacents = 3;
 
	$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages['num'];
 
	/* variabel query. */
	$targetpage = "produk.php"; 	//nama file  (nama file ini)
	$limit = 5; 								//berapa yang akan ditampilkan setiap halaman
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			
	else
		$start = 0;					//halaman awal
 
 
	$sql = "SELECT * FROM $tbl_name LIMIT $start, $limit";
	$result = mysql_query($sql);
 
 
	if ($page == 0) $page = 1;	//jika variabel kosong maka defaultnya halaman pertama.
	$prev = $page - 1;		//halaman sebelumnya
	$next = $page + 1;		//halaman berikutnya
	$lastpage = ceil($total_pages/$limit);		
	$lpm1 = $lastpage - 1;						
 
 
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//Link halaman sebelumnya
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">&laquo; Sebelumnya</a>";
		else
			$pagination.= "<span class=\"disabled\">&laquo; Sebelumnya</span>";	
 
		//halaman
		if ($lastpage < 7 + ($adjacents * 2))	
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
 
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
 
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
 
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
 
		//link halaman selanjutnya
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">Selanjutnya &raquo;</a>";
		else
			$pagination.= "<span class=\"disabled\">Selanjutnya &raquo;</span>";
		$pagination.= "</div>\n";		
	}
?></td>
      </tr>
      <tr>
        <td><table width="100%" border="1" bordercolor="#CCCCCC" class="tabel">
            <tr>
              <td width="36%" height="37" align="center" valign="middle" bgcolor="#F1EE91"><strong>Nama Produk </strong></td>
              <td width="34%" align="center" valign="middle" bgcolor="#F1EE91"><strong>Harga Produk </strong></td>
              <td width="30%" align="center" valign="middle" bgcolor="#F1EE91"><strong>Gambar</strong></td>
            </tr>
            <?php 
while ($row = mysql_fetch_array($result)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$row[nm_barang]</td>
<td><center>$row[hrg_barang]</td>
<td><center><span class=image><img src='/percetakan/foto/$row[foto]' width='150' height='80' border=0></span></td>";
?>
            <?php } ?>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style82">
          <?=$pagination?>
        </span></td>
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
<?php
mysql_free_result($t);
?>
