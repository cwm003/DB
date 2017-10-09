<?php
	
	/**************************connect database*********************************/
	
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
	
	$sql = "INSERT INTO order_customer(Name,OrderID,Detail,Total,Price,linetotal,startdate,deadline,Tel)
            VALUES ('".$_POST["Name"]."','".$_POST["OrderID"]."', '".$_POST["Detail"]."','".$_POST["Total"]."','".$_POST["Price"]."','".$_POST["linetotal"]."','".$_POST["startdate"]."','".$_POST["deadline"]."','".$_POST["Tel"]."')";
	if ($conn->query($sql) === TRUE) {
		header('Location:index.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
?>
