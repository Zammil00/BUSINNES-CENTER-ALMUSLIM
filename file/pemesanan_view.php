<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM pemesanan ORDER BY no_pemesan");
?>

<table class="tabel-data">
      <tr>
        <th width="12%" height="33" align="center" valign="middle" >No. Pemesanan</th>
        <th width="14%" align="center" valign="middle" >Nama Pemesan </th>
        <th width="18%" align="center" valign="middle" >Nama Barang </th>
        <th width="16%" align="center" valign="middle" >Jumlah Barang </th>
        <th width="14%" align="center" valign="middle" >Harga Barang </th>
        <th width="13%" align="center" valign="middle" >Total</th>
        <th colspan="2" align="center" valign="middle" >Proses</th>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[no_pemesan]</td>
<td><center>$baris[nama_pemesan]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[jml_Barang]</td>
<td><center>$baris[hrg_barang]</td>
<td><center>$baris[total]</td>";
?>
<td width="133" align="center"><a href="index.php?file=pemesanan_hapus&amp;op=delete&amp;no_pemesan=<?=$baris['no_pemesan']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
