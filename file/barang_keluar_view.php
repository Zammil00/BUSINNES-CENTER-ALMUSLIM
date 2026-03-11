<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM barang_keluar ORDER BY no_pemesan");
?>

<table class="tabel-data">
      <tr>
        <th width="134" height="33" align="center" valign="middle" >No. Pemesan </th>
        <th width="133" align="center" valign="middle" >Kode Barang </th>
        <th width="154" align="center" valign="middle" >Nama Barang </th>
        <th width="150" align="center" valign="middle" >Jumlah Barang</th>
        <th width="142" align="center" valign="middle" >Total Harga </th>
        <th width="128" align="center" valign="middle" >Tgl. Pemesanan </th>
        <th width="190" align="center" valign="middle" >Nama Pelanggan </th>
        <th width="148" colspan="2" align="center" valign="middle" >Proses</th>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[no_pemesan]</td>
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[jml_barang]</td>
<td><center>$baris[total_harga]</td>
<td><center>$baris[tgl_pemesanan]</td>
<td><center>$baris[nm_pelanggan]</td>";
?>
<td width="134" align="center"><a href="index.php?file=barang_keluar_edit&amp;id=<?=$baris['no_pemesan']?>">Edit</a></td>
<td width="133" align="center"><a href="index.php?file=barang_keluar_hapus&amp;op=delete&amp;no_pemesan=<?=$baris['no_pemesan']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
