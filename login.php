<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include('koneksi.php');

if (!empty($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $query = mysqli_query($conn, "SELECT * FROM tbluser WHERE IDUser = '$username' AND Password = '$password'"); 
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['user']  = $username;
        $_SESSION['nama']  = $data['NamaUser'];
        $_SESSION['level'] = $data['Level'];
        header("Location: index.php");
        exit;
    } else {   
        $error = "Username atau Password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Business Center Universitas Almuslim</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background: linear-gradient(135deg, #0C6136, #15A556); 
            height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
        }
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-container img { height: 70px; margin-bottom: 20px; }
        .login-container h2 { color: #0C6136; margin-bottom: 10px; font-weight: 700; }
        .login-container p { color: #555; margin-bottom: 30px; font-size: 14px; }
        .form-group { text-align: left; margin-bottom: 20px; }
        .form-group label { display: block; font-weight: 600; color: #333; margin-bottom: 8px; font-size: 14px; }
        .form-group input { 
            width: 100%; padding: 12px 15px; border: 1px solid #ddd; 
            border-radius: 8px; outline: none; transition: 0.3s; font-family: inherit;
        }
        .form-group input:focus { border-color: #15A556; box-shadow: 0 0 0 3px rgba(21, 165, 86, 0.2); }
        .btn-login {
            background: #0C6136; color: white; border: none; padding: 14px;
            width: 100%; border-radius: 8px; font-weight: 700; font-size: 15px;
            cursor: pointer; transition: 0.3s; font-family: inherit; margin-top: 10px;
        }
        .btn-login:hover { background: #064022; transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
        .error { background: #ffebee; color: #d32f2f; padding: 10px; border-radius: 8px; margin-bottom: 20px; font-size: 14px; font-weight: 500;}
        .footer-link { margin-top: 25px; font-size: 13px; color: #666; }
        .footer-link a { color: #15A556; text-decoration: none; font-weight: 600; }
        .footer-link a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="login-container">
    <img src="assets/images/logo almuslim.jpg" alt="Logo">
    <h2>Sistem Persediaan</h2>
    <p>Sign in untuk mengelola inventori Business Center</p>
    
    <?php if ($error) { echo "<div class='error'>$error</div>"; } ?>

    <form method="POST" action="login.php">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan username admin..." required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password..." required>
        </div>
        <button type="submit" class="btn-login">LOGIN SYSTEM</button>
    </form>
    
    <div class="footer-link">
        Bukan admin? <a href="user/index.php">Kembali ke Landing Page</a>
    </div>
</div>

</body>
</html>

