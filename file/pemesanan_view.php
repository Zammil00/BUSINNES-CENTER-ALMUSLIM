<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM pemesanan ORDER BY no_pemesan");
?>


<div class="card-header" style="margin-bottom: 20px;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;">Data Pemesanan</h2>
    <a href="index.php?file=pemesanan_form" class="button" style="text-decoration:none; display:inline-block; margin-bottom:15px; background:#15A556;">+ Tambah Data Pemesanan</a>
</div>
<div style="overflow-x:auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.05);"><table class="tabel-data">
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
</table></div></div></td>
  </tr>
</table></div>

<?php
} else {
echo"Akses ditolak !";
}
?>
