<?php
if($_SESSION['level']=='user') {
    include_once "koneksi.php"; 
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "SELECT * FROM produk WHERE kd_barang='$id'";  
    $result = mysqli_query($conn, $query);  
    $produk = mysqli_fetch_array($result);  

    if (!$produk) {
        echo "<div class='error-alert'>Produk tidak ditemukan!</div>";
        exit;
    }
?>

<div class="card-header" style="margin-bottom: 20px;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;">Edit Data Produk</h2>
    <p>Silakan perbarui detail produk melalui formulir di bawah ini.</p>
</div>

<div class="form-wrapper" style="max-width: 600px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
    <form action="index.php?file=proses_produk_edit" method="post" enctype="multipart/form-data">
        <div style="margin-bottom: 20px;">
            <label style="display:block; font-weight:600; margin-bottom:8px; color:#333;">Kode Barang (Readonly)</label>
            <input name="kd_barang" type="text" value="<?php echo $produk['kd_barang'];?>" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; background:#f5f5f5;" readonly>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display:block; font-weight:600; margin-bottom:8px; color:#333;">Nama Produk</label>
            <input name="nm_barang" type="text" value="<?php echo $produk['nm_barang'];?>" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px;" required>
        </div>

        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:20px; margin-bottom: 20px;">
            <div>
                <label style="display:block; font-weight:600; margin-bottom:8px; color:#333;">Jumlah Stok</label>
                <input type="number" name="jlh_brg" value="<?php echo $produk['jlh_brg'];?>" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px;" required>
            </div>
            <div>
                <label style="display:block; font-weight:600; margin-bottom:8px; color:#333;">Harga (Rp)</label>
                <input type="number" name="hrg_barang" value="<?php echo $produk['hrg_barang'];?>" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px;" required>
            </div>
        </div>

        <div style="margin-bottom: 30px;">
            <label style="display:block; font-weight:600; margin-bottom:8px; color:#333;">Ganti Foto Produk</label>
            <div style="display:flex; align-items:center; gap:20px;">
                <?php if ($produk['foto']): ?>
                    <img src="uploads/foto/<?php echo $produk['foto']; ?>" style="width:60px; height:60px; object-fit:cover; border-radius:8px; border:1px solid #eee;">
                <?php endif; ?>
                <input name="picture" type="file" style="font-size:14px;">
            </div>
            <small style="color:#888; display:block; margin-top:5px;">*Biarkan kosong jika tidak ingin mengubah foto.</small>
        </div>

        <div style="display:flex; gap:15px; border-top:1px solid #eee; padding-top:20px;">
            <button type="submit" name="Submit" class="button" style="flex:2; padding:12px;">Simpan Perubahan</button>
            <a href="index.php?file=produk_view" class="button" style="flex:1; background:#666; text-align:center; text-decoration:none; padding:12px;">Batal</a>
        </div>
    </form>
</div>

<?php
} else {
    echo "<div class='error-alert'>Akses ditolak!</div>";
}
?>
