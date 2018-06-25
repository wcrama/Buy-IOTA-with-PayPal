<?php
$con=mysqli_connect("localhost","root","","iotakopen");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM orders");

echo "<table border='1'>
<tr>
<th>id</th>
<th>amount</th>
<th>iotaprice</th>
<th>totalprice</th>
<th>email</th>
<th>receiveaddress</th>
<th>date_time</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['amount'] . "</td>";
echo "<td>" . $row['iotaprice'] . "</td>";
echo "<td>" . $row['totalprice'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['receiveaddress'] . "</td>";
echo "<td>" . $row['date_time'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
