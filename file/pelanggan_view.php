<?php
include "koneksi.php";
if($_SESSION['level']=='user') {
$hasil = mysqli_query($conn, "SELECT * FROM pelanggan ORDER BY id_plg");
?>

<table class="tabel-data">
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
    </table></td>
  </tr>
</table>

<?php
} else {
echo"Akses ditolak !";
}
?>
