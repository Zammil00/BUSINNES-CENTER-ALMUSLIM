<?php
error_reporting (E_ALL ^ (E_NOTICE | E_WARNING));
// Use include_once for koneksi to prevent re-declaration if already included by index.php
include_once "koneksi.php";

$hasil = mysqli_query($conn, "SELECT * FROM produk ORDER BY kd_barang");
?>

<div class="report-wrapper">
    <div class="report-card">
        <!-- Header Laporan -->
        <div class="report-header-premium">
            <div class="header-left">
                <img src="assets/images/logo%20almuslim.jpg" alt="Logo Almuslim">
                <div class="header-text">
                    <h1>BUSINESS CENTER</h1>
                    <p>UNIVERSITAS ALMUSLIM BIREUEN</p>
                </div>
            </div>
            <div class="header-right">
                <div class="report-tag">OFFICIAL REPORT</div>
                <p>Tanggal: <?php echo date("d/m/Y"); ?></p>
            </div>
        </div>

        <div class="report-body">
            <h2 class="report-subject">LAPORAN DATA STOK BARANG</h2>
            <hr class="report-divider">

            <table class="tabel-data modern-report-table">
                <thead>
                    <tr>
                        <th style="text-align: center;">Kode Barang</th>
                        <th>Nama Barang</th>
                        <th style="text-align: right;">Harga Satuan</th>
                        <th style="text-align: center;">Stok Tersedia</th>
                        <th style="text-align: right;">Total Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $total_seluruh = 0;
                    while ($baris = mysqli_fetch_array($hasil)){
                        $total_nilai = $baris['jlh_brg'] * $baris['hrg_barang'];
                        $total_seluruh += $total_nilai;
                        echo "
                        <tr> 
                            <td style='text-align: center; font-weight: 700; color: var(--primary-green);'>$baris[kd_barang]</td>
                            <td style='font-weight: 500;'>$baris[nm_barang]</td>
                            <td style='text-align: right;'>Rp " . number_format($baris['hrg_barang'], 0, ',', '.') . "</td>
                            <td style='text-align: center;'>$baris[jlh_brg]</td>
                            <td style='text-align: right; font-weight: 700;'>Rp " . number_format($total_nilai, 0, ',', '.') . "</td>
                        </tr>";
                    } 
                    ?>
                </tbody>
                <tfoot>
                    <tr class="grand-total-row">
                        <td colspan="4">TOTAL KESELURUHAN NILAI INVENTORI</td>
                        <td>Rp <?php echo number_format($total_seluruh, 0, ',', '.'); ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Footer Tanda Tangan -->
        <div class="report-footer-premium">
            <div class="signature-section">
                <p>Matangglampaneung, <?php echo date("d F Y"); ?></p>
                <p>Pimpinan Business Center Almuslim,</p>
                <div class="signature-gap"></div>
                <p><strong>HERY GUSTAMI</strong></p>
                <div class="signature-line"></div>
            </div>
        </div>
        
        <!-- Action Buttons -->
        <div class="report-actions noPrint">
            <button onclick="window.print()" class="btn-print">🖨️ Cetak Laporan</button>
            <button onclick="location.href='index.php'" class="btn-close">🔙 Kembali Ke Beranda</button>
        </div>
    </div>
</div>

<style>
    .report-wrapper {
        padding: 20px 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .report-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        padding: 60px;
        max-width: 1000px;
        margin: 0 auto;
        position: relative;
    }
    .report-header-premium {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }
    .header-left {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .header-left img {
        height: 70px;
        border-radius: 8px;
    }
    .header-text h1 {
        margin: 0;
        font-size: 24px;
        color: var(--primary-green);
        letter-spacing: 1px;
    }
    .header-text p {
        margin: 0;
        font-size: 12px;
        color: #888;
        font-weight: 700;
        text-transform: uppercase;
    }
    .header-right {
        text-align: right;
    }
    .report-tag {
        background: #F4F8F5;
        color: var(--primary-green);
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 10px;
        font-weight: 800;
        display: inline-block;
        margin-bottom: 5px;
        border: 1px solid var(--accent-green);
    }
    .report-subject {
        text-align: center;
        font-size: 22px;
        margin-bottom: 10px;
        color: #333;
    }
    .report-divider {
        border: none;
        height: 2px;
        background: var(--primary-green);
        width: 100px;
        margin: 0 auto 40px;
    }
    .modern-report-table {
        margin-top: 20px;
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    .modern-report-table th {
        background: #F8FAF9 !important;
        color: #555 !important;
        font-size: 12px;
        padding: 15px !important;
        text-transform: uppercase;
        border-bottom: 2px solid #eee !important;
    }
    .modern-report-table td {
        padding: 15px !important;
        border-bottom: 1px solid #f0f0f0 !important;
    }
    .grand-total-row td {
        background: var(--primary-green) !important;
        color: #fff !important;
        font-weight: 800;
        font-size: 16px;
        padding: 20px !important;
    }
    .report-footer-premium {
        margin-top: 60px;
        display: flex;
        justify-content: flex-end;
    }
    .signature-section {
        text-align: center;
        width: 300px;
    }
    .signature-gap {
        height: 80px;
    }
    .signature-line {
        height: 2px;
        background: #333;
        width: 200px;
        margin: 5px auto 0;
    }
    .report-actions {
        display: flex;
        gap: 15px;
        margin-top: 50px;
        justify-content: center;
    }
    .btn-print {
        background: var(--primary-green);
        color: #fff;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 700;
        transition: 0.3s;
    }
    .btn-close {
        background: #666;
        color: #fff;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 700;
        transition: 0.3s;
    }
    .btn-print:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(12, 97, 54, 0.2); }

    @media print {
        .app-container { margin: 0 !important; max-width: 100% !important; box-shadow: none !important; }
        .sidebar, .dashboard-header, .modern-footer, .noPrint { display: none !important; }
        .page-content { padding: 0 !important; background: #fff !important; }
        .report-card { box-shadow: none !important; padding: 20px !important; border: 1px solid #eee; }
        .report-wrapper { padding: 0; }
        body { background: #fff !important; }
    }
</style>
