<?
include "koneksi.php";
$ip=$_SERVER['REMOTE_ADDR'];
$tgl=date("Y-m-d");
$query="select * from iphits where ip='$ip' and tanggal='$tgl'";
$runquery=mysqli_query($conn, $query) or die(mysqli_error($conn));
if(mysqli_num_rows($runquery)==0){
                $query="insert into iphits values('$ip','$tgl')";
                $runquery=mysqli_query($conn, $query) or die(mysqli_error($conn));
}

$select="select distinct ip,tanggal from iphits";
$runselect=mysqli_query($conn, $select) or die(mysqli_error($conn));
$hit=mysqli_num_rows($runselect);
echo "<font color='#000000' face='Maiandra GD'>".$hit.' Pengunjung
';
$num=strlen($hit);
$num_0=7-$num;
for($i=0;$i<$num_0;$i++){
                echo '';
}
for($i=0;$i<$num;$i++){
                $angka=substr("$hit",$i,1);
                echo '';
}
?>
