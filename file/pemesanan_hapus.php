<?php
include'koneksi.php';
$op = $_GET['op'];
if ($op == "delete")
{
$no_pemesan = $_GET['no_pemesan'];
$query = "DELETE FROM pemesanan WHERE no_pemesan= '$no_pemesan'";
$hasil = mysql_query($query);
?><script>document.location.href="index.php?file=pemesanan_view"</script><?
}
?>
