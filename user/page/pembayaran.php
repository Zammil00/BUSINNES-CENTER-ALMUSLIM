<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include '../koneksi.php';

$success = false;
if (isset($_POST['submit'])) {
    $barang = mysqli_real_escape_string($conn, $_POST['barang']);
    $rekening = mysqli_real_escape_string($conn, $_POST['rekening']);
    $bank = mysqli_real_escape_string($conn, $_POST['bank']);
    $nominal = (int)$_POST['nominal'];
    
    $query = "INSERT INTO pembayaran (nama_barang, no_rekening, nama_bank, nominal_pembayaran) 
              VALUES ('$barang', '$rekening', '$bank', '$nominal')";
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
    <title>Konfirmasi Pembayaran | Business Center Universitas Almuslim</title>
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
        <h1>Konfirmasi Pembayaran</h1>
        <p style="margin-top:10px; opacity:0.9;">Lengkapi detail pembayaran Anda untuk verifikasi pesanan</p>
    </header>

    <main class="app-container" style="max-width:800px; margin:40px auto; padding:0 20px;">
        <div class="card-content">
            <?php if ($success): ?>
                <div style="background:#E6F4EA; border-left:5px solid #15A556; padding:20px; border-radius:8px; margin-bottom:30px; color:#0C6136;">
                    <h3 style="margin-bottom:10px;">Konfirmasi Terkirim!</h3>
                    <p>Terima kasih. Kami akan segera memvalidasi pembayaran Anda dalam waktu 1x24 jam.</p>
                </div>
            <?php endif; ?>

            <form action="pembayaran.php" method="POST">
                <div class="form-group">
                    <label>Nama Produk / No. Pesanan</label>
                    <input type="text" name="barang" placeholder="Contoh: Cetak Undangan / Order #123" required>
                </div>
                
                <div class="form-group">
                    <label>Nomor Rekening Pengirim</label>
                    <input type="text" name="rekening" placeholder="Masukkan nomor rekening Anda..." required>
                </div>

                <div class="form-group">
                    <label>Nama Bank Pengirim</label>
                    <input type="text" name="bank" placeholder="Contoh: Bank BSI / Mandiri / BRI" required>
                </div>

                <div class="form-group">
                    <label>Nominal Pembayaran (Rp)</label>
                    <input type="number" name="nominal" placeholder="Masukkan jumlah yang ditransfer..." required>
                </div>

                <div style="background:#f9f9f9; padding:20px; border-radius:8px; margin-bottom:30px; border:1px dashed #ccc;">
                    <p style="font-size:14px; color:#666; margin-bottom:10px;">Transfer dikirim ke Rekening Resmi:</p>
                    <h4 style="color:#0C6136; font-size:18px;">Bank BSI: 7120-000-000</h4>
                    <p style="font-size:14px; font-weight:700;">A/N: BUSINESS CENTER ALMUSLIM</p>
                </div>

                <button type="submit" name="submit" class="button" style="width:100%; padding:15px; font-size:16px;">Kirim Konfirmasi Pembayaran</button>
            </form>
        </div>
    </main>

    <footer class="modern-footer">
        <h2>Business Center Universitas Almuslim</h2>
        <div style="margin-top:10px; border-top:1px solid rgba(255,255,255,0.2); padding-top:15px; font-size:13px;">
            Created by: FADHIL &copy; <?php echo date("Y"); ?>
        </div>
    </footer>
</body>
</html>
