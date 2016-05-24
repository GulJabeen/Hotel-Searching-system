<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="fileupdateuser.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
   include("connection.php");
     error_reporting(0);
	 $sqlselect="SELECT    User_name
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
<form id="form1" name="form1" method="post"    action="updateuseraction.php">
  <p>&nbsp;</p>
  <span class="labelinsert">
  <form  action="" method="post" name="form1" id="form1" >
  <strong>Update  User</strong>
  </p>
  </span>
  <p>HoteL name </br>
    <?php
    echo "<select name='User_name'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['User_name'] ."'>" . $row['User_name'] ."</option>";
}
echo "</select>"
?>
  </p>
  <p>
    <label for="textfield2">Name<br />
    </label>
    <input name="name" type="text" class="textfieldinsertform" id="textfield2" size="59" / required="required" />
  </p>
  <p>
    <label for="textfield3"><span class="insertfield">PASSWORD</span><br />
    </label>
    <input name="password" type="password" class="textfieldinsertform" id="textfield3" size="59" / required="required" />
  </p>
  <p>
    <label for="textfield4"><span class="textfieldinsertform">Email</span><br />
    </label>
    <input name="email" type="text" class="textfieldinsertform" id="textfield4" size="59" / required="required" />
  </p>
  <p>
    <label for="textfield5"><span class="insertfield"></span></label>
    </p>
  <p>&nbsp;</p>
  <p>
    <label for="fileField"></label>
    <input name="button2" type="submit" class="BUTTONinsert" id="button2" value="Submit" />
  </p>
  <p>&nbsp;</p>
  <p></p>
  <p>

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
</html>