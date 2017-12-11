<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "arihant";


	$con = new mysqli($servername, $username, $password, $dbname);

	if ($con->connect_error)
	{
		die("Connection failed: " . $con->connect_error);
	}


	//$con=mysqli_connect('localhost','root','','arihant') or die(mysqli_connect_error());
?>
