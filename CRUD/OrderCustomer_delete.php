<?php
// connect to the database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "DB";
	$conn = new mysqli($servername, $username, $password,$dbname);
	mysqli_set_charset($conn, "utf8");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
//getting id of the data from url
$id = $_GET['id'];
//deleting the row from table
$sql = mysqli_query($conn, "DELETE FROM order_customer WHERE id=$id");
//redirecting to the display page (index.php in our case)
header("Location:index.php");