<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

if($_POST['user_name']=="kami" and $_POST['password']=="1234")
{
	header("location:admimainpage.php?msg=welcome admin");
	exit();
	}
 
	else
	header("location:Login.php?msg=invalid data");
?>
</body>
</html>