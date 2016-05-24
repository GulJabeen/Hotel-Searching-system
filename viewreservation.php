<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="viewreservation.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id = "wraper" align="center">
<div id = "header">
  <p>Hotel<sub>Reservation</sub>System</p>
</div>
<div id = "header_Menu">
<table width="1009" height="111">

<tr>
<td width="263" height="105" align="center"><div id = "header_Menu_a"><a href="index.html"><img src="home.png" width="100" height="100" title="Home"/></a></div></td>
<td width="263" align="center"><div id = "header_Menu_b"><a href="Login.php"><img src="AboutUs.jpg".jpg".jpg" width="100" height="100" title="About US"/></a></div></td>
<td width="235" align="center"><div id = "header_Menu_c"><a href="search.html"><img src="search.jpg" width="80" height="80" title="Search"/></div></td>
<td width="220" align="center"><div id = "header_Menu_d"><a href="contactus.html"><img src="contactus.jpg" width="100" height="100" title="Contact Us"/></div></td>
</tr>
</table>
</div>
<div id="form">
<blockquote>
  <?php
  include("connection.php");
$sqlselect="SELECT * FROM  `reservation";
$result=mysql_query($sqlselect);
$total_hotel=mysql_num_rows($result);
  ?>
 &nbsp; &nbsp;  &nbsp;  &nbsp;
 <table width="100%" border="1"    >
   <tr  align="center"  class="hotelheading"      bgcolor="#9999FF" >
     <td width="174"><p>UserName</p></td>
     <td width="101">CNIC</td>
     <td width="97">hotel name</td>
     <td width="113"> hotel City</td>
    
     <td width="109"><p>no of room </p>
      
   </tr>
   <?php
while($rows = mysql_fetch_array($result))
{
?>
   <tr>
     <td height="155" align=center  class="hotelname"><?php  echo $rows[1]; ?></td>
     <td class="hotelname" align=center><?php  echo $rows[2]; ?></td>
     <td   class="hotelname" align="center"><?php  echo $rows[3]; ?></td>
     <td  class="hotelname"align="center"><?php  echo $rows[4]; ?></td>
   
     <td  class="hotelname"align="center"><?php  echo $rows[5]; ?></td>
   </tr>

   </tr>
   <?php } ?>
 </table>
</blockquote>
<p><label></label>
</p>
<p>&nbsp;</p>
</div>
<div class="textfieldinsertform" id=footer>
  <p id="footer">copy rights reserved </p>
</div>
</body>
</html>