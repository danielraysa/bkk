<html>
<head>
<basefont face="Arial">
</head>
<body>

<?php

error_reporting(E_ALL);
if (!isset($_POST['Submit'])) {
// form not submitted
?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
Search <input type="text" name="search"><br>
<select size="1" name="dropdown">
<option value="" selected>Search By...</option>
<option value="first">First Name</option>
<option value="last">Last Name</option>
<option value="company">Company</option>
<option value="address">Street Name</option>
<option value="town">Town</option>
<option value="city">City</option>
<option value="postcode">Postcode</option>
<option value="mobile">Mobile Number</option>
<option value="phone">Phone Number</option>
<option value="email">Email Address</option>
<option value="website">Web Address</option>
</select>
<input type="submit" value="Submit">
</form>

<?php
}

else {

// form submitted
// set server access variables
$host = "localhost";
$user = "root";
$pass = "";
$db = "combose";

$search = empty($_POST['search'])? die ("ERROR: Enter Search Criteria") : mysql_escape_string($_POST['search']);
$dropdown = empty($_POST['dropdown'])? die ("ERROR: Select from Dropdown") : mysql_escape_string($_POST['dropdown']);

// Open Connection

$connect = mysql_connect($host, $user, $pass) or die ("Unable to connect to host");

//Select Database

mysql_select_db($db) or die ("Unable to connect to database");

//Create Query

$query = "SELECT * FROM contacts WHERE $dropdown='$search'" or die (mysql_error());

$result = mysql_query($query) or die (mysql_error());

$num=mysql_numrows($result);

mysql_close($connect);

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {

$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$company=mysql_result($result,$i,"company");
$address=mysql_result($result,$i,"address");
$town=mysql_result($result,$i,"town");
$city=mysql_result($result,$i,"city");
$postcode=mysql_result($result,$i,"postcode");
$mobile=mysql_result($result,$i,"mobile");
$phone=mysql_result($result,$i,"phone");
$email=mysql_result($result,$i,"email");
$website=mysql_result($result,$i,"website");

echo "<b>$first $last</b><br>Company: $company<br><br>Street Name: $address<br>Town: $town<br>City: $city<br>Postcode: $postcode<br>Mobile: $mobile<br>Phone: $phone<br>Email: $email<br>Website: $website<br><hr><br>";

$i++;

}
}
?>

</body>
</html> 