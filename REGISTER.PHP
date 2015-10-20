 <?php
// Connecction to the database
$db = mysql_connect("localhost","root","");
mysql_select_db("work_ange",$db);
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="save.php">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center" bgcolor="red">
<tr class="tableheader">
<td align="center" colspan="2"><strong><b><font size="35">Details of Person</font></b></strong></td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input name="username" type="text" id="username"></td>
</tr>
<tr class="tablerow">
<td align="right">Email</td>
<td><input name="email" type="text" id="email"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Send"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><a href="index.php">Sign In</a></td>
</tr>
</table>
</form>
</body></html>