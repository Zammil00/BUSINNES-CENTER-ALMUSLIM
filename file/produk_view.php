<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM produk ORDER BY kd_barang");
?>

<table class="tabel-data">
      <tr>
        <th width="18%" height="33" align="center" valign="middle" >Kode Barang  </th>
        <th width="21%" align="center" valign="middle" >Nama Barang </th>
        <th width="21%" align="center" valign="middle" >Jumlah Barang </th>
        <th width="21%" align="center" valign="middle" >Harga Barang </th>
        <th width="25%" align="center" valign="middle" >Foto</th>
        <th colspan="2" align="center" valign="middle" >Proses</th>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[jlh_brg]</td>
<td><center>$baris[hrg_barang]</td>
<td><center>$baris[foto]</td>";
?>
<td width="134" align="center"><a href="index.php?file=produk_edit&amp;id=<?=$baris['kd_barang']?>">Edit</a></td>
<td width="133" align="center"><a href="index.php?file=produk_hapus&amp;op=delete&amp;kd_barang=<?=$baris['kd_barang']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
