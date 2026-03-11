<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include '../koneksi.php';

$success = false;
if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $barang = mysqli_real_escape_string($conn, $_POST['barang']);
    $jumlah = (int)$_POST['jumlah'];
    $harga = (int)$_POST['harga'] ?: 0;
    $total = $jumlah * $harga;
    
    $query = "INSERT INTO pemesanan (nama_pemesan, nm_barang, jml_Barang, hrg_barang, total) 
              VALUES ('$nama', '$barang', '$jumlah', '$harga', '$total')";
    if (mysqli_query($conn, $query)) {
        $success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Barang | Business Center Universitas Almuslim</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
    <style>
        .form-group { margin-bottom: 20px; text-align: left; }
        .form-group label { display: block; font-weight: 600; margin-bottom: 8px; color: #333; }
        .form-group input, .form-group select { 
            width: 100%; padding: 12px; border: 1px solid #ddd; 
            border-radius: 8px; font-family: inherit; font-size: 14px;
        }
    </style>
</head>
<body style="background: #F4F8F5;">
    <!-- Frontend Nav -->
    <nav class="frontend-nav">
        <?php include '../menu.php'; ?>
        <a href="/businnes-center/login.php" style="background:#0C6136; margin-left:auto;">Login Admin</a>
    </nav>
    
    <header class="inner-header">
        <h1>Form Pemesanan</h1>
        <p style="margin-top:10px; opacity:0.9;">Pesan produk pilihan Anda dengan mudah dan cepat</p>
    </header>

    <main class="app-container" style="max-width:800px; margin:40px auto; padding:0 20px;">
        <div class="card-content">
            <?php if ($success): ?>
                <div style="background:#E6F4EA; border-left:5px solid #15A556; padding:20px; border-radius:8px; margin-bottom:30px; color:#0C6136;">
                    <h3 style="margin-bottom:10px;">Pemesanan Berhasil!</h3>
                    <p>Terima kasih telah melakukan pemesanan. Kami akan segera memproses pesanan Anda.</p>
                </div>
            <?php endif; ?>

            <form action="pemesanan.php" id="orderForm" method="POST">
                <div class="form-group">
                    <label>Nama Pemesan</label>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap Anda..." required>
                </div>
                
                <div class="form-group">
                    <label>Produk yang Dipesan</label>
                    <select name="barang" id="productSelect" required>
                        <option value="">-- Pilih Produk --</option>
                        <?php
                        $products = mysqli_query($conn, "SELECT nm_barang, hrg_barang FROM produk");
                        while($p = mysqli_fetch_array($products)) {
                            echo "<option value='{$p['nm_barang']}' data-harga='{$p['hrg_barang']}'>{$p['nm_barang']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" id="jumlahInput" value="1" min="1" required>
                    </div>
                    <div class="form-group">
                        <label>Harga Satuan (Rp)</label>
                        <input type="number" id="hargaDisplay" readonly style="background:#f9f9f9; color:#666;">
                        <input type="hidden" name="harga" id="hargaHidden">
                    </div>
                </div>

                <div style="background:#f0f7f2; padding:20px; border-radius:8px; margin-bottom:30px;">
                    <div style="display:flex; justify-content:space-between; align-items:center;">
                        <span style="font-weight:600; color:#555;">Estimasi Total:</span>
                        <span id="totalDisplay" style="font-size:24px; font-weight:800; color:#0C6136;">Rp 0</span>
                    </div>
                </div>

                <button type="submit" name="submit" class="button" style="width:100%; padding:15px; font-size:16px;">Kirim Pesanan Sekarang</button>
            </form>
        </div>
    </main>

    <script>
        const select = document.getElementById('productSelect');
        const count = document.getElementById('jumlahInput');
        const hDisp = document.getElementById('hargaDisplay');
        const hHidden = document.getElementById('hargaHidden');
        const tDisp = document.getElementById('totalDisplay');

        function update() {
            const opt = select.options[select.selectedIndex];
            const prc = opt.dataset.harga ? parseInt(opt.dataset.harga) : 0;
            const qty = parseInt(count.value) || 0;
            const ttl = prc * qty;

            hDisp.value = prc;
            hHidden.value = prc;
            tDisp.textContent = 'Rp ' + ttl.toLocaleString('id-ID');
        }

        select.addEventListener('change', update);
        count.addEventListener('input', update);
    </script>

    <footer class="modern-footer">
        <h2>Business Center Universitas Almuslim</h2>
        <div style="margin-top:10px; border-top:1px solid rgba(255,255,255,0.2); padding-top:15px; font-size:13px;">
            Created by: FADHIL &copy; <?php echo date("Y"); ?>
        </div>
    </footer>
</body>
</html>
