<?php if ($_SESSION['level']=='user'){ ?>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
a:link {
	text-decoration: none;
	color: #0000DD;
}
a:visited {
	text-decoration: none;
	color: #0000DD;
}
a:hover {
	text-decoration: underline;
	color: #006600;
}
a:active {
	text-decoration: none;
	color: #0000DD;
}
-->
</style>
<table border="0" width="100%">
<tr><td><h3 class="judul">Menu Admin </h3></td></tr>
<tr><td><img src="img/1.gif" width="9" height="9"><a href="index.php" title="Home">Home</a></td>
</tr>

<tr><td><img src="img/1.gif" width="9" height="9"><a href="index.php?file=permintaan_barang_view" title="Permintaan Barang">Permintaan Barang</a></td></tr>

<tr><td><img src="img/1.gif" width="9" height="9"><a href="index.php?file=barang_masuk_view" title="Barang Masuk">Barang Masuk</a></td>
</tr>
<tr><td><img src="img/1.gif" width="9" height="9"><a href="index.php?file=barang_keluar_view" title="Barang Keluar">Barang Keluar</a></td></tr>
<tr><td><img src="img/1.gif" width="9" height="9"><a href="index.php?file=produk_view" title="Produk">Produk</a></td></tr>
<tr>
  <td><img src="img/1.gif" width="9" height="9"><a href="index.php?file=pemesanan_view" title="Pemesanan">Pemesanan</a></td>
</tr>
<tr>
  <td><img src="img/1.gif" width="9" height="9"><a href="index.php?file=pembayaran_view" title="Pembayaran">Pembayaran</a></td>
</tr>

<tr>
  <td><img src="img/1.gif" width="9" height="9"><a href="index.php?file=pelanggan_view" title="Pelanggan">Pelanggan</a></td>
</tr>
</table>
<?php } 
if ($_SESSION['level']=='manager'){ ?>
<table border="0" width="100%">
<tr><td><h3 class="judul">Laporan</h3></td></tr>
<tr>
  <td><img src="img/1.gif" width="9" height="9"><a href="index.php" title="Home">Home</a></td>
</tr>
<tr>
  <td><img src="img/1.gif" width="9" height="9"><a href="./file/laporan_stok_barang.php" title="Stok Barang" target="_blank">Produk</a></td>
</tr>
<tr>
  <td><img src="img/1.gif" width="9" height="9"><a href="index.php?file=set_barang_masuk" title="Barang Masuk">Barang Masuk</a></td>
</tr>
<tr>
  <td><img src="img/1.gif" width="9" height="9"><a href="index.php?file=set_barang_keluar" title="Barang Keluar">Barang Keluar</a></td>
</tr>
</table>
<?php
}
?>
<table border="0" width="100%">
<tr><td><h3><a href="logout.php">Logout</a></h3></td></tr>
</table>
