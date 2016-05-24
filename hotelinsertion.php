<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="insertionhotelform.css" rel="stylesheet" type="text/css" />
</head>

<body>
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
</div>
<div id="form">
<blockquote>
  <p class="labelinsert"><strong>insert</strong></p>
  <form action="action.php" method="post" enctype="multipart/form-data" name="form1" id="form1" >
    <p>
      <label for="textfield"><span class="insertfield">Hotel Name</span><br />
      </label>
      <input name="h_name" type="text" class="textfieldinsertform"  id="textfield" size="59" /  required="required">
    </p>
    <p>
      <label for="textfield2"><span class="insertfield">Hotel City</span><br />
      </label>
      <input name="h_city" type="text" class="textfieldinsertform" id="textfield2" size="59" / required="required">
</p>
    <p>
      <label for="textfield3"><span class="insertfield">Hotel Location</span><br />
      </label>
      <input name="h_location" type="text" class="textfieldinsertform" id="textfield3" size="59" / required="required">
    </p>
    <p>
      <label for="textfield4"><span class="insertfield">Hotel Class</span><br />
      </label>
      <input name="h_class" type="text" class="textfieldinsertform" id="textfield4" size="59" / required="required">
    </p>
    <p>
      <label for="textfield5"><span class="insertfield">Hotel Starting price</span><br />
      </label>
      <input name="h_startingprice" type="text" class="textfieldinsertform" id="textfield5" size="59"  required="required"/>
    </p>
    <p class="insertfield">Available room</p>
    <p>
  <input name="h_available_room" type="text" class="textfieldinsertform" id="textfield6" size="59"  required="required"/>
    </p>
    <p>
      <label for="textfield9"><span class="insertfield">Rating</span><br />
      </label>
      <input name="h_rating" type="text" class="textfieldinsertform" id="textfield9" size="59" required="required" />
    </p>
    <p>
      <label for="textfield6"><span class="insertfield">Phone-number</span><br />
      </label>
      <input name="phone" type="text" class="textfieldinsertform" id="textfield6" size="59" required="required" />
    </p>
    <p class="insertfield">Insert PIC</p>
    <p>
  <label for="fileField"></label>
      <input name="pic" type="file" class="textfieldinsertform" id="fileField" size="57" required="required" />
    </p>
    <p>
        <input name="button" type="submit" class="BUTTONinsert" id="button" value="Submit" />
    </p>
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