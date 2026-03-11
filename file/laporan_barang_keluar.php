<?php
error_reporting (E_ALL ^ (E_WARNING | E_NOTICE));
if(isset($_GET['tgl_pemesanan']) && $_GET['tgl_pemesanan']){  
    include 'koneksi.php';  
    $tgl_pemesanan = $_GET['tgl_pemesanan'];  
    $sql = "select * from barang_keluar where tgl_pemesanan like '%$tgl_pemesanan%'";  
    $hasil = mysqli_query($conn, $sql);  
?>

<table class="tabel-data">
      <tr>
        <th width="146" height="33" align="center" valign="middle" >No. Pemesan </th>
        <th width="146" align="center" valign="middle" >Tgl. Pemesanan </th>
        <th width="145" align="center" valign="middle" >Kode Barang </th>
        <th width="167" align="center" valign="middle" >Nama Barang </th>
        <th width="163" align="center" valign="middle" >Jumlah Barang</th>
        <th width="154" align="center" valign="middle" >Total Harga </th>
        <th width="203" align="center" valign="middle" >Nama Pelanggan </th>
        </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[no_pemesan]</td>
<td><center>$baris[tgl_pemesanan]</td>
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[jml_barang]</td>
<td><center>$baris[total_harga]</td>
<td><center>$baris[nm_pelanggan]</td>";
?>
<?php } ?>
    </table></td>
  </tr>
  <tr>
    <td align="center"><?php  
if(mysqli_num_rows($hasil) > 0){
    }else{  
       echo "<font color=red><blink>Tidak ada data yang dicari!</blink></font>";
    }  
}  
?></td>
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
    <td><input name="button" type="button" class="noPrint" onclick="javascript:window.print();" value="Cetak" />
        <input name="button2" type="button" class="noPrint" onclick="javascript:window.close();" value="Tutup" /></td>
  </tr>
</table>


