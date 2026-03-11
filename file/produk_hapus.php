<?php
include'koneksi.php';
$op = $_GET['op'];
if ($op == "delete")
{
$kd_barang = $_GET['kd_barang'];
$query = "DELETE FROM produk WHERE kd_barang = '$kd_barang'";
$hasil = mysql_query($query);
?><script>document.location.href="index.php?file=produk_view"</script><?
}
?>
