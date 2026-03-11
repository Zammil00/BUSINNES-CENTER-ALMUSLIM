<?php
session_start(); 
include"koneksi.php";
if(!isset($_SESSION['username_plg']) or !isset($_SESSION['password'])) { 
   die("Mohon daftar atau login dulu !! <a href='/businnes-center/user/index.php'>Kembali ke Home</a>"); 
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Dashboard | Business Center Universitas Almuslim</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
    <style>
        .member-container { max-width: 1200px; margin: 40px auto; padding: 0 20px; display: grid; grid-template-columns: 280px 1fr; gap: 30px; }
        .member-sidebar { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); height: fit-content; }
        .member-content { background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .member-header { background: #0C6136; color: white; padding: 20px 40px; border-radius: 12px; margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center; }
    </style>
</head>
<body style="background: #F4F8F5;">
    <!-- Frontend Nav -->
    <nav class="frontend-nav">
        <?php include 'menu.php'; ?>
        <a href="../logout.php" style="background:#d32f2f; margin-left:auto;">Logout Member</a>
    </nav>

    <div style="max-width:1200px; margin:40px auto; padding:0 20px;">
        <div class="member-header">
            <div>
                <h2 style="margin:0;">Dashboard Member</h2>
                <p style="margin:5px 0 0 0; opacity:0.8; font-size:14px;">Selamat datang kembali, <?php echo $_SESSION['username_plg']; ?>!</p>
            </div>
            <img src="/businnes-center/assets/images/logo%20almuslim.jpg" style="height:40px;" alt="Logo">
        </div>

        <div class="member-container">
            <aside class="member-sidebar">
                <h3 style="color:#0C6136; margin-bottom:20px; border-bottom:2px solid #eee; padding-bottom:10px;">Menu Utama</h3>
                <nav style="display:flex; flex-direction:column; gap:10px;">
                    <a href="index.php" class="button" style="text-align:left; background:#15A556;">Beranda Member</a>
                    <a href="produk.php" class="button" style="text-align:left; background:#fff; color:#333; border:1px solid #ddd; box-shadow:none;">Katalog Produk</a>
                    <a href="pemesanan.php" class="button" style="text-align:left; background:#fff; color:#333; border:1px solid #ddd; box-shadow:none;">Buat Pesanan Baru</a>
                    <a href="pembayaran.php" class="button" style="text-align:left; background:#fff; color:#333; border:1px solid #ddd; box-shadow:none;">Konfirmasi Bayar</a>
                </nav>

                <div style="margin-top:40px;">
                    <h3>Statistik Anda</h3>
                    <div style="margin-top:15px; background:#f9f9f9; padding:15px; border-radius:8px;">
                        <?php include 'hits.php'; ?>
                    </div>
                </div>
            </aside>

            <main class="member-content">
                <h2 style="color:#0C6136; margin-bottom:20px;">Informasi Layanan</h2>
                <div style="text-align:justify; line-height:1.7; color:#555;">
                    <p style="margin-bottom:15px;">Halo <strong><?php echo $_SESSION['username_plg']; ?></strong>, melalui area member ini Anda dapat memantau produk terbaru dan melakukan transaksi dengan lebih cepat.</p>
                    
                    <h3 style="color:#15A556; margin-top:30px; margin-bottom:10px;">Keuntungan Member</h3>
                    <ul style="margin-left:20px; margin-bottom:20px;">
                        <li>Prioritas pengerjaan untuk setiap pesanan cetak.</li>
                        <li>Riwayat pemesanan yang tercatat rapi di database kami.</li>
                        <li>Akses informasi promo eksklusif Business Center.</li>
                    </ul>

                    <p>Silakan gunakan menu di sebelah kiri untuk mulai menjelajahi layanan kami. Jika ada kendala, jangan ragu untuk menghubungi tim teknis kami melalui halaman Kontak.</p>
                </div>

                <div style="margin-top:40px; padding-top:30px; border-top:1px solid #eee; display:grid; grid-template-columns:1fr 1fr; gap:20px;">
                    <div style="background:#f0f7f2; padding:20px; border-radius:10px;">
                        <h4 style="color:#0C6136;">Ada Poling Baru!</h4>
                        <div style="margin-top:10px; font-size:14px;">
                            <?php include 'poll.php'; ?>
                        </div>
                    </div>
                    <div style="background:#fdf9f0; padding:20px; border-radius:10px;">
                        <h4 style="color:#a67c00;">Agenda Kampus</h4>
                        <div style="margin-top:10px; font-size:14px;">
                            <?php include 'dat.php'; ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <footer class="modern-footer">
        <h2>Business Center Universitas Almuslim</h2>
        <p style="margin-top:5px; opacity:0.7; font-size:13px;">Created by: FADHIL &copy; <?php echo date("Y"); ?></p>
    </footer>
</body>
</html>


