<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include 'koneksi.php';

$player = isset($_POST['player']) ? mysqli_real_escape_string($conn, $_POST['player']) : '';

if ($player) {
    // update suara
    mysqli_query($conn, "UPDATE favplayer SET suara = suara + 1 WHERE nama = '$player'");
}

// hitung total
$res = mysqli_query($conn, "SELECT SUM(suara) as total FROM favplayer");
$row_total = mysqli_fetch_assoc($res);
$total_suara = $row_total['total'] ?: 1;

$query = mysqli_query($conn, "SELECT * FROM favplayer");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Jajak Pendapat | Business Center</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
    <style>
        .poll-result-item { margin-bottom: 25px; }
        .poll-bar-container { background: #eee; border-radius: 10px; height: 12px; overflow: hidden; margin-top: 8px; }
        .poll-bar { background: var(--accent-green); height: 100%; transition: width 1s ease-in-out; }
    </style>
</head>
<body style="background: #F4F8F5; padding: 40px 20px;">
    
    <div class="card-content" style="max-width:500px; margin:0 auto; text-align:center;">
        <h2 style="color:#0C6136; margin-bottom:10px;">Hasil Jajak Pendapat</h2>
        <p style="color:#666; font-size:14px; margin-bottom:30px;">Terima kasih atas partisipasi Anda!</p>

        <div style="text-align:left;">
            <?php while ($row = mysqli_fetch_array($query)): 
                $percent = round(($row['suara'] / $total_suara) * 100);
            ?>
                <div class="poll-result-item">
                    <div style="display:flex; justify-content:space-between; font-weight:600; font-size:14px;">
                        <span><?php echo $row['nama']; ?></span>
                        <span style="color:#15A556;"><?php echo $percent; ?>% (<?php echo $row['suara']; ?>)</span>
                    </div>
                    <div class="poll-bar-container">
                        <div class="poll-bar" style="width: <?php echo $percent; ?>%;"></div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <div style="margin-top:30px; border-top:1px solid #eee; padding-top:20px;">
            <p style="font-weight:700; color:#333;">Total Suara: <?php echo $total_suara; ?></p>
            <a href="index.php" class="button" style="margin-top:20px; display:inline-block; text-decoration:none;">Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>


