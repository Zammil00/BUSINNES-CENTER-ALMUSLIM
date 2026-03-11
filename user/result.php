<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hasil Jajak Pendapat</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
}
-->
</style>    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>

<body>
Hasil jajak pendapat adalah sebagai berikut: <br />
<br />
<?
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$host = "localhost";
$user = "root";
$pswd = "";
$player = $_POST['player'];
$conn = @mysqli_connect($host, $user, $pswd)
or die("Koneksi gagal: " . mysqli_error($conn));
mysqli_select_db($conn, "bc");
// mengupdate suara
$strSQL = "update favplayer set suara=suara+1 where nama='$player'";
$upd = @mysqli_query($conn, $strSQL,$conn)
or die("Query salah: " . mysqli_error($conn));
// menghitung total suara
$strSQL = "select sum(suara) from favplayer";
$totsuara = @mysqli_query($conn, $strSQL,$conn)
or die("Query salah: " . mysqli_error($conn));
// menampilkan hasil dengan
// bantuan tabel HTML
echo "<table>";
$strSQL = "select * from favplayer";
$qry = @mysqli_query($conn, $strSQL,$conn)
or die("Query salah: " . mysqli_error($conn));
while ($row = mysqli_fetch_array($qry)) {
echo "<tr>";
echo "<td> $row[nama] </td>";
echo "<td>";
$pct = $row["suara"]/$totsuara;
echo "<img src='bar.gif' height='10' width='$pct'>";
echo "</td>";
echo "<td> $row[suara] </td>";
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
