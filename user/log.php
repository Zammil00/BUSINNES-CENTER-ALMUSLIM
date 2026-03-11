<?php 
session_start(); 
include'koneksi.php';
$username_plg = $_POST['username_plg'];
$password = $_POST['password']; 
$op = $_GET['op']; 
 
if($op=="in"){ 
$cek = mysql_query("SELECT * FROM pelanggan WHERE username_plg='$username_plg' AND password='$password'"); 
    if(mysql_num_rows($cek)==1){ 
        $c = mysql_fetch_array($cek); 
	        $_SESSION['username_plg'] = $c['username_plg'];
			$_SESSION['password'] = $c['password']; 
            header("location:/percetakan/user/page/index.php"); 
	        } 
	    else{ 
	         die("Maaf Username dan Password Anda Salah Coba Login Kembali ! <a href=\"javascript:history.back()\">Kembali</a>"); 
	    } 
	}
    else{ 
    if($op=="out"){ 
	    unset($_SESSION['username_plg']);
		unset($_SESSION['password']); 
	    header("location:/percetakan/user/index.php"); 
	} 
    }
	?> 
