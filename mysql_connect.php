<?php 
	$conn = mysqli_connect('localhost','tittoh','test1234','learn_database');

	if (!$conn) {
		echo "Connection Error: ".mysqli_connect_error($conn);
	}

?>