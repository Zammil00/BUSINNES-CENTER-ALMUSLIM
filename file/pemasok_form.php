<?php
if($_SESSION['level']=='user') {
?>
<script type="text/javascript">
function validasi_input(form){
  if (form.id_pemasok.value != ""){
  var x = (form.id_pemasok.value);
  var status = true;
  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
  for (i=0; i<=x.length-1; i++)
  {
  if (x[i] in list) cek = true;
  else cek = false;
 status = status && cek;
  }
  if (status == false)
  {
  alert("Kode barang harus angka!");
  form.id_pemasok.focus();
  return false;
  }
  }
 if (form.id_pemasok.value == ""){
    alert("Id pemasok masih kosong!");
    form.id_pemasok.focus();
    return (false);
  }
  if (form.nama_pemasok.value == ""){
    alert("Nama pemasok masih kosong!");
    form.nama_pemasok.focus();
    return (false);
  }
  if (form.email_pemasok.value == ""){
    alert("Email pemasok masih kosong!");
    form.email_pemasok.focus();
    return (false);
  }
  pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!pola_email.test(form.email_pemasok.value)){
    alert ('Penulisan Email tidak benar');
    form.email_pemasok.focus();
    return false;
  }
  if (form.alamat.value == ""){
    alert("Alamat masih kosong!");
    form.alamat.focus();
    return (false);
  }
  else {
  return (true);
  }
  }
 </script>

<h3>Penambahan Data Pemasok </h3>
<p>Untuk melakukan transaksi, silahkan isi pada kolom yang disediakan.</p>

<div class="form-wrapper" style="background:#fff; padding:30px; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.05); max-width:800px; margin:0 auto;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:20px;">Form Input Pemasok</h2>
<form method="post" name="form" onSubmit="return validasi_input(this)" action="index.php?file=pemasok_save">
  <table width="100%" align="center">
    <tr valign="baseline">
      <td width="33%" align="left" valign="middle" nowrap>Id. Pemasok:</td>
      <td width="67%" align="left" valign="middle"><input name="id_pemasok" type="text" value="" size="10" maxlength="10"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Nama Pemasok:</td>
      <td align="left" valign="middle"><input type="text" name="nama_pemasok" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Email Pemasok:</td>
      <td align="left" valign="middle"><input type="text" name="email_pemasok" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>Alamat:</td>
      <td align="left" valign="middle"><input type="text" name="alamat" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="middle" nowrap>&nbsp;</td>
      <td align="left" valign="middle"><input name="Submit" type="submit" value="Simpan">
      <button type="reset" class="button" style="background:#555;"  />Batal</button></td>
    </tr>
  </table>
</form>
</div>

<?php
} else {
echo"Akses ditolak !";
}
?>

