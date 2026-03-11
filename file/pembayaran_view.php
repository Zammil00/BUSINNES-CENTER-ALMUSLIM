<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM pembayaran ORDER BY id_bayar");
?>


<div class="card-header" style="margin-bottom: 20px;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;">Data Pembayaran</h2>
    <a href="index.php?file=pembayaran_form" class="button" style="text-decoration:none; display:inline-block; margin-bottom:15px; background:#15A556;">+ Tambah Data Pembayaran</a>
</div>
<div style="overflow-x:auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.05);"><table class="tabel-data">
      <tr>
        <th width="149" height="33" align="center" valign="middle" >Id. Bayar  </th>
        <th width="188" align="center" valign="middle" >Nama Barang </th>
        <th width="234" align="center" valign="middle" >No. Rekening </th>
        <th width="261" align="center" valign="middle" >Nama Bank </th>
        <th width="253" align="center" valign="middle" >Nominal Pembayaran </th>
        <th width="175" colspan="2" align="center" valign="middle" >Proses</th>
      </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[id_bayar]</td>
<td><center>$baris[nama_barang]</td>
<td><center>$baris[no_rekening]</td>
<td><center>$baris[nama_bank]</td>
<td><center>$baris[nominal_pembayaran]</td>";
?>
<td width="149" align="center"><a href="index.php?file=pembayaran_hapus&amp;op=delete&amp;id_bayar=<?=$baris['id_bayar']?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</a></td>
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
