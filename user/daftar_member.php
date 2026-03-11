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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
    <style>
        .register-container { 
            max-width: 1000px; 
            margin: 60px auto; 
            display: grid; 
            grid-template-columns: 1fr 1.2fr;
            background: #fff;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0,0,0,0.1);
        }
        .register-info {
            background: var(--primary-gradient);
            padding: 60px;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .register-form-area {
            padding: 60px;
        }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .form-group { margin-bottom: 25px; text-align: left; }
        .form-group label { display: block; font-weight: 700; margin-bottom: 10px; color: #444; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; }
        .form-group input, .form-group textarea { 
            width: 100%; padding: 15px; border: 2px solid #f0f0f0; 
            border-radius: 12px; font-family: inherit; font-size: 14px;
            transition: 0.3s;
        }
        .form-group input:focus { border-color: var(--accent-green); outline: none; background: #f9fdfa; }
        
        .step-item { display: flex; align-items: flex-start; gap: 15px; margin-bottom: 30px; }
        .step-num { 
            width: 35px; height: 35px; background: rgba(255,255,255,0.2); 
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-weight: 800; font-size: 14px; flex-shrink: 0;
        }
    </style>
</head>
<body class="mesh-bg">

    <!-- Unified Premium Navbar -->
    <nav class="frontend-nav">
        <a href="/businnes-center/user/index.php" class="nav-brand">
            <img src="/businnes-center/assets/images/logo%20almuslim.jpg" alt="Logo">
            <span>ALMUSLIM HUB</span>
        </a>
        <div class="nav-links-wrapper">
            <?php include 'menu.php'; ?>
        </div>
        <a href="/businnes-center/login.php" class="admin-login-btn">ADMIN LOGIN</a>
    </nav>

    <div class="register-container reveal">
        <div class="register-info">
            <h2 style="font-size: 36px; font-weight: 900; line-height: 1.1; margin-bottom: 30px;">Jadi Bagian Dari <br><span style="color:var(--accent-green);">Inovasi Kampus</span></h2>
            <p style="opacity: 0.8; margin-bottom: 50px; line-height: 1.8;">Nikmati berbagai kemudahan akses layanan Business Center Almuslim dengan mendaftarkan akun member Anda hari ini.</p>
            
            <div class="step-item">
                <div class="step-num">1</div>
                <div>
                    <h4 style="margin-bottom:5px;">Lengkapi Data Diri</h4>
                    <p style="font-size:13px; opacity:0.7;">Isi formulir pendaftaran dengan data yang valid.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-num">2</div>
                <div>
                    <h4 style="margin-bottom:5px;">Verifikasi Akun</h4>
                    <p style="font-size:13px; opacity:0.7;">Akun Anda akan langsung aktif setelah pendaftaran.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-num">3</div>
                <div>
                    <h4 style="margin-bottom:5px;">Mulai Berbisnis</h4>
                    <p style="font-size:13px; opacity:0.7;">Akses fitur pemesanan dan katalog eksklusif kami.</p>
                </div>
            </div>
        </div>

        <div class="register-form-area">
            <?php if ($success): ?>
                <div style="background:var(--primary-green); color:#fff; padding:30px; border-radius:20px; margin-bottom:30px; text-align:center;">
                    <div style="font-size:40px; margin-bottom:10px;">🎉</div>
                    <h3 style="margin-bottom:10px;">Registrasi Berhasil!</h3>
                    <p style="font-size:14px; opacity:0.9; margin-bottom:20px;">Selamat bergabung di Business Center Almuslim. Silakan login untuk memulai.</p>
                    <a href="index.php" class="btn-main" style="background:#fff; color:var(--primary-green); padding:10px 30px; display:inline-block; text-decoration:none; border-radius:50px; font-weight:800;">Login Sekarang</a>
                </div>
            <?php else: ?>
                <h3 style="font-size:24px; font-weight:800; margin-bottom:10px;">Formulir Pendaftaran</h3>
                <p style="color:#777; font-size:14px; margin-bottom:40px;">Silakan isi formulir di bawah ini untuk membuat akun baru.</p>

                <form action="daftar_member.php" method="POST">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Contoh: Fadhil Muhammad" required>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Alamat Email</label>
                            <input type="email" name="email" placeholder="email@contoh.com" required>
                        </div>
                        <div class="form-group">
                            <label>No. WhatsApp</label>
                            <input type="text" name="telp" placeholder="08xxxxxxxxxx" required>
                        </div>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Pilih Username</label>
                            <input type="text" name="username" placeholder="Username unik..." required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Min. 6 karakter" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Alamat Domisili</label>
                        <textarea name="alamat" rows="2" placeholder="Masukkan alamat lengkap Anda..." required></textarea>
                    </div>

                    <div style="margin-top:20px;">
                        <button type="submit" name="register" class="btn-main btn-glow" style="width:100%; padding:18px; font-size:16px;">Konfirmasi & Daftar Akun</button>
                        <p style="text-align:center; font-size:13px; color:#888; margin-top:25px;">
                            Sudah menjadi member? <a href="index.php" style="color:var(--primary-green); font-weight:800; text-decoration:none;">Masuk di Sini</a>
                        </p>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>

    <!-- Global Footer -->
    <footer class="modern-footer">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px;">
            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 40px;">
                <div>
                    <h2 style="font-size: 20px; font-weight: 800; color: #fff; margin-bottom: 5px;">Business Center Almuslim</h2>
                    <p style="color: rgba(255,255,255,0.5); font-size: 12px;">© <?php echo date("Y"); ?> All Rights Reserved.</p>
                </div>
                <div style="display: flex; gap: 20px;">
                    <a href="tentang_kami.php" style="color:rgba(255,255,255,0.6); text-decoration:none; font-size:13px;">Tentang</a>
                    <a href="kontak.php" style="color:rgba(255,255,255,0.6); text-decoration:none; font-size:13px;">Bantuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Reveal animation trigger
        $(document).ready(function() {
            setTimeout(function() {
                $('.reveal').addClass('active-reveal');
            }, 100);
        });
    </script>
</body>
</html>
