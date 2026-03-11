<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM permintaan ORDER BY no_permintaan");
?>


<div class="card-header" style="margin-bottom: 20px;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;">Data Permintaan Barang</h2>
    <a href="index.php?file=permintaan_barang_form" class="button" style="text-decoration:none; display:inline-block; margin-bottom:15px; background:#15A556;">+ Tambah Data Permintaan Barang</a>
</div>
<div style="overflow-x:auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.05);"><table class="tabel-data">
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
</table></div></div></td>
  </tr>
</table></div>

<?php
} else {
echo"Akses ditolak !";
}
?>
