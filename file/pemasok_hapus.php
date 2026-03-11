<?php
include'koneksi.php';
$op = $_GET['op'];
if ($op == "delete")
{
$id_pemasok = $_GET['id_pemasok'];
$query = "DELETE FROM pemasok WHERE id_pemasok = '$id_pemasok'";
$hasil = mysqli_query($conn, $query);
?><script>document.location.href="index.php?file=pemasok_view"</script><?
}
?>

