 <?php
// Connecction to the database
$db = mysql_connect("localhost","root","");
mysql_select_db("work_ange",$db);
?>
<?php
//session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("work_ange",$conn);
$result = mysql_query("SELECT * FROM admin WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row[username];
$_SESSION["password"] = $row[password];

} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:USER_DASHBOARD.php");
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" bgcolor="red">
<tr class="tableheader">
<td align="center" colspan="2"><strong><b><font size="35">Enter Your Details</font></b></strong></td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input name="username" type="text" id="username"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Login"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><a href="register.php">Sign Up</a></td>
</tr>
</table>
</form>
</body></html>