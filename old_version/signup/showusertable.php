<?php
ini_set('display_errors','On');
error_reporting(E_ALL);
$db_host = "dbserver.engr.scu.edu";
$db_user = "wchang";
$db_pass = "00000955018";
$db_name = "sdb_wchang";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM HOMEPAGE";

$result = $con->query($sql);
if (!$result)
{
    die('Error: ' . mysqli_error($con));
}	

echo "<table border='1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Street Address/th>
<th>City</th>
<th>State or Province</th>
<th>Country</th>
<th>ZIP Code</th>
<th>Email</th>
<th>Phone Number</th>
<th>Member Code</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>" . $row['FIRSTNAME'] . "</td>";
echo "<td>" . $row['LASTNAME'] . "</td>";
echo "<td>" . $row['STREETADDRESS'] . "</td>";
echo "<td>" . $row['CITY'] . "</td>";
echo "<td>" . $row['STATEORPROVINCE'] . "</td>";
echo "<td>" . $row['COUNTRY'] . "</td>";
echo "<td>" . $row['ZIPCODE'] . "</td>";
echo "<td>" . $row['EMAIL'] . "</td>";
echo "<td>" . $row['PHONENUMBER'] . "</td>";
echo "<td>" . $row['MEMBERCODE'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
