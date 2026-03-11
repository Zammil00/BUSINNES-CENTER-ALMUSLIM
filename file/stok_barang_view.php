<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM stok_barang ORDER BY kd_barang");
?>

<table class="tabel-data">
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
    </table></td>
  </tr>
</table>

<?php
} else {
echo"Akses ditolak !";
}
?>
