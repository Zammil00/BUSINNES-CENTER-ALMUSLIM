<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM pembayaran ORDER BY id_bayar");
?>

<table class="tabel-data">
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
    </table></td>
  </tr>
</table>

<?php
} else {
echo"Akses ditolak !";
}
?>
