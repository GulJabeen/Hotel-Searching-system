<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include("connection.php");
error_reporting(0);
$h_name=$_POST['hotel_name'];
$sql = "DELETE  
	 FROM `hotel_details`
	 where hotel_name='$h_name'";

mysql_query($sql) or die("not1");
?>
</body>
</html>