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
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.button {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #FFFFFF;
	background-image: url(../img/menu.jpg);
	background-repeat: repeat-x;
	background-position: center top;
	width: 60px;
	padding: 1px;
	border: 1px solid #999999;
}
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
<table width="240" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" align="center" background="../assets/img/menu.jpg"><span class="style1">Register</span></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC"><form id="form1" name="form1" method="post" action="log.php?op=in">
      <table width="235" align="center" cellpadding="3" cellspacing="3">
        <tr>
          <td width="38%"><input name="username_plg" type="text" id="username_plg" onfocus="if(this.value=='Username') this.value='';" onblur="if(this.value=='') this.value='Username';" value="Username" size="32" alt="Username"/></td>
          </tr>
        <tr>
          <td><input name="password" type="password" id="password" onfocus="if(this.value=='password') this.value='';" onblur="if(this.value=='') this.value='password';" value="password" size="32" alt="Password" /></td>
          </tr>
        <tr>
          <td><input name="Submit" type="submit" class="button" style="background-color:#666666" value="Log in"/></td>
        </tr>
        <tr>
          <td><a href="daftar_member.php"><strong>Daftar</strong></a></td>
          </tr>
        <tr>
          <td><strong><a href="lupa_password.php">Lupa Password</a></strong> </td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
