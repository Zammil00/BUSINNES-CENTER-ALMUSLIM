<?php
include'koneksi.php';
$op = $_GET['op'];
if ($op == "delete")
{
$no_permintaan = $_GET['no_permintaan'];
$query = "DELETE FROM barang_masuk WHERE no_permintaan= '$no_permintaan'";
$hasil = mysql_query($query);
?><script>document.location.href="index.php?file=barang_masuk_view"</script><?
}
?>
