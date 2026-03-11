<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM barang_masuk ORDER BY no_permintaan");
?>

<table class="tabel-data">
        <tr>
          <th width="12%" height="33" align="center" valign="middle" >No. Permintaan</th>
          <th width="14%" align="center" valign="middle" >Tgl. Masuk</th>
          <th width="14%" align="center" valign="middle" >Kode Barang</th>
          <th width="16%" align="center" valign="middle" >Nama Barang</th>
          <th width="19%" align="center" valign="middle" >Nama Pemasok</th>
          <th width="13%" align="center" valign="middle" >Jumlah Barang </th>
          <th width="13%" align="center" valign="middle" >Total Harga </th>
          <th colspan="2" align="center" valign="middle" >Proses</th>
        </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[no_permintaan]</td>
<td><center>$baris[tgl_masuk]</td>
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[nama_pemasok]</td>
<td><center>$baris[jml_Barang]</td>
<td><center>$baris[total_harga]</td>";
?>
<td width="50" align="center"><a href="index.php?file=barang_masuk_edit&amp;id=<?=$baris['no_permintaan']?>">Edit</a></td>
<td width="50" align="center"><a href="index.php?file=barang_masuk_hapus&amp;op=delete&amp;no_permintaan=<?=$baris['no_permintaan']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
