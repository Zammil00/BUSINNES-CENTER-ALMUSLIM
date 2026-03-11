<?php
if($_SESSION['level']=='manager') {
?>

<h3>Laporan  Barang Keluar</h3>
<p>Untuk mendata barang keluar, silahkan tentukan tanggal barang keluar.</p>
<table width="637" border="0" align="left" cellpadding="0" cellspacing="0" bordercolor="#DDDDDD" bgcolor="#FFFFFF">
  <tr>
    <th height="19" align="left">
      <form action="index.php" method="get" name="form" id="form">
        <input type="hidden" name="file" value="laporan_barang_keluar">
        Tanggal:
        <input name="tgl_pemesanan" class="tcal" id="tgl_pemesanan" value="<?php echo date ('Y-m-d');?>" size="10" />
        <button type="submit" class="button" name="Submit">Ok</button>
      </form>
    </th>
  </tr>
  <tr>
    <td align="left" valign="middle"></td>
  </tr>
</table>

<?php
} else {
echo"Akses ditolak !";
}
?>


