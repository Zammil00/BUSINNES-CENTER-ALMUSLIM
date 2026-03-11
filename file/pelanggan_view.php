<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM pelanggan ORDER BY id_plg");
?>


<div class="card-header" style="margin-bottom: 20px;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;">Data Pelanggan</h2>
    <a href="index.php?file=pelanggan_form" class="button" style="text-decoration:none; display:inline-block; margin-bottom:15px; background:#15A556;">+ Tambah Data Pelanggan</a>
</div>
<div style="overflow-x:auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.05);"><table class="tabel-data">
      <tr>
        <th width="140" height="33" align="center" valign="middle" >Id Pelanggan </th>
        <th width="154" align="center" valign="middle" >Username</th>
        <th width="160" align="center" valign="middle" >Nama Pelanggan </th>
        <th width="187" align="center" valign="middle" >Alamat</th>
        <th width="197" align="center" valign="middle" >Email</th>
        <th width="165" align="center" valign="middle" >Telpon/HP</th>
        <th width="182" colspan="2" align="center" valign="middle" >Proses</th>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[id_plg]</td>
<td><center>$baris[username_plg]</td>
<td><center>$baris[nm_pelanggan]</td>
<td><center>$baris[alamat]</td>
<td><center>$baris[email]</td>
<td><center>$baris[notelp_plg]</td>";
?>
<td width="154" align="center"><a href="index.php?file=pelanggan_hapus&amp;op=delete&amp;id_plg=<?=$baris['id_plg']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
