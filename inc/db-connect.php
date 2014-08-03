<?php
$con = con();
$uname = uname();
$pw = pw();
$dbname = dbname();

function con(){
	//Globalize this variable
	global $con;

	// Create connection
	$con=mysqli_connect( "$uname","$pw", "$dbname");

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	?>
}