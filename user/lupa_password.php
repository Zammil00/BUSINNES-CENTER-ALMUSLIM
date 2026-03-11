<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password | Business Center Universitas Almuslim</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>
<body style="background: #F4F8F5;">
    <!-- Frontend Nav -->
    <nav class="frontend-nav">
        <?php include 'menu.php'; ?>
        <a href="/businnes-center/login.php" style="background:#0C6136; margin-left:auto;">Login Admin</a>
    </nav>
    
    <header class="inner-header">
        <h1>Bantuan Akses Akun</h1>
        <p style="margin-top:10px; opacity:0.9;">Gunakan email terdaftar untuk mengatur ulang kata sandi Anda</p>
    </header>

    <main class="app-container" style="max-width:600px; margin:40px auto; padding:0 20px;">
        <div class="card-content" style="text-align:center;">
            <img src="../assets/images/logo almuslim.jpg" style="height:60px; margin-bottom:20px; filter: grayscale(1);" alt="Lupa Pass">
            <h2 style="color:#0C6136; margin-bottom:10px;">Lupa Kata Sandi?</h2>
            <p style="color:#666; font-size:14px; margin-bottom:30px;">Masukkan alamat email Anda di bawah ini, kami akan mengirimkan instruksi pemulihan akes akun Anda segera.</p>

            <form action="kirimpass.php" method="POST">
                <div style="margin-bottom:20px;">
                    <input type="email" name="email" placeholder="contoh@mail.com" required style="width:100%; padding:14px; border:1px solid #ddd; border-radius:8px; font-family:inherit; font-size:15px; text-align:center;">
                </div>
                <button type="submit" class="button" style="width:100%; padding:15px; font-size:16px;">Kirim Tautan Pemulihan</button>
                <div style="margin-top:20px;">
                    <a href="index.php" style="color:#15A556; text-decoration:none; font-weight:700; font-size:14px;">Sudah ingat? Kembali ke Home</a>
                </div>
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

