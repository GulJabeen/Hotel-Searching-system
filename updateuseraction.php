<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
error_reporting(0);
$username=$_POST['User_name'];
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
if($name!=null)
{
	
	$sql = "UPDATE user SET name=' $name'  WHERE User_name = '$username'";

mysql_query($sql) or die("not12");
}
if($password!=null)
{
	
	$sql = "UPDATE user SET password=' $password' WHERE User_name = '$username'";

mysql_query($sql) or die("not13");
}

if($email!=null)
{
	
	$sql = "UPDATE user SET email=' $email' WHERE User_name = '$username'";

mysql_query($sql) or die("not13");
}

?>
</body>
</html>