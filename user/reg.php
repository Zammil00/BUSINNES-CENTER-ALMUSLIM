<?php
// Minimal CSS for the widget as it's included in another page
?>
<div class="widget-login" style="text-align: left;">
    <form id="form1" name="form1" method="post" action="log.php?op=in">
        <div style="margin-bottom: 12px;">
            <input name="username_plg" type="text" id="username_plg" placeholder="Username" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:6px; font-size:14px;" required />
        </div>
        <div style="margin-bottom: 15px;">
            <input name="password" type="password" id="password" placeholder="Password" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:6px; font-size:14px;" required />
        </div>
        <button name="Submit" type="submit" class="button" style="width:100%; padding:10px; font-size:14px; margin-bottom:15px;">Login Member</button>
        
        <div style="display:flex; justify-content:space-between; font-size:12px;">
            <a href="daftar_member.php" style="color:#15A556; font-weight:600; text-decoration:none;">Daftar Akun</a>
            <a href="lupa_password.php" style="color:#666; text-decoration:none;">Lupa Password?</a>
        </div>
    </form>
</div>
