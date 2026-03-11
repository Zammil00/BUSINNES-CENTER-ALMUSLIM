<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
if (empty($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Business Center Almuslim</title>
    <link rel="stylesheet" type="text/css" href="assets/css/modern.css">
    <style>
        .app-container {
            max-width: 1400px;
            margin: 20px auto;
            min-height: 90vh;
            display: flex;
            flex-direction: column;
        }
        .main-content-area {
            flex-grow: 1;
        }
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #F4F8F5, #ffffff);
            border-right: 1px solid #e0e0e0;
        }
        .page-content {
            padding: 40px;
            background: #FAFAFA;
        }
        /* Top Navigation inside dashboard */
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: #0C6136;
            color: #fff;
            border-radius: 12px 12px 0 0;
        }
        .dashboard-header .brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .dashboard-header img { height: 40px; }
        .dashboard-header h1 { font-size: 20px; text-transform: uppercase; margin:0; }
        .dashboard-header .user-info { font-weight: 500; font-size: 14px; }
    </style>
</head>
<body>

<div class="app-container">
    <header class="dashboard-header">
        <div class="brand">
            <img src="assets/images/logo%20almuslim.jpg" alt="Logo">
            <h1>Business Center Almuslim</h1>
        </div>
        <div class="user-info">
            Welcome, <?php echo strtoupper($_SESSION['nama']); ?>!
        </div>
    </header>

    <div class="main-content-area">
        <aside class="sidebar">
            <?php include('menu.php'); ?>
        </aside>

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

    <footer class="modern-footer" style="border-radius: 0 0 12px 12px;">
        &copy; <?php echo date("Y"); ?> Business Center Universitas Almuslim - Created by: FADHIL
    </footer>
</div>

</body>
</html>


