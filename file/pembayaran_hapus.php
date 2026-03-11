<?php
include'koneksi.php';
$op = $_GET['op'];
if ($op == "delete")
{
$id_bayar = $_GET['id_bayar'];
$query = "DELETE FROM pembayaran WHERE id_bayar= '$id_bayar'";
$hasil = mysqli_query($conn, $query);
?><script>document.location.href="index.php?file=pembayaran_view"</script><?
}
?>

