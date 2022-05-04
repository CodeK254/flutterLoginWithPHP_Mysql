<?php 

	$connect = mysqli_connect('localhost','tittoh','test1234','learn_database');

	if (!$connect) {
		echo "Database Connection Failed";
	}

	$username = $_GET['username'];
	$password = $_GET['password'];

	$sql = "SELECT * FROM login WHERE username = '".$username."' AND password = '".$password."' ";

	$result = mysqli_query($connect, $sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Error");
	}
	else{
		$insert = "INSERT INTO login(username, password) VALUES ('$username','$password')";
		$query = mysqli_query($connect, $insert);
		if ($query) {
			echo json_encode("Success");
		} else {
			echo json_encode("Error");
		}
	}
?>