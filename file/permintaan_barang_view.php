<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM permintaan ORDER BY no_permintaan");
?>

<table class="tabel-data">
        <tr>
          <th width="18%" height="30" align="center" valign="middle" >No. Permintaan</th>
          <th width="26%" align="center" valign="middle" >Tgl. Permintaan </th>
          <th width="38%" align="center" valign="middle" >Nama Pemasok </th>
          <th colspan="2" align="center" valign="middle" >Proses</th>
        </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[no_permintaan]</td>
<td><center>$baris[tgl_permintaan]</td>
<td><center>$baris[nama_pemasok]</td>";
?>
<td width="50" align="center"><a href="index.php?file=permintaan_barang_edit&amp;id=<?=$baris['no_permintaan']?>">Edit</a></td>
<td width="50" align="center"><a href="index.php?file=permintaan_barang_hapus&amp;op=delete&amp;no_permintaan=<?=$baris['no_permintaan']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
</tr>
<?php } ?>
</table></td>
  </tr>
</table>

<?php
} else {
echo"Akses ditolak !";
}
?>
