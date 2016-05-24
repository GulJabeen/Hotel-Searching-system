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
$hotel_name=$_POST['h_name'];
$hotel_city=$_POST['h_city'];
$hotel_location=$_POST['h_location'];
$hotel_class=$_POST['h_class'];
$hotel_rating=$_POST['h_rating'];
$hotel_starting_price=$_POST['h_startingprice'];
$hotel_roomavailable=$_POST['h_available_room'];
$hotel_phone_number=$_POST['phone'];

$file_name=$_FILES['pic']['name'];
 $file_size=$_FILES['pic']['size'];
$file_type=$_FILES['pic']['type'];
$file_temp_name=$_FILES['pic']['tmp_name'];
$destination="uploads/".rand().$file_name;
 move_uploaded_file($file_temp_name,$destination);

 $Sql="INSERT INTO `hotel_data`.`hotel_details` (`hotel_name`, `hotel_city`, `hotel_address`, `hotel_class`, `Phone_number`, `hotel_pic`, `hotel_starting_price`, `available_room`, `rating`) VALUES ( '$hotel_name', '$hotel_city',  '$hotel_location', '$hotel_class','$hotel_phone_number', '$destination', '$hotel_starting_price', '$hotel_roomavailable','$hotel_rating')";
 mysql_query($Sql) or die("not occur");
 echo "data inserted";
?>
</body>
</html>