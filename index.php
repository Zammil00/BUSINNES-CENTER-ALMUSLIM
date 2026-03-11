<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include('koneksi.php');

if (!empty($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $perintah_query = mysqli_query($conn, "SELECT * FROM tbluser WHERE IDUser = '$username' AND Password = '$password'"); 
    
    if (mysqli_num_rows($perintah_query) > 0) {
        // sukses login
        $datauser = mysqli_fetch_array($perintah_query);
        $_SESSION['user']  = $username;
        $_SESSION['nama']  = $datauser['NamaUser'];
        $_SESSION['level'] = $datauser['Level'];
        
        header("Location: index.php");
        exit;
    } else {   
        // gagal login
        header("Location: index.php?err=yes");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Persediaan Barang | Business Center Almuslim</title>
    <link rel="stylesheet" type="text/css" href="assets/css/modern.css">
</head>
<body>

<div class="app-container">
    <!-- Header -->
    <header class="modern-header">
        <img src="assets/img/printing_terminal_logo.png" alt="Logo Almuslim">
        <h1>Sistem Informasi Persediaan Barang<br>BUSINESS CENTER UNIVERSITAS ALMUSLIM</h1>
    </header>

    <!-- Main Flex Area -->
    <div class="main-content-area">
        
        <!-- Sidebar -->
        <aside class="sidebar">
            <?php if (empty($_SESSION['user'])) { ?>
                <h3 class="judul">Silahkan Login</h3>
                <p style="font-size:13px; color:#555; margin-bottom:15px;">Akses dengan menggunakan username dan password Anda.</p>
                <form method="post" action="index.php">
                    <label>Username</label>
                    <input type="text" name="username" required>
                    
                    <label>Password</label>
                    <input type="password" name="password" required>
                    
                    <button type="submit" name="submit" value="Login" class="button" style="width:100%;">Masuk Sistem</button>
                    
                    <?php if (!empty($_GET['err'])) { ?>
                        <div class="error-alert">
                            <strong>Gagal Login.</strong><br>Cek kembali Username dan Password Anda.
                        </div>
                    <?php } ?>
                </form>
            <?php } else { 
                include('menu.php');
            } ?>
        </aside>

        <!-- Dynamic Content -->
        <main class="page-content">
            <?php 
            if (!empty($_GET['file'])) {
                $file_path = "file/" . basename($_GET['file']) . ".php";
                if (file_exists($file_path)) {
                    include($file_path);
                } else {
                     echo "<div class='error-alert'><h2>Error!</h2>Halaman tidak ditemukan.</div>";
                }
            } else {
                include('file/intro.php');
            }
            ?>
        </main>
        
    </div>

    <!-- Footer -->
    <footer class="modern-footer">
        Created by: FADHIL &copy; <?php echo date("Y"); ?> <br/>
        Sistem Informasi Persediaan Barang - Business Center Universitas Almuslim
    </footer>
</div>

</body>
</html>
