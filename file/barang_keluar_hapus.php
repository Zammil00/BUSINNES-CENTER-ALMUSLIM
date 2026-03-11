<?php
include'koneksi.php';
$op = $_GET['op'];
if ($op == "delete")
{
$no_pemesan = $_GET['no_pemesan'];
$query = "DELETE FROM barang_keluar WHERE no_pemesan= '$no_pemesan'";
$hasil = mysqli_query($conn, $query);
?><script>document.location.href="index.php?file=barang_keluar_view"</script><?
}
?>

