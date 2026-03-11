<?php
include 'koneksi.php';
$strSQL = "select nama from favplayer";
$qry = @mysqli_query($conn, $strSQL);
?>
<div class="widget-poll" style="text-align: left;">
    <p style="font-size: 13px; color: #555; margin-bottom: 15px; line-height: 1.4;">Bagaimana menurut Anda tentang kualitas pelayanan di Business Center kami?</p>
    <form action="result.php" method="post" name="poll" id="poll">
        <?php while ($row = mysqli_fetch_array($qry)): ?>
            <label style="display:flex; align-items:center; gap:10px; margin-bottom:8px; cursor:pointer; font-size:14px; color:#444;">
                <input type="radio" name="player" value="<?php echo $row['nama']; ?>" required style="accent-color:#15A556;">
                <?php echo $row['nama']; ?>
            </label>
        <?php endwhile; ?>
        
        <button name="submit" type="submit" class="button" style="width:100%; padding:10px; margin-top:10px; font-size:14px; background:#666;">Kirim Suara</button>
    </form>
</div>
