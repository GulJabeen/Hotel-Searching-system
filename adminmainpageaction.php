<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$button=$_POST['button'];

if($button=="Insert hotel")
{

	header("location:hotelinsertion.php?msg=welcome admin");}
 if($button=="ViewHotel")
{

	header("location:hotelview.php?msg=welcome admin");}
	 if($button=="View User")
{

	header("location:viewuser.php?msg=welcome admin");}
	 if($button=="Insert User")
{

	header("location:Signupadmin.php?msg=welcome admin");}

	if($button=="Delete hotel")
{

	header("location:deletehotel.php?msg=welcome admin");}
		if($button=="Updatehotel")
{

	header("location:updatehotel.php?msg=welcome admin");}
			if($button=="updateuser")
{

	header("location:updateuser.php?msg=welcome admin");}
				if($button=="delete user")
{

	header("location:deleteuser.php?msg=welcome admin");}
					if($button=="make reservation")
{

	header("location:reservationform.php?msg=welcome admin");}
	if($button=="View reservation")
{

	header("location:viewreservation.php?msg=welcome admin");}
	if($button=="delete reservation")
{

	header("location:deletereservation.php?msg=welcome admin");}
?>

</body>
</html>