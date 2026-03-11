<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include 'koneksi.php';

$player = isset($_POST['player']) ? mysqli_real_escape_string($conn, $_POST['player']) : '';

if ($player) {
    mysqli_query($conn, "UPDATE favplayer SET suara = suara + 1 WHERE nama = '$player'");
}

$res = mysqli_query($conn, "SELECT SUM(suara) as total FROM favplayer");
$total_suara = mysqli_fetch_assoc($res)['total'] ?: 1;

$query = mysqli_query($conn, "SELECT * FROM favplayer");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Polling | Business Center Almuslim</title>
    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
    <style>
        .poll-item { margin-bottom: 20px; }
        .poll-progress { background: #eee; border-radius: 5px; height: 10px; margin-top: 5px; }
        .poll-fill { background: #15A556; height: 100%; border-radius: 5px; }
    </style>
</head>
<body style="background: #F4F8F5; display: flex; align-items: center; justify-content: center; min-height: 100vh;">
    <div class="card-content" style="max-width: 450px; width: 100%; text-align: center;">
        <h2 style="color: #0C6136; margin-bottom: 20px;">Hasil Jajak Pendapat</h2>
        
        <div style="text-align: left;">
        <?php while ($row = mysqli_fetch_assoc($query)): 
            $pct = round(($row['suara'] / $total_suara) * 100);
        ?>
            <div class="poll-item">
                <div style="display: flex; justify-content: space-between; font-weight: 600; font-size: 14px;">
                    <span><?php echo $row['nama']; ?></span>
                    <span style="color: #15A556;"><?php echo $pct; ?>% (<?php echo $row['suara']; ?>)</span>
                </div>
                <div class="poll-progress">
                    <div class="poll-fill" style="width: <?php echo $pct; ?>%;"></div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">
            <p style="font-size: 14px; font-weight: 700; color: #555;">Total Suara Terkumpul: <?php echo $total_suara; ?></p>
            <a href="index.php" class="button" style="margin-top: 20px; text-decoration: none;">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
