<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM stok_barang ORDER BY kd_barang");
?>


<div class="card-header" style="margin-bottom: 20px;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;">Data Stok Barang</h2>
    <a href="index.php?file=stok_barang_form" class="button" style="text-decoration:none; display:inline-block; margin-bottom:15px; background:#15A556;">+ Tambah Data Stok Barang</a>
</div>
<div style="overflow-x:auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.05);"><table class="tabel-data">
      <tr>
        <th width="17%" height="28" align="center" valign="middle" >Kode Barang</th>
        <th width="27%" align="center" valign="middle" >Nama Barang </th>
        <th width="20%" align="center" valign="middle" >Harga Stok </th>
        <th width="18%" align="center" valign="middle" >Jumlah Stok </th>
        <th colspan="2" align="center" valign="middle" >Proses</th>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[hrg_stok]</td>
<td><center>$baris[jml_stok]</td>";
?>
  <td width="50" align="center"><a href="index.php?file=stok_barang_edit&amp;id=<?=$baris['kd_barang']?>">Edit</a></td>
<td width="50" align="center"><a href="index.php?file=stok_barang_hapus&amp;op=delete&amp;kd_barang=<?=$baris['kd_barang']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
  </tr>
  <?php
}
?>
    </table></div></div></td>
  </tr>
</table></div>

<?php
} else {
echo"Akses ditolak !";
}
?>
