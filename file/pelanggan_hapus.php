<?php
include'koneksi.php';
$op = $_GET['op'];
if ($op == "delete")
{
$id_plg = $_GET['id_plg'];
$query = "DELETE FROM pelanggan WHERE id_plg = '$id_plg'";
$hasil = mysqli_query($conn, $query);
?><script>document.location.href="index.php?file=pelanggan_view"</script><?
}
?>
