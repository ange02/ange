 <?php
// Connecction to the database
$db = mysql_connect("localhost","root","");
mysql_select_db("work_ange",$db);
?>
<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center"bgcolor="red">
<tr class="tableheader">
<td align="center">WELCOME TO User Dashboard</td>
</tr>
<tr class="tablerow">
<td>
<?php
if($_SESSION["username"]) {
?>
Welcome <?php echo $_SESSION["username"]; ?><?php echo". Click here to <a href="logout.php" tite="Logout"> Logout."?>
<?php
}
?>
</td>
</tr>
</body></html>