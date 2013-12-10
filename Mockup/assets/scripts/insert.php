<?php
	$con=mysqli_connect("localhost","theUnixRebels","databaserules","theUnixRebels");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	$sql="INSERT INTO CheckedIn(name) VALUES ('$_POST[name]')";

	if (!mysqli_query($con,$sql))
	  {
	  die('Error: ' . mysqli_error($con));
	  }
	echo "1 record added";

	mysqli_close($con);
?>
