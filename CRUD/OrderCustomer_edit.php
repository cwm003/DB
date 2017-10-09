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
	
	$id = $_GET['id'];
	$sql = "UPDATE order_customer 	
			SET Name = '$_POST[Name]',
				OrderID = '$_POST[OrderID]',
			 	Detail = '$_POST[Detail]',
			 	Total = '$_POST[Total]',
			 	Price = '$_POST[Price]',
			 	linetotal = '$_POST[linetotal]',
                startdate = '$_POST[startdate]',
                deadline = '$_POST[deadline]',
                Tel = '$_POST[Tel]'
			WHERE id=$id " ;
	//$sql = "INSERT INTO freshman (student_id,firstname,lastname,nickname,school,entrance,img)
            //VALUES ('".$_POST["student_id"]."','".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["nickname"]."','".$_POST["school"]."','".$_POST["entrance"]."','".$target_file."')";
	if ($conn->query($sql) === TRUE) {
		header('Location:index.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
?>