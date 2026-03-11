<?php if ($_SESSION['level'] == 'user') { ?>
    <div class="menu-section">
        <h3 class="judul">Menu Admin</h3>
        <nav>
            <a href="index.php" title="Home">Dashboard Home</a>
            <a href="index.php?file=permintaan_barang_view" title="Permintaan Barang">Permintaan Barang</a>
            <a href="index.php?file=barang_masuk_view" title="Barang Masuk">Barang Masuk</a>
            <a href="index.php?file=barang_keluar_view" title="Barang Keluar">Barang Keluar</a>
            <a href="index.php?file=produk_view" title="Produk">Data Produk</a>
            <a href="index.php?file=stok_barang_view" title="Stok Barang">Data Stok Barang</a>
            <a href="index.php?file=pemasok_view" title="Pemasok">Data Pemasok</a>
            <a href="index.php?file=pemesanan_view" title="Pemesanan">Data Pemesanan</a>
            <a href="index.php?file=pembayaran_view" title="Pembayaran">Data Pembayaran</a>
            <a href="index.php?file=pelanggan_view" title="Pelanggan">Data Pelanggan</a>
        </nav>
    </div>
<?php } 

if ($_SESSION['level'] == 'manager') { ?>
    <div class="menu-section">
        <h3 class="judul">Laporan Manager</h3>
        <nav>
            <a href="index.php" title="Home">Dashboard Home</a>
            <a href="./file/laporan_stok_barang.php" title="Stok Barang" target="_blank">Laporan Produk</a>
            <a href="index.php?file=set_barang_masuk" title="Barang Masuk">Set Barang Masuk</a>
            <a href="index.php?file=set_barang_keluar" title="Barang Keluar">Set Barang Keluar</a>
        </nav>
    </div>
<?php } ?>

<div class="menu-section" style="margin-top: 20px;">
    <a href="logout.php" class="button" style="display:block; text-align:center; background:#d32f2f; margin-top:20px;">
        Hapus Sesi (Logout)
    </a>
</div>
