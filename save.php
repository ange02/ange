 <?php
// Connecction to the database
$db = mysql_connect("localhost","root","");
mysql_select_db("work_ange",$db);
//Start posting my fileds
$id=$_POST['id'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

// Inserting 
$sql=mysql_query("insert into admin(id,username,email,password) values ('$id','$username','$email','$password')");
if ($result)
{
	echo"record insertion correctly back to you soon";
	
}
else
{
	echo"U r Welcome!";
}

?>
<p><span class="sytle2"><a href="INDEX.php">click here</a>to view changes in the database</span>;</p>

