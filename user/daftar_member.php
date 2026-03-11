<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include 'koneksi.php';

$success = false;
if (isset($_POST['register'])) {
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telp = mysqli_real_escape_string($conn, $_POST['telp']);
    
    // Auto increment id_plg logic (simple max+1)
    $res = mysqli_query($conn, "SELECT MAX(id_plg) as m FROM pelanggan");
    $row = mysqli_fetch_assoc($res);
    $new_id = $row['m'] + 1;

    $query = "INSERT INTO pelanggan (id_plg, username_plg, password, nm_pelanggan, alamat, email, notelp_plg) 
              VALUES ('$new_id', '$user', '$pass', '$nama', '$alamat', '$email', '$telp')";
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
    <title>Pendaftaran Member | Business Center Universitas Almuslim</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
    <style>
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .form-group { margin-bottom: 20px; text-align: left; }
        .form-group label { display: block; font-weight: 600; margin-bottom: 8px; color: #333; font-size: 14px; }
        .form-group input, .form-group textarea { 
            width: 100%; padding: 12px; border: 1px solid #ddd; 
            border-radius: 8px; font-family: inherit; font-size: 14px;
        }
    </style>
</head>
<body style="background: #F4F8F5;">
    <!-- Frontend Nav -->
    <nav class="frontend-nav">
        <?php include 'menu.php'; ?>
        <a href="/businnes-center/login.php" style="background:#0C6136; margin-left:auto;">Login Admin</a>
    </nav>
    
    <header class="inner-header">
        <h1>Registrasi Member Baru</h1>
        <p style="margin-top:10px; opacity:0.9;">Gabung menjadi mitra kami untuk kemudahan layanan berbisnis</p>
    </header>

    <main class="app-container" style="max-width:900px; margin:40px auto; padding:0 20px;">
        <div class="card-content">
            <?php if ($success): ?>
                <div style="background:#E6F4EA; border-left:5px solid #15A556; padding:25px; border-radius:8px; margin-bottom:30px; color:#0C6136;">
                    <h3 style="margin-bottom:10px;">Pendaftaran Berhasil!</h3>
                    <p>Selamat bergabung! Akun member Anda telah aktif. Silakan gunakan username Anda untuk layanan khusus lainnya.</p>
                </div>
            <?php endif; ?>

            <form action="daftar_member.php" method="POST">
                <div class="form-grid">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Masukkan nama terang..." required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" name="email" placeholder="contoh@mail.com" required>
                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Pilih username unik..." required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Masukkan password rahasia..." required>
                    </div>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label>Nomor Telepon / WhatsApp</label>
                        <input type="text" name="telp" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Domisili</label>
                        <textarea name="alamat" rows="1" placeholder="Masukkan alamat lengkap..." style="height:48px;" required></textarea>
                    </div>
                </div>

                <div style="margin-top:20px; text-align:center;">
                    <button type="submit" name="register" class="button" style="width:100%; padding:15px; font-size:16px;">Konfirmasi & Daftar Akun</button>
                    <p style="font-size:13px; color:#777; margin-top:15px;">Sudah punya akun? <a href="index.php" style="color:#0C6136; font-weight:700;">Masuk di sini</a></p>
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

