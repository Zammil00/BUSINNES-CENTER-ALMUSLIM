<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | Business Center Universitas Almuslim</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>
<body style="background: #F4F8F5;">
    <!-- Frontend Nav -->
    <nav class="frontend-nav">
        <?php include 'menu.php'; ?>
        <a href="/businnes-center/login.php" style="background:#0C6136; margin-left:auto;">Login Admin</a>
    </nav>
    
    <header class="inner-header">
        <h1>Tentang Kami</h1>
        <p style="margin-top:10px; opacity:0.9;">Mengenal Lebih Dekat Business Center Universitas Almuslim</p>
    </header>

    <main class="app-container" style="max-width:1000px; margin:40px auto; padding:0 20px;">
        <div class="card-content">
            
            <div style="display:grid; grid-template-columns: 250px 1fr; gap:40px; align-items:start;">
                <div style="text-align:center;">
                    <img src="../assets/img/mesin cetak.jpg" style="width:100%; border-radius:15px; box-shadow:0 10px 20px rgba(0,0,0,0.1); border:5px solid #fff;" alt="Mesin Cetak">
                    <p style="margin-top:15px; font-style:italic; font-size:13px; color:#777;">Fasilitas Mesin Cetak Handal</p>
                </div>
                
                <div style="text-align:justify; line-height:1.8; color:#444;">
                    <h2 style="color:#0C6136; margin-bottom:15px; border-left:5px solid #15A556; padding-left:15px;">Sejarah & Visi</h2>
                    <p style="margin-bottom:15px;">Di zaman modern seperti sekarang ini, teknologi internet dapat memberikan kemudahan dalam memenuhi sebagian kebutuhan kita. Apalagi saat ini internet sudah bisa diakses dengan mudah dan semakin murah. Kemudahan tersebut diantaranya ada yang memanfaatkan internet untuk proses belajar, dan banyak juga yang memanfaatkannya untuk berbelanja.</p>
                    
                    <p style="margin-bottom:15px;">Sehubungan dengan hal tersebut, berbekal pengalaman yang kami miliki selama ini di bidang <strong>Business Center</strong>, mendorong kami untuk turut serta memanfaatkan teknologi internet ini dalam memperkenalkan produk dan percetakan kami secara global.</p>
                    
                    <p style="margin-bottom:15px;">Kami berlokasi di <strong>Bireuen</strong> dan siap mencetak semua kebutuhan cetak anda. Usaha ini telah kami rintis sejak tahun 2002 dengan fokus utama pada produk cetak buku, brosur, kartu undangan, nota, dan segala jenis cetakan berbahan kertas lainnya.</p>
                    
                    <div style="margin-top:30px; background:#f0f7f2; padding:30px; border-radius:12px; border:1px solid #15A556;">
                        <h4 style="color:#0C6136; margin-bottom:10px;">Komitmen Layanan</h4>
                        <p style="font-size:14px; margin-bottom:0;">Kami melayani order pribadi, perorangan, hingga instansi perkantoran baik swasta maupun pemerintah. Seluruh layanan dikelola secara profesional untuk memastikan kualitas hasil cetak terbaik bagi mitra kami.</p>
                    </div>
                </div>
            </div>

            <div style="margin-top:50px; text-align:center; padding:40px; border-top:1px solid #eee;">
                <h3 style="color:#0C6136; margin-bottom:20px;">Siap Memulai Pesanan Anda?</h3>
                <a href="page/produk.php" class="button" style="text-decoration:none; padding:15px 40px; font-size:16px;">Jelajahi Katalog Produk</a>
            </div>

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
