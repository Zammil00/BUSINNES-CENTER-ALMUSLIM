<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
}
.button {font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #FFFFFF;
	background-image: url(../img/menu.jpg);
	background-repeat: repeat-x;
	background-position: center top;
	width: 60px;
	padding: 1px;
	border: 1px solid #999999;
}
.style1 {color: #FFFFFF;
	font-weight: bold;
}
-->
</style>    <link rel="stylesheet" type="text/css" href="/businnes-center/assets/css/modern.css" />
</head>

<body>
<table width="240" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" align="center" background="../../img/menu.jpg"><span class="style1">Jajak Pendapat</span></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><table width="235" align="center" cellpadding="3" cellspacing="3">
      <tr>
        <td width="38%">Bagaimana menurut Anda tentang konten informasi website ini ? </td>
      </tr>
      <tr>
        <td><form action="result.php" method="post" name="poll" id="poll">
          <?
include 'koneksi.php';
$strSQL = "select nama from favplayer";
$qry = @mysqli_query($conn, $strSQL,$conn)
or die("Query salah: " . mysqli_error($conn));
while ($row = mysqli_fetch_array($qry)) {
?>
          <input type="radio" name="player" value="<?=$row['nama']?>" />
          <?=$row['nama']?>
          <br />
          <?
}
?>
          <br />
          <input name="submit" type="submit" class="button" style="background-color:#666666" value="Hasil"/>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>


