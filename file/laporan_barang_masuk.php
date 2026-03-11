<?php
error_reporting (E_ALL ^ (E_WARNING | E_NOTICE));
if(isset($_GET['tgl_masuk']) && $_GET['tgl_masuk']){  
    include 'koneksi.php';  
    $tgl_masuk = $_GET['tgl_masuk'];  
    $sql = "select * from barang_masuk where tgl_masuk like '%$tgl_masuk%'";  
    $hasil = mysqli_query($conn, $sql);  
?>

<table class="tabel-data">
      <tr>
        <th width="12%" height="33" align="center" valign="middle" >No. Permintaan</th>
		<th width="14%" align="center" valign="middle" >Tgl. Masuk</th>
        <th width="14%" align="center" valign="middle" >Kode Barang </th>
        <th width="16%" align="center" valign="middle" >Nama Barang </th>
        <th width="19%" align="center" valign="middle" >Nama Pemasok</th>
        <th width="13%" align="center" valign="middle" >Jumlah Barang </th>
        <th width="13%" align="center" valign="middle" >Total Harga </th>
        </tr>
<?php 
while ($baris = mysqli_fetch_array($hasil)){ 
include "warna_tabel.php";
echo "
<tr bgcolor=$warna> 
<td><center>$baris[no_permintaan]</td>
<td><center>$baris[tgl_masuk]</td>
<td><center>$baris[kd_barang]</td>
<td><center>$baris[nm_barang]</td>
<td><center>$baris[nama_pemasok]</td>
<td><center>$baris[jml_Barang]</td>
<td><center>$baris[total_harga]</td>";
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
    <td><input class="noPrint" type="button" value="Cetak" onclick="javascript:window.print();"> <input class="noPrint" type="button" value="Tutup" onclick="javascript:window.close();"></td>
  </tr>
</table>

