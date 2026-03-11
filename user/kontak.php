<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami | Business Center Universitas Almuslim</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>
<body style="background: #F4F8F5;">
    <!-- Frontend Nav -->
    <nav class="frontend-nav">
        <?php include 'menu.php'; ?>
        <a href="/businnes-center/login.php" style="background:#0C6136; margin-left:auto;">Login Admin</a>
    </nav>
    
    <header class="inner-header">
        <h1>Hubungi Kami</h1>
        <p style="margin-top:10px; opacity:0.9;">Kami siap melayani Anda dengan sepenuh hati</p>
    </header>

    <main class="app-container" style="max-width:1100px; margin:40px auto; padding:0 20px;">
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap:30px;">
            
            <div class="card-content">
                <h2 style="color:#0C6136; margin-bottom:20px;">Informasi Kontak</h2>
                <div style="margin-bottom:20px;">
                    <h4 style="color:#15A556; margin-bottom:5px;">Alamat Kantor</h4>
                    <p style="color:#666;">Kampus Induk Universitas Almuslim<br>Bireuen, Aceh - Indonesia</p>
                </div>
                <div style="margin-bottom:20px;">
                    <h4 style="color:#15A556; margin-bottom:5px;">Layanan Telepon/WA</h4>
                    <p style="color:#666;">+62 812-3456-7890<br>+62 852-1355-8xxx</p>
                </div>
                <div style="margin-bottom:20px;">
                    <h4 style="color:#15A556; margin-bottom:5px;">Email Korespondensi</h4>
                    <p style="color:#666;">businesscenter@almuslim.ac.id<br>fadhil@email.com</p>
                </div>
                <div style="margin-top:30px; background:#f9f9f9; padding:20px; border-radius:10px;">
                    <h4 style="margin-bottom:10px;">Jam Operasional</h4>
                    <p style="font-size:14px; margin-bottom:5px;">Senin - Jumat: 08.00 - 17.00</p>
                    <p style="font-size:14px;">Sabtu: 08.00 - 13.00</p>
                </div>
            </div>

            <div class="card-content">
                <h2 style="color:#0C6136; margin-bottom:20px;">Kirim Pesan Cepat</h2>
                <form>
                    <div style="margin-bottom:15px;">
                        <input type="text" placeholder="Nama Anda" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px;">
                    </div>
                    <div style="margin-bottom:15px;">
                        <input type="email" placeholder="Alamat Email" style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px;">
                    </div>
                    <div style="margin-bottom:20px;">
                        <textarea placeholder="Pesan Anda..." style="width:100%; padding:12px; border:1px solid #ddd; border-radius:8px; height:120px; font-family:inherit;"></textarea>
                    </div>
                    <button type="button" class="button" style="width:100%; padding:14px;">Kirim Pesan</button>
                    <p style="font-size:12px; color:#888; margin-top:15px; text-align:center;">*Kami akan membalas pesan Anda sesegera mungkin.</p>
                </form>
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
