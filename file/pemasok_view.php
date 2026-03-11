<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM pemasok ORDER BY id_pemasok");
?>


<div class="card-header" style="margin-bottom: 20px;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;">Data Pemasok</h2>
    <a href="index.php?file=pemasok_form" class="button" style="text-decoration:none; display:inline-block; margin-bottom:15px; background:#15A556;">+ Tambah Data Pemasok</a>
</div>
<div style="overflow-x:auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.05);"><table class="tabel-data">
      <tr>
        <th width="17%" height="33" align="center" valign="middle" >Id Pemasok </th>
        <th width="20%" align="center" valign="middle" >Nama Pemasok </th>
        <th width="20%" align="center" valign="middle" >Email Pemasok </th>
        <th width="29%" align="center" valign="middle" >Alamat</th>
        <th colspan="2" align="center" valign="middle" >Proses</th>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[id_pemasok]</td>
<td><center>$baris[nama_pemasok]</td>
<td><center>$baris[email_pemasok]</td>
<td><center>$baris[alamat]</td>";
?>
<td width="134" align="center"><a href="index.php?file=pemasok_edit&amp;id=<?=$baris['id_pemasok']?>">Edit</a></td>
<td width="133" align="center"><a href="index.php?file=pemasok_hapus&amp;op=delete&amp;id_pemasok=<?=$baris['id_pemasok']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
