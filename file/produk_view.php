<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM produk ORDER BY kd_barang");
?>


<div class="card-header" style="margin-bottom: 20px;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;">Data Produk</h2>
    <a href="index.php?file=produk_form" class="button" style="text-decoration:none; display:inline-block; margin-bottom:15px; background:#15A556;">+ Tambah Data Produk</a>
</div>
<div style="overflow-x:auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.05);"><table class="tabel-data">
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
<td><center><img src='/businnes-center/uploads/foto/$baris[foto]' style='width:50px; height:50px; object-fit:cover; border-radius:5px; border:1px solid #ddd;' onerror=\"this.src='https://via.placeholder.com/50';\" alt='Produk'></td>";
?>
<td width="134" align="center"><a href="index.php?file=produk_edit&amp;id=<?=$baris['kd_barang']?>">Edit</a></td>
<td width="133" align="center"><a href="index.php?file=produk_hapus&amp;op=delete&amp;kd_barang=<?=$baris['kd_barang']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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

