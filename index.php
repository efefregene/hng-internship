<?php
	$server = "localhost";
	$userame = "root";
	$password = "";
	$database = "HNG";

	//Create Connection
	$conn = mysqli_connect($server, $username, $password, $database);

	//Check Connection
	if(!conn){
		die(mysql_error(conn));
	}
	//Fetch Data from DB Table
	$sql = "SELECT * FROM users WHERE id = $id";
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$count = mysqli_num_rows($result);
	if($count > 0){
		while ($data = mysqli_fetch_assoc($result)){
			echo "Welcome ".$data['firstname']." ".$data['lastname'];
		}
	}

?>