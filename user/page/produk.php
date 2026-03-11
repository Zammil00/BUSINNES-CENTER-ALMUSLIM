<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk | Business Center Universitas Almuslim</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>
<body style="background: #F4F8F5;">
    <!-- Frontend Nav -->
    <!-- Unified Premium Navbar -->
    <nav class="frontend-nav">
        <a href="/businnes-center/user/index.php" class="nav-brand">
            <img src="/businnes-center/assets/images/logo%20almuslim.jpg" alt="Logo">
            <span>ALMUSLIM HUB</span>
        </a>
        <div class="nav-links-wrapper">
            <?php include '../menu.php'; ?>
        </div>
        <a href="/businnes-center/login.php" class="admin-login-btn">ADMIN LOGIN</a>
    </nav>
    
    <header class="inner-header">
        <h1>Katalog Produk</h1>
        <p style="margin-top:10px; opacity:0.9;">Pilihan Produk Berkualitas dari Business Center Almuslim</p>
    </header>

    <main class="app-container" style="max-width:1200px; margin:40px auto; padding:0 20px;">
        
        <?php
        error_reporting (E_ALL ^ (E_NOTICE | E_WARNING));
        include '../koneksi.php';
         
        $tbl_name="produk";
        $adjacents = 2;
        $query = "SELECT COUNT(*) as num FROM $tbl_name";
        $total_pages = mysqli_fetch_array(mysqli_query($conn, $query))['num'];

        $targetpage = "produk.php";
        $limit = 6;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start = ($page - 1) * $limit;

        $sql = "SELECT * FROM $tbl_name ORDER BY kd_barang DESC LIMIT $start, $limit";
        $result = mysqli_query($conn, $sql);

        $lastpage = ceil($total_pages/$limit);
        $prev = $page - 1;
        $next = $page + 1;
        ?>

        <div class="catalog-grid">
            <?php while ($row = mysqli_fetch_array($result)): ?>
            <div class="product-card">
                <img src="/businnes-center/uploads/foto/<?php echo $row['foto']; ?>" onerror="this.src='https://via.placeholder.com/300x200?text=Produk';" alt="<?php echo $row['nm_barang']; ?>">
                <div class="product-card-body">
                    <div class="product-card-title"><?php echo $row['nm_barang']; ?></div>
                    <div class="product-card-price">Rp <?php echo number_format($row['hrg_barang'], 0, ',', '.'); ?></div>
                    <div style="margin-top:15px;">
                        <a href="pemesanan.php" class="button" style="width:100%; text-decoration:none;">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <?php if($lastpage > 1): ?>
        <div class="pagination">
            <?php if($page > 1): ?>
                <a href="produk.php?page=<?php echo $prev; ?>">&laquo; Prev</a>
            <?php endif; ?>

            <?php for($i=1; $i<=$lastpage; $i++): ?>
                <?php if($i == $page): ?>
                    <span class="current"><?php echo $i; ?></span>
                <?php else: ?>
                    <a href="produk.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if($page < $lastpage): ?>
                <a href="produk.php?page=<?php echo $next; ?>">Next &raquo;</a>
            <?php endif; ?>
        </div>
        <?php endif; ?>

    </main>

    <!-- Global Footer -->
    <footer class="modern-footer">
        <h2>Business Center Universitas Almuslim</h2>
        <div style="margin-top:10px; border-top:1px solid rgba(255,255,255,0.2); padding-top:15px; font-size:13px;">
            Created by: FADHIL &copy; <?php echo date("Y"); ?>
        </div>
    </footer>
</body>
</html>

