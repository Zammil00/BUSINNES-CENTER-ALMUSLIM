<?php
error_reporting (E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
$hasil = mysqli_query($conn, "SELECT * FROM produk ORDER BY kd_barang");
?>

<table class="tabel-data">
      <tr>
        <th width="17%" height="28" align="center" valign="middle" >Kode Barang</th>
        <th width="27%" align="center" valign="middle" >Nama Barang </th>
        <th width="20%" align="center" valign="middle" >Harga Barang</th>
        <th width="18%" align="center" valign="middle" >Jumlah Barang </th>
        </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[jlh_brg]</td>
<td><center>$baris[hrg_barang]</td>";
?>
<?php } ?>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><table width="20%" height="94" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="94" align="center" valign="top">Pimpinan BUSINESS CENTER UNIVERSITAS ALMUSLIM<br />
          <br />
          <br />
          <br />
          <br />
          <strong>Alamsyah Nour</strong> </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td><input class="noPrint" type="button" value="Cetak" onclick="javascript:window.print();"> <input class="noPrint" type="button" value="Tutup" onclick="javascript:window.close();"></td>
  </tr>
</table>


