<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="reservationform.css" rel="stylesheet" type="text/css" />
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
<td width="263" align="center"><div id = "header_Menu_b"><a href="aboutus.html"><img src="AboutUs.jpg".jpg".jpg" width="100" height="100" title="About US"/></a></div></td>
<td width="235" align="center"><div id = "header_Menu_c"><a href="search.html"><img src="search.jpg" width="80" height="80" title="Search"/></div></td>
<td width="220" align="center"><div id = "header_Menu_d"><a href=""><img src="contactus.jpg" width="100" height="100" title="Contact Us"/></div></td>
</tr>
</table>
<?php
   include("connection.php");
     error_reporting(0);
	 $sqlselect="SELECT     hotel_name
	 FROM `hotel_details`";
	
	 $result=mysql_query($sqlselect);
	 
$total_hotel=mysql_num_rows($result);

  ?>
</div>
<div id="form">
<blockquote>
  <p class="labelinsert"><strong>Reservation Form</strong></p>
  <form  action="reservationaction.php"method="post"  name="form1" id="form1" >
    <p>
      <label for="textfield3">UserName<br />
      </label>
      <input name="username" type="text" class="textfieldinsertform"  id="textfield3" size="59" /  required="required" />
  </p>
    <p>
      <label for="username">Hotel Name<br />
        <?php
    echo "<select name='hotel_name'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['hotel_name'] ."'>" . $row['hotel_name'] ."</option>";
}
echo "</select>"
?>
<br />
<br />
</label>Hotel City
    <select name=hotel_city  class="textfieldinsertform" >
    <option value="=Islamabad">Islamabad/Rawalpindi</option>
    <option value="Lahore">Lahore</option>
   
    <option value="quetta">quetta</option>
    <option value="karachi">karachi</option>

    
    </select>    
        <br />
 
    </label>Select no of room
    <select name=room  class="textfieldinsertform" >
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    
    </select>    
    <p>CNIC
      <input name="CNIC" type="text" class="textfieldinsertform" id="textfield9" size="59" required="required" />
  </p>
    <p>
      <input name="button" type="submit" class="BUTTONinsert" id="button" value="Submit" />
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp; </p>
  </form>
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