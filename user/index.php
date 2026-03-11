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
<title>Selamat Datang di Website BUSINESS CENTER UNIVERSITAS ALMUSLIM</title>
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
        <td height="40" align="center"><span class="style2">Selamat Datang di Website BUSINESS CENTER UNIVERSITAS ALMUSLIM</span> </td>
      </tr>
      <tr>
        <td><div align="justify"><span class="style5">Bisnis Percetakan</span> <br />
              Percetakan merupakan salah satu peluang bisnis yang bisa mendatangkan keuntungan   besar secara cepat. Hal ini karena bisnis ini bukan sekedar menjual   produk, namun lebih mengedepankan menjual kepercayaan dan kepuasan   pelanggan.<br />
            <br />
              Dikatakan menjual kepercayaan, karena pada bisnis biasanya   kita akan dihadapkan pada pembuatan dokumen penting sebuah instansi.   Dengan menjaga kepercayaan akan rahasia dokumen tersebut, maka kita akan   mendapatkan kredibilitas di mata konsumen dan dianggap mampu menjaga   kepercayaan yang diberikan.<br />
              <br />
              Berbeda jika kita berbuat sebaliknya, dengan membocorkan dokumen yang dimiliki instansi tersebut. Bukan tidak mungkin<strong> </strong>percetakan yang kita rintis hanya akan seumur jagung, sebab tidak akan   ada pelanggan yang mau mencetakkan dokumen mereka pada perusahaan kita.   Jika ini terjadi, kerugianlah yang akan didapatkan. Itulah mengapa   dikatakan bahwa dalam bisnis ini terdapat unsur bisnis kepercayaan.<br />
              <br />
              Jika kepercayaan dari sudah berhasil diraih, hal itu merupakan separuh dari kunci sukses   bisnis percetakan. Selain itu, beberapa trik dalam menjalankan bisnis   ini akan meningkatkan perolehan laba perusahaan.<br />
              <span class="style6"><br />
              <span class="style7">Tips Bisnis Percetakan</span></span><br />
              Beberapa tips yang bisa dilakukan dalam menjalankan bisnis percetakan di antaranya adalah :<br />
                <ol start="1" type="1">
                  <li>Bagi pengusaha yang memiliki keterbatasan,   tidak perlu memaksakan diri untuk memiliki mesin cetak. Kita cukup   menjalankan proses pra cetak, mulai dari pencarian konsumen, desain   cetakan, pembelian bahan baku hingga proses mastering materi cetak.                     Karena jika kita memaksakan membeli mesin cetak, selain menambah biaya   produksi kita akan dibebani dengan ongkos perawatan mesin dan <a href="http://www.anneahira.com/contoh-surat-keterangan-gaji.htm" title="contoh surat keterangan gaji"></a> seorang operator mesin cetak tersebut. Akan lebih baik jika kita   bekerja sama dengan percetakan besar untuk melakukan proses akhir   percetakan.</li>
                  <li>Efisienkan   penggunaan bahan baku. Tidak semua proses cetak akan menggunakan   seluruh bagian kertas. Bagian yang belum terpakai bisa digunakan untuk   membuat cetakan kecil. Sehingga kita bisa menggunakan satu kali proses cetak untuk mengerjakan   dua atau tiga pesanan sekaligus. Ini akan menghemat biaya produksi dan   meningkatkan perolehan laba.
                  <br />
              </li>
                </ol>
                </div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="41" colspan="2" align="center" background="../img/menu.jpg"><span class="style8">Created by: Fitriani &copy; 2012<br />
Best viewed in Mozilla Firefox, Google Chrome, and Opera</span></td>
  </tr>
</table>
</body>
</html>
