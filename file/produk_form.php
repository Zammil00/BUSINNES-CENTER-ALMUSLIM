<?php
if($_SESSION['level']=='user') {
?>

<div class="card-header" style="margin-bottom: 20px;">
    <h2 style="color:var(--primary-green); border-bottom:2px solid var(--accent-green); padding-bottom:10px; margin-bottom:15px;">Tambah Data Produk Baru</h2>
    <p>Gunakan formulir ini untuk mendaftarkan inventaris produk baru ke dalam sistem.</p>
</div>

<div class="form-wrapper" style="max-width: 600px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
    <form action="index.php?file=produk_save" method="post" enctype="multipart/form-data">
        <div style="margin-bottom: 20px;">
            <label style="display:block; font-weight:600; margin-bottom:8px; color:#333;">Kode Barang</label>
            <input name="kd_barang" type="text" placeholder="Contoh: ATK-001" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px;" required>
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display:block; font-weight:600; margin-bottom:8px; color:#333;">Nama Produk</label>
            <input name="nm_barang" type="text" placeholder="Masukkan nama barang lengkap..." style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px;" required>
        </div>

        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:20px; margin-bottom: 20px;">
            <div>
                <label style="display:block; font-weight:600; margin-bottom:8px; color:#333;">Jumlah Stok Awal</label>
                <input type="number" name="jlh_brg" value="0" min="0" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px;" required>
            </div>
            <div>
                <label style="display:block; font-weight:600; margin-bottom:8px; color:#333;">Harga Jual (Rp)</label>
                <input type="number" name="hrg_barang" placeholder="0" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px;" required>
            </div>
        </div>

        <div style="margin-bottom: 30px;">
            <label style="display:block; font-weight:600; margin-bottom:8px; color:#333;">Unggah Foto Produk</label>
            <input name="picture" type="file" style="font-size:14px;" required>
            <small style="color:#888; display:block; margin-top:5px;">*Format: JPG, PNG, atau JPEG.</small>
        </div>

        <div style="display:flex; gap:15px; border-top:1px solid #eee; padding-top:20px;">
            <button type="submit" name="Submit" class="button" style="flex:2; padding:12px;">Simpan Inventaris</button>
            <a href="index.php?file=produk_view" class="button" style="flex:1; background:#666; text-align:center; text-decoration:none; padding:12px;">Batal</a>
        </div>
    </form>
</div>

<?php
} else {
    echo "<div class='error-alert'>Akses ditolak!</div>";
}
?>


