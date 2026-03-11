<?php
error_reporting (E_ALL ^ (E_WARNING | E_NOTICE));
include_once "koneksi.php";  

if(isset($_GET['tgl_masuk']) && $_GET['tgl_masuk']){  
    $tgl_masuk = $_GET['tgl_masuk'];  
    $sql = "select * from barang_masuk where tgl_masuk like '%$tgl_masuk%'";  
    $hasil = mysqli_query($conn, $sql);  
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
                <div class="report-tag">INCOMING GOODS REPORT</div>
                <p>Periode: <?php echo date("d M Y", strtotime($tgl_masuk)); ?></p>
            </div>
        </div>

        <div class="report-body">
            <h2 class="report-subject">LAPORAN BARANG MASUK</h2>
            <hr class="report-divider">

            <?php if(mysqli_num_rows($hasil) > 0): ?>
            <table class="tabel-data modern-report-table">
                <thead>
                    <tr>
                        <th style="text-align: center;">No. Permintaan</th>
                        <th style="text-align: center;">Tgl. Masuk</th>
                        <th style="text-align: center;">Kode</th>
                        <th>Nama Barang</th>
                        <th>Pemasok</th>
                        <th style="text-align: center;">Jumlah</th>
                        <th style="text-align: right;">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $grand_total = 0;
                    while ($baris = mysqli_fetch_array($hasil)){
                        $grand_total += $baris['total_harga'];
                        echo "
                        <tr> 
                            <td style='text-align: center; font-weight: 600;'>$baris[no_permintaan]</td>
                            <td style='text-align: center;'>".date("d/m/Y", strtotime($baris['tgl_masuk']))."</td>
                            <td style='text-align: center; color: var(--primary-green); font-weight: 700;'>$baris[kd_barang]</td>
                            <td style='font-weight: 500;'>$baris[nm_barang]</td>
                            <td>$baris[nama_pemasok]</td>
                            <td style='text-align: center;'>$baris[jml_Barang]</td>
                            <td style='text-align: right; font-weight: 700;'>Rp " . number_format($baris['total_harga'], 0, ',', '.') . "</td>
                        </tr>";
                    } 
                    ?>
                </tbody>
                <tfoot>
                    <tr class="grand-total-row">
                        <td colspan="6">TOTAL NILAI BARANG MASUK HARI INI</td>
                        <td>Rp <?php echo number_format($grand_total, 0, ',', '.'); ?></td>
                    </tr>
                </tfoot>
            </table>
            <?php else: ?>
                <div style="text-align: center; padding: 40px; background: #fff5f5; border-radius: 12px; border: 1px solid #ffcccc; color: #d32f2f; margin: 20px 0;">
                    <span style="font-size: 40px; display: block; margin-bottom: 10px;">⚠️</span>
                    <strong>Tidak ada data barang masuk ditemukan</strong> untuk tanggal <?php echo date("d/m/Y", strtotime($tgl_masuk)); ?>.
                </div>
            <?php endif; ?>
        </div>

        <!-- Signature Section -->
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
            <button onclick="location.href='index.php?file=set_barang_masuk'" class="btn-close">🔙 Kembali ke Filter</button>
        </div>
    </div>
</div>

<?php } ?>

<style>
    .report-wrapper { padding: 20px 0; font-family: 'Plus Jakarta Sans', sans-serif; }
    .report-card { background: #fff; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); padding: 50px; max-width: 1100px; margin: 0 auto; }
    .report-header-premium { display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; border-bottom: 2px solid #f0f4f2; padding-bottom: 25px; }
    .header-left { display: flex; align-items: center; gap: 20px; }
    .header-left img { height: 75px; border-radius: 10px; }
    .header-text h1 { margin: 0; font-size: 26px; color: var(--primary-green); font-weight: 800; letter-spacing: 1px; }
    .header-text p { margin: 0; font-size: 13px; color: #777; font-weight: 700; text-transform: uppercase; }
    .report-tag { background: #F4F8F5; color: var(--primary-green); padding: 6px 18px; border-radius: 50px; font-size: 11px; font-weight: 800; border: 1px solid var(--accent-green); display: inline-block; margin-bottom: 8px; }
    .report-subject { text-align: center; font-size: 24px; margin-bottom: 15px; color: #1a1a1a; font-weight: 800; }
    .report-divider { border: none; height: 3px; background: var(--accent-green); width: 80px; margin: 0 auto 40px; border-radius: 2px; }
    .modern-report-table { width: 100%; border-collapse: separate; border-spacing: 0; margin-top: 10px; }
    .modern-report-table th { background: #F9FAFB !important; color: #4B5563 !important; font-size: 11px; padding: 15px 10px !important; text-transform: uppercase; letter-spacing: 1px; border-bottom: 2px solid #E5E7EB !important; }
    .modern-report-table td { padding: 15px 10px !important; border-bottom: 1px solid #F3F4F6 !important; font-size: 14px; }
    .grand-total-row td { background: #0C6136 !important; color: #fff !important; font-weight: 800; font-size: 16px; padding: 20px !important; }
    .report-footer-premium { margin-top: 80px; display: flex; justify-content: flex-end; }
    .signature-section { text-align: center; width: 320px; }
    .signature-gap { height: 90px; }
    .signature-line { height: 2px; background: #222; width: 220px; margin: 8px auto 0; }
    .report-actions { display: flex; gap: 15px; margin-top: 60px; justify-content: center; }
    .btn-print { background: var(--primary-green); color: #fff; border: none; padding: 14px 35px; border-radius: 10px; cursor: pointer; font-weight: 700; transition: 0.3s; display: flex; align-items: center; gap: 10px; }
    .btn-close { background: #4B5563; color: #fff; border: none; padding: 14px 35px; border-radius: 10px; cursor: pointer; font-weight: 700; transition: 0.3s; }
    .btn-print:hover { background: var(--dark-green); transform: translateY(-3px); box-shadow: 0 12px 24px rgba(12, 97, 54, 0.25); }

    @media print {
        .sidebar, .dashboard-header, .modern-footer, .noPrint, .whatsapp-float, #backToTop { display: none !important; }
        .page-content { padding: 0 !important; background: #fff !important; }
        .report-card { box-shadow: none !important; padding: 0 !important; border: none; }
        body { background: #fff !important; }
        .report-wrapper { padding: 0; }
    }
</style>
