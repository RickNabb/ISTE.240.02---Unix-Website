<?php
$con=mysqli_connect("localhost","theUnixRebels","databaserules","theUnixRebels");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="select guestID,name from CheckedIn;";
$result = mysqli_query($con,$sql);
while($data = mysqli_fetch_row($result)) {
    echo "<p id=\"tabbed\">$data[0] - $data[1]</p>";
}

echo "records returned";

mysqli_close($con);
?>