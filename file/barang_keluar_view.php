<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM barang_keluar ORDER BY no_pemesan");
?>


<div class="card-header" style="margin-bottom: 20px;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;">Data Barang Keluar</h2>
    <a href="index.php?file=barang_keluar_form" class="button" style="text-decoration:none; display:inline-block; margin-bottom:15px; background:#15A556;">+ Tambah Data Barang Keluar</a>
</div>
<div style="overflow-x:auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.05);"><table class="tabel-data">
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
</table></div></div></td>
  </tr>
</table></div>

<?php
} else {
echo"Akses ditolak !";
}
?>
