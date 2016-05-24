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
$hotel_name=$_POST['hotel_name'];
$hotel_city=$_POST['h_city'];
$hotel_location=$_POST['h_location'];
$hotel_class=$_POST['h_class'];
$hotel_rating=$_POST['h_rating'];
$hotel_starting_price=$_POST['h_startingprice'];
$hotel_roomavailable=$_POST['h_available_room'];
$hotel_phone_number=$_POST['phone'];

if($hotel_city!=null)
{
	
	$sql = "UPDATE hotel_details SET hotel_city=' $hotel_city'  WHERE hotel_name = '$hotel_name'";

mysql_query($sql) or die("not12");
}
if($hotel_location!=null)
{
	
	$sql = "UPDATE hotel_details SET hotel_address=' $hotel_city' WHERE hotel_name = '$hotel_name'";

mysql_query($sql) or die("not13");
}

if($hotel_class!=null)
{
	
	$sql = "UPDATE hotel_details SET hotel_class='$hotel_class' WHERE hotel_name = '$hotel_name'";

mysql_query($sql) or die("not14");
}
if($hotel_rating!=null)
{
	
	$sql = "UPDATE hotel_details SET rating='$hotel_rating' WHERE hotel_name = '$hotel_name'";

mysql_query($sql) or die("not15");
}
if($hotel_starting_price!=null)
{
	
	$sql = "UPDATE hotel_details SET hotel_starting_price='$hotel_starting_price'  WHERE hotel_name = '$hotel_name'";

mysql_query($sql) or die("not16");
}
if($hotel_roomavailable!=null)
{
	
	$sql = "UPDATE hotel_details SET available_room='$hotel_roomavailable'  WHERE hotel_name = '$hotel_name'";

mysql_query($sql) or die("not17");
}
if($hotel_phone_number!=null)
{
	
	$sql = "UPDATE hotel_details SET Phone_number='$hotel_phone_number'  WHERE hotel_name = '$hotel_name'";

mysql_query($sql) or die("not1");
}
 ?>
 
 
</body>
</html>