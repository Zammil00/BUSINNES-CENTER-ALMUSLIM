<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Business Center Universitas Almuslim</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
    <script src="jquery-latest.js"></script>
    <script type="text/javascript">
        function slideSwitch() {
            var $active = $('#slideshow DIV.active');
            if ( $active.length == 0 ) $active = $('#slideshow DIV:last');
            var $next = $active.next().length ? $active.next() : $('#slideshow DIV:first');
            $active.addClass('last-active');
            $next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0}, 1100, function() {
                $active.removeClass('active last-active');
            });
        }
        $(function() { setInterval("slideSwitch()", 4000); });
    </script> 
    <style>
        .hero-section {
            position: relative; height: 500px;
            display: flex; align-items: center; justify-content: center;
            color: white; text-align: center; overflow: hidden;
            box-shadow: inset 0 0 100px rgba(0,0,0,0.5);
            margin-bottom: -15px; border-bottom: 5px solid #15A556;
        }
        .hero-content {
            position: relative; z-index: 100;
            background: rgba(12, 97, 54, 0.85); padding: 40px 60px;
            border-radius: 16px; backdrop-filter: blur(10px);
            max-width: 800px;
        }
        .hero-content h1 { font-size: 36px; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;}
        .hero-content p { font-size: 16px; margin-bottom: 30px; line-height: 1.6;}
        
        .hero-images { position: absolute; top:0; left:0; width:100%; height:100%; z-index:1; }
        .hero-images div { position:absolute; top:0; left:0; width:100%; height:100%; opacity:0; transition:opacity 1s; }
        .hero-images div.active { opacity:1; z-index:10; }
        .hero-images img { width:100%; height:100%; object-fit:cover; filter: brightness(0.6); }
        
        /* Modernized frontend Layout */
        .landing-container { max-width: 1200px; margin: 50px auto; padding: 0 20px;}
        .info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px; }
        .info-card { background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center;}
        .info-card h3 { color: #0C6136; margin-bottom: 15px; }
        
        .widgets-section {
            display: flex; flex-wrap: wrap; gap: 20px; justify-content: space-around;
            background: #E6F4EA; padding: 40px 20px; border-radius: 12px; margin-top: 50px;
        }
        .widget-box { background:#fff; padding:20px; border-radius:10px; width: 280px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); }
        .widget-box h3 { font-size:16px; color:#15A556; border-bottom:2px solid #E6F4EA; padding-bottom:10px; margin-bottom:15px; }
    </style>
</head>
<body>

    <!-- Frontend Nav -->
    <nav class="frontend-nav">
        <?php include 'menu.php'; ?>
        <a href="/businnes-center/login.php" style="background:#0C6136; margin-left:auto;">Login Admin</a>
    </nav>
    
    <!-- Giant Modern Hero -->
    <header class="hero-section">
        <div id="slideshow" class="hero-images">
            <div class="active"><img src="../uploads/gallery/1.jpg" alt="Gallery"></div>
            <div><img src="../uploads/gallery/2.jpg" alt="Gallery"></div>
            <div><img src="../uploads/gallery/4.jpg" alt="Gallery"></div>
            <div><img src="../uploads/gallery/6.jpg" alt="Gallery"></div>
            <div><img src="../uploads/gallery/9.jpg" alt="Gallery"></div>
        </div>
        
        <div class="hero-content">
            <h1>Selamat Datang di<br>Business Center</h1>
            <p>Universitas Almuslim menghadirkan layanan modern, efisien, dan profesional. Dari desain kreatif, pengadaan barang, hingga pemesanan produk berkualitas tinggi - semua ada di genggaman Anda!</p>
            <a href="page/produk.php" class="button" style="text-decoration:none; display:inline-block; font-size:16px; padding:15px 30px; background:#15A556;">Lihat Katalog Produk</a>
        </div>
    </header>

    <!-- Main Clean Landing Content -->
    <main class="landing-container">
        <div style="text-align:center; max-width:800px; margin:0 auto;">
            <h2 style="color:#0C6136; font-size: 32px; margin-bottom:20px;">Mengapa Memilih Kami?</h2>
            <p style="font-size:16px; color:#555;">Kami mengantarkan pengalaman bisnis dan produksi melalui manajemen mutakhir. Kepuasan Anda adalah janji kami terhadap kualitas layanan institusi Universitar Almuslim.</p>
        </div>

        <div class="info-grid">
            <div class="info-card">
                <img src="../assets/images/logo almuslim.jpg" style="height:60px; margin-bottom:20px;" alt="Terpercaya">
                <h3>Terpercaya & Profesional</h3>
                <p>Dilengkapi sistem pengadaan barang (Supply Chain) yang transparan dan didukung teknologi inventaris terkini.</p>
            </div>
            <div class="info-card">
                <h3>Layanan Fleksibel</h3>
                <p>Mendukung berbagai macam permintaan baik individu, BEM mahasiswa, hingga level instansi pemerintahan resmi.</p>
            </div>
            <div class="info-card">
                <h3>Hemat Biaya & Cepat</h3>
                <p>Proses efisiensi stok pada server kami menjamin tidak ada keterlambatan pasokan barang secara aktual.</p>
            </div>
        </div>

        <!-- Integrated Widgets -->
        <section class="widgets-section">
            <div class="widget-box">
                <h3>Member Area</h3>
                <?php include 'reg.php'; ?>
            </div>
            <div class="widget-box">
                <h3>Polling Pelanggan</h3>
                <?php include 'poll.php'; ?>
            </div>
            <div class="widget-box" style="text-align:center;">
                <h3>Kalender Pintar</h3>
                <?php include 'dat.php'; ?>
            </div>
            <div class="widget-box" style="text-align:center;">
                <h3>Statistik Kujungan</h3>
                <?php include 'hits.php'; ?>
            </div>
        </section>
        
    </main>

    <!-- Global Footer -->
    <footer class="modern-footer">
        <h2>Business Center Universitas Almuslim</h2>
        <p style="margin-top:10px; color:#ddd; font-size:14px;">Memajukan pendidikan melalui wirausaha mandiri kampus.</p>
        <div style="margin-top:20px; border-top:1px solid rgba(255,255,255,0.2); padding-top:20px; font-size:12px;">
            Created by: FADHIL &copy; <?php echo date("Y"); ?> | Best viewed in Google Chrome, Safari, and Microsoft Edge
        </div>
    </footer>

</body>
</html>

