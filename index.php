<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include('koneksi.php');
if (!empty($_POST['submit'])){

$perintah_query=mysql_query(" SELECT * FROM tbluser WHERE IDUser = '$_POST[username]' AND Password = '$_POST[password]'"); 
	if($hasil_cek=mysql_num_rows($perintah_query))
	{
	//sukess
	$datauser=mysql_fetch_array($perintah_query);
	$_SESSION['user'] = $_POST['username'];
	$_SESSION['nama'] = $datauser['NamaUser'];
	$_SESSION['level'] = $datauser['Level'];
	echo $_SESSION['level'];
	header("Location: index.php");
	} else 
	{   
// gagal login
    header("Location: index.php?err=yes");

	}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Selamat Datang di Sistem Informasi Persediaan Barang Pada BUSINESS CENTER UNIVERSITAS ALMUSLIM</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
#Layer1 {
	position:absolute;
	left:37px;
	top:52px;
	width:501px;
	height:18px;
	z-index:1;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(img/bg.jpg); background-attachment:fixed
}
#Layer2 {
	position:absolute;
	left:28px;
	top:9px;
	width:68px;
	height:41px;
	z-index:1;
}
#Layer3 {
	position:absolute;
	left:120px;
	top:21px;
	width:750px;
	height:24px;
	z-index:2;
}
.style2 {
	font-size: 24px;
	color: #FFFFFF;
	font-weight: bold;
}
.tdmenu {
	height: 410px;
	width: 205px;
	padding-right: 8px;
	padding-left: 8px;
	border: 1px solid #CCCCCC;
}
.style3 {font-size: 12px}
.style4 {
	font-size: 14px;
	font-weight: bold;
}
.tdmenu2 {
	border: 1px solid #CCCCCC;
	height: 410px;
	width: 98.5%;
	border-collapse: collapse;
}
.tabel {
	border: 1px solid #CCCCCC;
	border-collapse: collapse;
}
.button {
	background-image: url(img/button-bg.png);
	background-repeat: repeat-x;
	background-position: center top;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #000000;
	border: 1px solid #999999;
	padding: 1px;
	width: 60px;
	font-weight: normal;
}
.style5 {color: #FFFFFF}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style>
</head>

<body>
<div id="Layer2">
  <div align="center"><img src="img/printing_terminal_logo.png" width="63" height="53" /></div>
</div>
<div class="style2" id="Layer3">Sistem Informasi Persediaan Barang Pada BUSINESS CENTER UNIVERSITAS ALMUSLIM</div>
<table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="tabel">
  <tr>
    <td height="75" colspan="3" background="img/1.png">&nbsp;</td>
  </tr>
  <tr>
    <td width="18%" bgcolor="#FFFFFF"><div class="tdmenu">
<?php
if (empty($_SESSION['user'])) { ?>
      <h3 class="judul">Silahkan Login</h3>
      <p align="justify" class="style3">Untuk bisa mengakses aplikasi ini, silahkan anda login dengan menggunakan username dan password yang anda miliki, jika belum memiliki password silahkan hubungi administrator !</p>
      <table width="100%">
        <form method="post" action="index.php">
          <tr>
            <td><span class="style3">Username</span></td>
            <td><input type="text" name="username" size="15" /></td>
          </tr>
          <tr>
            <td><span class="style3">Password</span></td>
            <td><input type="password" name="password" size="15" /></td>
          </tr>
          <tr>
            <td colspan="2"><input name="submit" type="submit" class="button" value="Login" /></td>
          </tr>
        </form>
      </table>
<?php
} else { 
include('menu.php');
}
if (!empty($_GET[err])){
?>
      <p class="style4"><font color="red">Gagal Login .. !!<br/>
        Cek Username dan Password</font></p>
      <?php } ?>
    </div></td>
    <td width="0%" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="82%" bgcolor="#FFFFFF"><div class="tdmenu2">
      <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><span class="td_konten">
<?php 
if(!empty($_GET[file])) 
{
	if(file_exists("file/$_GET[file].php")) 
	{
	include("file/$_GET[file].php");
	} else 
	{
	echo "<h2>Error !<br/>Halaman tidak ditemukan !</h2>";
	}
} else 
{
include('file/intro.php');
}
?>
          </span></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="42" colspan="3" align="center" background="img/botbar-bg.png"><span class="style5">Created by: Fitriani &copy; 2012<br />
    Best viewed in Mozilla Firefox, Google Chrome, and Opera</span></td>
  </tr>
</table>
</body>
</html>
