<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="signup.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include("connection.php");
error_reporting(0);
$name=$_POST['name'];
$user_name=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$sql="INSERT INTO `hotel_data`.`user` (`ID`, `Name`, `User_name`, `password`, `email`) VALUES (NULL, '$name', '$user_name', '$password', '$email')";
 mysql_query($sql) or die("not occur");
 echo mysql_query($sql);
 header("location:reservationform.php?msg=welcome to reservation");
?>
</body>
</html>