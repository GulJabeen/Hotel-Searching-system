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
$user_name=$_POST['username'];
$cnic=$_POST['CNIC'];
$hotel_name=$_POST['hotel_name'];
$hotel_city=$_POST['hotel_city'];
$hotel_room=$_POST['room'];


$sql="INSERT INTO `hotel_data`.`reservation` (`id`, `user_name`, ` cnic`, `hotel_name`, `hotel_city`, `no_of_room_Selected`) VALUES (NULL, '$user_name', '$cnic', '$hotel_name', '$hotel_city', '$hotel_room')";
$id=$user_name.rand();
mysql_query($sql) or die("not occur");
echo "reservation succesful your id 
is $id";
?>
</body>
</html>