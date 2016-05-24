<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="deleteuser.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
   include("connection.php");
     error_reporting(0);
	 $sqlselect="SELECT     User_name
	 FROM `user`";
	
	 $result=mysql_query($sqlselect);
	 
$total_hotel=mysql_num_rows($result);

  ?>
<div id = "wraper" align="center">
<div id = "header">
  <p>Hotel<sub>Reservation</sub>System</p>
</div>
<div id = "header_Menu">
<table width="1009" height="111">

<tr>
<td align="center"><div id = "header_Menu_a"><a href="index.html"><img src="home.png" width="100" height="100" title="Home"/></a></div></td>
<td align="center"><div id = "header_Menu_b"><a href="Login.php"><img src="AboutUs.jpg".jpg".jpg" width="100" height="100" title="About US"/></a></div></td>
<td align="center"><div id = "header_Menu_c"><a href="search.html"><img src="search.jpg" width="80" height="80" title="Search"/></div></td>
<td align="center"><div id = "header_Menu_d">
<a  href="contactus.html" ><img src="contactus.jpg" width="100" height="100" title="Contact Us"/></div>
</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
<form id="form1" name="form1" method="post"   action="deleteuseraction.php">
  <p>&nbsp;</p>
  <span class="labelinsert">
 
  <strong>delete User</strong>
  </p>
  </span>
  <p>User Name </br>
    <?php
    echo "<select name='User_name'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['User_name'] ."'>" . $row['User_name'] ."</option>";
}
echo "</select>"
?>
  </p>
  <p>
    <input name="button" type="submit" class="BUTTONinsert" id="button" value="Submit" />
    </div>
  </p>
  <p></p>
  <p></p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="textfieldinsertform" id=footer>
  <p id="footer">copy rights reserved </p>
</div>
</body>
</body>
</html>